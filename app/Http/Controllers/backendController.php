<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;
use App\Models\AdminInfo;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\BlogSeo;
use App\Models\category_blog_seo;
use App\Models\GlobalSeo;
use App\Models\PageSeo;
use App\Models\customer;
use App\Models\Contact;
use App\Models\Affiliate;
use Intervention\Image\Facades\Image;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\ProductReview;

class backendController extends Controller
{
    function login(Request $req){
        if(Cookie::has('pswd')){
            return redirect('admin/dashboard');
        }else{
            return view('admin.login');
        }
    }
    function checklogin(Request $req){
        
        $dbuser =  AdminInfo::first();
        $dbusername = $dbuser->username;
        $dbemail = $dbuser->email;
        $dbpswd = $dbuser->password;

        $email = $req->input('email');
        $mdpswd = $req->input('pswd');
        $pswd = md5($mdpswd);

        if(($dbusername == $email || $dbemail == $email) && $dbpswd == $pswd){
             
        $cookie = Cookie::make('name', $dbusername);
        Cookie::queue($cookie);
        $cookieemail = Cookie::make('email', $dbemail);
        Cookie::queue($cookieemail);
        $cookie1 = Cookie::make('pswd', $dbpswd);
        Cookie::queue($cookie1);
        return true;
        }
        else{
         return false;
        }
    }
    function logout(Request $req){
        if(Cookie::has('pswd'))
        {
           $ckname = Cookie::forget('name');
           Cookie::queue($ckname);

           $ckemail = Cookie::forget('email');
           Cookie::queue($ckemail);

           $ckpswd = Cookie::forget('pswd');
           Cookie::queue($ckpswd);

           return redirect('admin');
        }
    }
    function dashboard(Request $req){
          if(Cookie::has('pswd')){
            $customers = Blog::all();
            $customer = count($customers);

            $contacts = Contact::all();
            $contact = count($contacts);

            $affiliates = Affiliate::all();
            $affiliate = count($affiliates);
            return view('admin.dashboard',['customer'=>$customer, 'contact'=>$contact, 'affiliate'=>$affiliate]);
          }
          else{
            return redirect('admin');
          }
    }

    function allblogs(Request $req){
      $search = $req['search'] ?? "";
      if(Cookie::has('pswd')){
        $dbs = Blog::orderBy('id', 'desc')->get();
        if($search){
            $dbs = DB::table('blogs as b')
            ->where('b.title', 'LIKE', '%' . $search . '%')
            ->get();
        }
        
        return view('admin.blogs.all-blogs',['blog'=>$dbs,'search'=>$search]);
      }else{
        return redirect('admin'); 
      }
    }
    function addblog(){
      if(Cookie::has('pswd')){
        $dbs = BlogCategory::all();
        return view('admin.blogs.add-blog',['members'=>$dbs]);
      }
      else{
        return redirect('admin');
      }
    }

 
    function wpaddblog(Request $req){
      if(Cookie::has('pswd')){
        $dbs = new Blog(); 
        $cname = $req->input('title');
        $origname = '';
        if ($req->hasFile('file')) 
        {
        $image = $req->file('file');
        $name = $image->getClientOriginalName();
        $t=time();
        $d=date("Y-m-d",$t);
        $origname = $d."-".$t."-".$name;
        
        $customFolderPath = public_path('blogs');
        if (!file_exists($customFolderPath)) 
        {
        mkdir($customFolderPath, 0755, true);
        } 
        $image->move($customFolderPath, $origname);

        $imagePath = public_path('blogs/' . $origname);
        $imagess = Image::make($imagePath);
        $thumbnail = $imagess->resize(244, 300);
        $thumbnailPath = public_path('blogs-thumb/' . $origname);
        $thumbnail->save($thumbnailPath);
        
        $imagePath = public_path('blogs/' . $origname);
        $imagess = Image::make($imagePath);
        $thumbnail = $imagess->resize(100, 123);
        $thumbnailPath = public_path('recent-blogs-thumb/' . $origname);
        $thumbnail->save($thumbnailPath);
  
        $name = $req->file('file')->getClientOriginalName();
        $origname = $d."-".$t."-".$name;
        }
         
        if($cname){
          $dbs->title = $cname;
          $dbs->file = $origname;
          $result = $dbs->save();
          return true;
        }
        else{
          return False;
         }
        }
        else{
          return redirect('admin');
        }
    }

    function editblog($id){
      if(Cookie::has('pswd')){
      $dbs = Blog::find($id);
      $allcats = BlogCategory::all();
      $cats = BlogCategory::all();
      return view('admin.blogs.edit-blog',['members'=>$dbs, 'allcats'=>$allcats, 'cats'=>$cats]);
    }
    else{
      return redirect('admin');
    }
    }

    function UpdateBlog(Request $req)
    {
      if(Cookie::has('pswd')){
      $origname='';
      $dbs = Blog::find($req->id);
  
      if (!$dbs) {
        // Handle product not found error
        return redirect()->back()->with('error', 'Blog not found.');
      }

      
      if ($req->hasFile('file')) {
        $image = $req->file('file');
        $name = $image->getClientOriginalName();
        $t=time();
        $d=date("Y-m-d",$t);
        $origname = $d."-".$t."-".$name;
        $customFolderPath = public_path('blogs');
        $image->move($customFolderPath, $origname);
        $dbs->file = $origname;
        
        $imagePath = public_path('blogs/' . $origname);
        $imagess = Image::make($imagePath);
        $thumbnail = $imagess->resize(244, 300);
        $thumbnailPath = public_path('blogs-thumb/' . $origname);
        $thumbnail->save($thumbnailPath);
        
        $imagePath = public_path('blogs/' . $origname);
        $imagess = Image::make($imagePath);
        $thumbnail = $imagess->resize(100, 123);
        $thumbnailPath = public_path('recent-blogs-thumb/' . $origname);
        $thumbnail->save($thumbnailPath);

      }
      
        
      $dbs->title = $req->title;
      $result = $dbs->save();
      if($result){
      return true;
      }
      else{
        return false;
      }
    }
    else{
      return redirect('admin');
    }
    }
  
    function DeleteBlog($id){
      if(Cookie::has('pswd')){
      $dbseo = BlogSeo::find($id);
      if($dbseo){
        $dbseo->delete();
      }

      $dbs = Blog::find($id);
      if($dbs){
      $dbs->delete();
      return true;
      }
    }
    else{
      return redirect('admin');
    }
  }
  

    function allcategories(){
      if(Cookie::has('pswd')){
      $dbs = BlogCategory::all();
      $member = BlogCategory::all();
      return view('admin.blogs-categories.all-categories',['blogcategory'=>$dbs, 'members'=>$member]);
      }
      else{
        return redirect('admin');
      }
    }

    function editblogcategories($id){
      if(Cookie::has('pswd')){
      $dbs = BlogCategory::find($id);
      $cats = BlogCategory::all();
      return view('admin.blogs-categories.edit-blog-categories',['members'=>$dbs,'cats'=>$cats]);
    }
    else{
      return redirect('admin');
    }
    }

    
  
    function addcategory(){
      if(Cookie::has('pswd')){
        $dbs = BlogCategory::all();
        return view('admin.blogs-categories.add-category',['members'=>$dbs]);
      }
        else{
          return redirect('admin');
        }
    }

    function wpaddcategory(Request $req){
      if(Cookie::has('pswd')){
        $dbs = new BlogCategory(); 
        $cname = $req->input('bcname');
        $origname = '';
        if ($req->hasFile('bcfile')) 
        {
        $image = $req->file('bcfile');
        $name = $image->getClientOriginalName();
        $t=time();
        $d=date("Y-m-d",$t);
        $origname = $d."-".$t."-".$name;
        
        $customFolderPath = public_path('blogs');
        if (!file_exists($customFolderPath)) 
        {
        mkdir($customFolderPath, 0755, true);
        } 
        $image->move($customFolderPath, $origname);
  
        $name = $req->file('bcfile')->getClientOriginalName();
        $origname = $d."-".$t."-".$name;
        }
  
        if($cname){
          $dbs->bcname = $cname;
          $dbs->bcdescription = $req->input('bcdescription');
          $dbs->bcfile = $origname;
          $dbs->bccategory = $req->input('bccategory');
          $slug = $req->input('bcslug');
          $dbs->bcslug = $slug;
          $result = $dbs->save();
          if($result){
            $blogseo = category_blog_seo::create(['canonical'=>$slug,'file'=>$origname,'blogid'=>$dbs->id]);
            $blogseo->id;
            return True;
          }
          else{
            return False;
          }
                    
        }
        else{
            return False;
         }
        }
        else{
          return redirect('admin');
        }
    }

  
    function UpdateBlogCategory(Request $req)
  {
    if(Cookie::has('pswd')){
    $origname='';
    $dbs = BlogCategory::find($req->id);

    if (!$dbs) {
      // Handle product not found error
      return redirect()->back()->with('error', 'Blog not found.');
    }

    $slug = $req->bcslug;
    $dbs->bcslug = $slug;
  
      // Check if a new image is uploaded for updating
    if ($req->hasFile('bcfile')) {
      $image = $req->file('bcfile');
      $name = $image->getClientOriginalName();
      $t=time();
      $d=date("Y-m-d",$t);
      $origname = $d."-".$t."-".$name;
      $customFolderPath = public_path('blogs');
      $image->move($customFolderPath, $origname);
      $dbs->bcfile = $origname;
      
      $blogseo = category_blog_seo::find($dbs->id);
      $blogseo->update(['file'=>$origname]);
      $blogseo->id;
    }
       
    $blogseo = category_blog_seo::find($dbs->id);
    $blogseo->update(['canonical'=>$slug]);
    $blogseo->id;

    $dbs->bcname = $req->bcname;
    
    $dbs->bcdescription = $req->bcdescription;
    $dbs->bccategory = $req->bccategory;
    $result = $dbs->save();
    if($result){
    return true;
    }
    else{
      return false;
    }
  }
  else{
    return redirect('admin');
  }
  }

  function DeleteBlogCategory($id){
    if(Cookie::has('pswd')){
    
    $dbseo = category_blog_seo::find($id);
      if($dbseo){
        $dbseo->delete();
     }

    $dbs = BlogCategory::find($id);
    if($dbs){
    $dbs->delete();
    return true;
    }
  }
  else{
    return redirect('admin');
  }
}

  function postseo($id){
    if(Cookie::has('pswd')){
    $dbs = BlogSeo::find($id);
    return view('admin.seo',['blogid'=>$id,'members'=>$dbs]);
  }
  else{
    return redirect('admin');
  }
  }

  function wpaddpostseo(Request $req){
    if(Cookie::has('pswd')){
    $dbs = BlogSeo::find($req->blogid);
    if (!$dbs) {
      // Handle product not found error
      return redirect()->back()->with('error', 'Blog not found.');
    }
    
    $dbs->title = $req->title;
    $dbs->description = $req->description;
    $dbs->keywords = $req->keywords;
    $dbs->author = $req->author;
    $dbs->smarkup = $req->smarkup;
    $result = $dbs->save();
    if($result){
    return true;
    }
    else{
      return false;
    } 
  }
  else{
    return redirect('admin');
  }
  }

  function postcatseo($id){
    if(Cookie::has('pswd')){
    $dbs = category_blog_seo::find($id);
    return view('admin.cat-seo',['blogid'=>$id,'members'=>$dbs]);
  }
  else{
    return redirect('admin');
  }
  }

  function wpaddpostcatseo(Request $req){
    if(Cookie::has('pswd')){
    $dbs = category_blog_seo::find($req->blogid);
    if (!$dbs) {
      // Handle product not found error
      return redirect()->back()->with('error', 'Blog Category not found.');
    }
    
    $dbs->title = $req->title;
    $dbs->description = $req->description;
    $dbs->keywords = $req->keywords;
    $dbs->author = $req->author;
    $dbs->smarkup = $req->smarkup;
    $result = $dbs->save();
    if($result){
    return true;
    }
    else{
      return false;
    } 
  }
  else{
    return redirect('admin');
  }
  }

  function globalseo(){
    if(Cookie::has('pswd')){
        $gseo = GlobalSeo::find(1);
        return view('admin.globalseo',['gseo'=>$gseo]);
    }
    else{
        return redirect('admin');
    }
  }

  function wpglobalseo(Request $req){
    if(Cookie::has('pswd')){
    $gseo = GlobalSeo::find(1);
    $gseo->sitename = $req->sitename;
    $gseo->facebook = $req->facebook;
    $gseo->youtube = $req->youtube;
    $gseo->instagram = $req->instagram;
    $gseo->twitter = $req->twitter;
    $gseo->linkedin = $req->linkedin;
    $gseo->whatsapp = $req->whatsapp;
    $gseo->pinterest = $req->pinterest;
    $gseo->address1 = $req->address1;
    $gseo->address2 = $req->address2;
    $gseo->globalheader = $req->globalheader;
    $gseo->gfbs = $req->gfbs;
    $gseo->gfas = $req->gfas;
    $result = $gseo->save();
    return $result;
  }
  else{
    return redirect('admin');
  }
  }

  function admininfo(Request $req){
    if(Cookie::has('pswd')){
    $admin = AdminInfo::first();
    return view('admin.admin-info',['admin'=>$admin]);
  }
  else{
    return redirect('admin');
  }
  }

  function wpadmininfo(Request $req){
    if(Cookie::has('pswd')){
    $admin = AdminInfo::find($req->id);
    $adminseo = GlobalSeo::find($req->id);

    if($adminseo){
      $data = GlobalSeo::find($req->id);
      $data->ownername = $req->username;
      $data->save();

      $admin->username = $req->username;
      $admin->password = md5($req->password);
      $admin->save();
      return true;
    }
    else{
      $data = new GlobalSeo();
      $data->ownername = $req->username;
      $data->save();
      $admin->username = $req->username;
      $admin->password = md5($req->password);
      $admin->save();
      return true;
    }
  }
  else{
    return redirect('admin');
  }
  }

  function pageseo(){
    if(Cookie::has('pswd')){
    $data = PageSeo::all();
    return view('admin.pageseo',['data'=>$data]);
     }
    else{
      return redirect('admin');
    }
  }

  function getpage(){
    if(Cookie::has('pswd')){
    return view('admin.pages.add-page');
  }
  else{
    return redirect('admin');
  }
  }

  function addpage(Request $req){
    if(Cookie::has('pswd')){
    $dbs = new PageSeo();
    $dbs->pagename = $req->pagename;
    $dbs->slug = $req->slug;
    $result = $dbs->save();
    if($result){
      return true;
    }
    else{
      return false;
    }
  }
  else{
    return redirect('admin');
  }

  }

  function geteditpage($id){
    if(Cookie::has('pswd')){
    $data = PageSeo::find($id);
    return view('admin.pages.page-seo-form',['members'=>$data]);
  }
  else{
    return redirect('admin');
  }
  }

  function updatepageseo(Request $req){
    if(Cookie::has('pswd')){
    $origname='';
    $dbs = PageSeo::find($req->id);
    
    if (!$dbs) {
      // Handle product not found error
      return redirect()->back()->with('error', 'Page not found.');
    }
  
      // Check if a new image is uploaded for updating
    if ($req->hasFile('file')) {
      $image = $req->file('file');
      $name = $image->getClientOriginalName();
      $t=time();
      $d=date("Y-m-d",$t);
      $origname = $d."-".$t."-".$name;
      $customFolderPath = public_path('pages');
      $image->move($customFolderPath, $origname);
      $dbs->file = $origname;
    }
       
    
    $dbs->pagename = $req->pagename;
    $dbs->slug = $req->slug;
    $dbs->title = $req->title;
    $dbs->description = $req->description;
    $dbs->keywords = $req->keywords;
    $dbs->author = $req->author;
    $dbs->smarkup = $req->smarkup;
    $result = $dbs->save();
    if($result){
    return true;
    }
    else{
      return false;
    }
  }
  else{
    return redirect('admin');
  }
  }

  function deletepageseo($id){
    if(Cookie::has('pswd')){
    $dbs = PageSeo::find($id);
    if($dbs){
    $dbs->delete();
    return true;
    }
  }
  else{
    return redirect('admin');
  }
}

function allcustomers(){
  if(Cookie::has('pswd')){
    $customers = customer::all();
    return view('admin.orders.all-customers',['customers'=>$customers]);
}
else{
return redirect('admin');
}
}

function DeleteCustomer($id){
  if(Cookie::has('pswd')){
    $order = customer::where('id', $id)->first();
    if($order){
      $order->delete();
      return true;
    }
} 

else{
  return redirect('admin');
}
}

function allContacts(Request $req){
  if(Cookie::has('pswd')){
    $dbs = Contact::orderBy('id', 'desc')->get();
    
    return view('admin.contacts.all-contacts',['members'=>$dbs]);
  }
  else{
    return redirect('admin');
  }
}

function singleContact($id){
  if(Cookie::has('pswd')){
    $contact = Contact::where('id', $id)->first();
    if($contact){
       return view('admin.contacts.single-contact',['members'=>$contact]);
    }
  }
}

function DeleteContact($id){
  if(Cookie::has('pswd')){
    $order = Contact::where('id', $id)->first();
    if($order){
      $order->delete();
      return true;
    }
} 

else{
  return redirect('admin');
}
}


function contactdownloadCSV()
  {
    $fileName = 'contacts.csv';
    $users = Contact::all();
    $headers = [
      'Content-type' => 'text/csv',
      'Content-Disposition' => 'attachment; filename=' . $fileName,
      'Pragma' => 'no-cache',
      'Cache-Control' => 'must-revalidate, post-check=0, pre-check=0',
      'Expires' => '0',
    ];

    $columns = ['ID', 'Full Name', 'Email', 'Phone Number', 'Message', 'Created Date'];

    $callback = function () use ($users, $columns) {
    $file = fopen('php://output', 'w');
    fputcsv($file, $columns);
      foreach ($users as $user) {
        fputcsv($file, [
          $user->id,
          $user->fullname,
          $user->email,
          $user->phone,
          $user->message,
          $user->created_at,
         ]);
      }
      fclose($file);
      };
      return response()->stream($callback, 200, $headers);
  }

   
function contactdownloadPDF(){
  $users = Contact::all();
  $pdf = Pdf::loadView('pdf.contact', compact('users'));
  return $pdf->download('contacts.pdf');
}


function singlecontactdownloadCSV($id)
  {
    $fileName = 'contacts.csv';
    $user = Contact::find($id);
    $headers = [
      'Content-type' => 'text/csv',
      'Content-Disposition' => 'attachment; filename=' . $fileName,
      'Pragma' => 'no-cache',
      'Cache-Control' => 'must-revalidate, post-check=0, pre-check=0',
      'Expires' => '0',
    ];

    $columns = ['ID', 'Full Name', 'Email', 'Phone Number', 'Message', 'Created Date'];

    $callback = function () use ($user, $columns) {
    $file = fopen('php://output', 'w');
    fputcsv($file, $columns);
        fputcsv($file, [
          $user->id,
          $user->fullname,
          $user->email,
          $user->phone,
          $user->message,
          $user->created_at,
         ]);
      
      fclose($file);
      };
      return response()->stream($callback, 200, $headers);
  }

   
function singlecontactdownloadPDF($id){
  $user = Contact::find($id);
  $pdf = Pdf::loadView('pdf.singlecontact', compact('user'));
  return $pdf->download('contact.pdf');
}


function allAffiliates(Request $req){
  if(Cookie::has('pswd')){
    $dbs = Affiliate::orderBy('id', 'desc')->get();
    
    return view('admin.affiliate.all-affiliates',['members'=>$dbs]);
  }
  else{
    return redirect('admin');
  }
}

function singleAffiliate($id){
  if(Cookie::has('pswd')){
    $Affiliates = Affiliate::where('id', $id)->first();
    if($Affiliates){
       return view('admin.affiliate.single-affiliate',['members'=>$Affiliates]);
    }
  }
}

function DeleteAffiliate($id){
  if(Cookie::has('pswd')){
    $order = Affiliate::where('id', $id)->first();
    if($order){
      $order->delete();
      return true;
    }
} 

else{
  return redirect('admin');
}
}

function singledownloadCSV($id){
  $fileName = 'users.csv';
    $user = Affiliate::find($id);
    $headers = [
      'Content-type' => 'text/csv',
      'Content-Disposition' => 'attachment; filename=' . $fileName,
      'Pragma' => 'no-cache',
      'Cache-Control' => 'must-revalidate, post-check=0, pre-check=0',
      'Expires' => '0',
    ];

    $columns = ['ID', 'Name', 'Company Name', 'Phone Number', 'Whatsapp Number', 'Country', 'Address', 'Partnership', 'Email', 'Message', 'ImageName', 'ipaddress', 'clocation', 'Created Date'];

    $callback = function () use ($user, $columns) {
    $file = fopen('php://output', 'w');
    fputcsv($file, $columns);
        fputcsv($file, [
          $user->id,
          $user->name,
          $user->cname,
          $user->phone,
          $user->wphone,
          $user->country,
          $user->address,
          $user->partnership,
          $user->email,
          $user->message,
          "https://semzoglobal.com/signature/".$user->imageName,
          $user->ipaddress,
          $user->clocation,
          $user->created_at,
         ]);
      
      fclose($file);
      };
      return response()->stream($callback, 200, $headers); 
}
function singledownloadPDF($id){
  $user = Affiliate::find($id);
  $pdf = Pdf::loadView('pdf.user', compact('user'));
  return $pdf->download('users.pdf');
}

function downloadCSV()
  {
    $fileName = 'users.csv';
    $users = Affiliate::all();
    $headers = [
      'Content-type' => 'text/csv',
      'Content-Disposition' => 'attachment; filename=' . $fileName,
      'Pragma' => 'no-cache',
      'Cache-Control' => 'must-revalidate, post-check=0, pre-check=0',
      'Expires' => '0',
    ];

    $columns = ['ID', 'Name', 'Company Name', 'Phone Number', 'Whatsapp Number', 'Country', 'Address', 'Partnership', 'Email', 'Message', 'ImageName', 'ipaddress', 'clocation', 'Created Date'];

    $callback = function () use ($users, $columns) {
    $file = fopen('php://output', 'w');
    fputcsv($file, $columns);
      foreach ($users as $user) {
        fputcsv($file, [
          $user->id,
          $user->name,
          $user->cname,
          $user->phone,
          $user->wphone,
          $user->country,
          $user->address,
          $user->partnership,
          $user->email,
          $user->message,
          "https://semzoglobal.com/signature/".$user->imageName,
          $user->ipaddress,
          $user->clocation,
          $user->created_at,
         ]);
      }
      fclose($file);
      };
      return response()->stream($callback, 200, $headers);
  }

   
function downloadPDF(){
  $users = Affiliate::all();
  $pdf = Pdf::loadView('pdf.users', compact('users'));
  return $pdf->download('users.pdf');
}

function allreviews(Request $req) {
    if (Cookie::has('pswd')) {
        $search = $req->input('search', "");

        $query = DB::table('product_reviews as s')
            ->select('s.id', 's.rusername', 'p.p_name', 's.starrating', 's.headline', 's.preview', 's.mediafile')
            ->join('products as p', 's.productid', '=', 'p.id');

        if (!empty($search)) {
            $query->where(function ($q) use ($search) {
                $q->where('s.rusername', 'LIKE', '%' . $search . '%')
                  ->orWhere('p.p_name', 'LIKE', '%' . $search . '%')
                  ->orWhere('s.starrating', 'LIKE', '%' . $search . '%')
                  ->orWhere('s.headline', 'LIKE', '%' . $search . '%');
            });
        }

        $members = $query->paginate(5);

        return view('admin.reviews.all-reviews', ['members' => $members, 'search' => $search]);
    } else {
        return redirect('admin');
    }
}

function getReview($id){
  $dbs = ProductReview::find($id);
  return $dbs;
}


function DeleteReviews($id){
  if(Cookie::has('pswd')){
    $review = ProductReview::where('id', $id)->first();
    if($review){
      $review->delete();
      return true;
    }
} 
}

}

