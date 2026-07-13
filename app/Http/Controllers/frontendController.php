<?php

namespace App\Http\Controllers;
use App\Models\AdminInfo;
use App\Models\Affiliate;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\BlogSeo;
use App\Models\GlobalSeo;
use App\Models\category_blog_seo;
use App\Models\PageSeo;
use App\Models\Contact;
use App\Models\customer;
use App\Models\ProductReview;
use App\Models\HomePage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http; 
use Mail;
use App\Mail\ContactMail; 
use App\Mail\AffiliateMail; 
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;

class frontendController extends Controller
{

   function websecure(){
    return view("websecure");
   }


   function destroy(){
     session()->flush();
     return redirect('websecure');
   }

   function working(){
    if(session()->get('userid') == 'admin@9548'){
    return view("working");
    }
    else{
        return redirect("/safty");
    }
   }
   function home(){
        $pageseo = PageSeo::where('pagename', 'Home')->get();
        $homepageseo = PageSeo::where('pagename', 'Home')->get();
        $gseo = GlobalSeo::find(1);
        return view('home', ['pageseo'=>$pageseo,'gseo'=>$gseo,'homepageseo'=>$homepageseo]);
    }

    function blog(){
        $blogs = Blog::paginate(8);
        $pageseo = PageSeo::where('pagename', 'Blog')->get();
        $homepageseo = PageSeo::where('pagename', 'Blog')->get();
        $gseo = GlobalSeo::find(1);
        return view('blog', ['blogs'=>$blogs,'pageseo'=>$pageseo,'gseo'=>$gseo,'homepageseo'=>$homepageseo]);
    }

    function search(Request $req){
        $result = $req['s'];
        $blog = Blog::where("title", "like", "%" . $result . "%")->get();
        return view('search',['result'=>$result,'blog'=>$blog]);
    }
    
    function contact(){
        $pageseo = PageSeo::where('slug', 'contact-us')->get();
        $homepageseo = PageSeo::where('slug', 'contact-us')->get();
        $gseo = GlobalSeo::find(1);
        return view('contact', ['pageseo'=>$pageseo,'gseo'=>$gseo,'homepageseo'=>$homepageseo]);
    }
    function about(){
        $pageseo = PageSeo::where('slug', 'about')->get();
        $homepageseo = PageSeo::where('slug', 'about')->get();
        $gseo = GlobalSeo::find(1);
        return view('about', ['pageseo'=>$pageseo,'gseo'=>$gseo,'homepageseo'=>$homepageseo]);
    }
    function legalnotice(){
        $pageseo = PageSeo::where('slug', 'legal-notice')->get();
        $homepageseo = PageSeo::where('slug', 'legal-notice')->get();
        $gseo = GlobalSeo::find(1);
        return view('legal-notice', ['pageseo'=>$pageseo,'gseo'=>$gseo,'homepageseo'=>$homepageseo]);
    }
    function affiliations(){
        $pageseo = PageSeo::where('slug', 'affiliations')->get();
        $homepageseo = PageSeo::where('slug', 'affiliations')->get();
        $gseo = GlobalSeo::find(1);
        return view('affiliations', ['pageseo'=>$pageseo,'gseo'=>$gseo,'homepageseo'=>$homepageseo]);
    }

    function careers(){
        $pageseo = PageSeo::where('slug', 'careers')->get();
        $homepageseo = PageSeo::where('slug', 'careers')->get();
        $gseo = GlobalSeo::find(1);
        return view('careers', ['pageseo'=>$pageseo,'gseo'=>$gseo,'homepageseo'=>$homepageseo]);
    }

    function ncnda(){
        $pageseo = PageSeo::where('slug', 'ncnda2')->get();
        $homepageseo = PageSeo::where('slug', 'ncnda2')->get();
        $gseo = GlobalSeo::find(1);
        return view('ncnda', ['pageseo'=>$pageseo,'gseo'=>$gseo,'homepageseo'=>$homepageseo]);
    }

    function ncndamain(){
        $pageseo = PageSeo::where('slug', 'ncnda')->get();
        $homepageseo = PageSeo::where('slug', 'ncnda')->get();
        $gseo = GlobalSeo::find(1);
        return view('ncndamain', ['pageseo'=>$pageseo,'gseo'=>$gseo,'homepageseo'=>$homepageseo]);
    }

    function products(){
        $pageseo = PageSeo::where('slug', 'our-products')->get();
        $homepageseo = PageSeo::where('slug', 'our-products')->get();
        $gseo = GlobalSeo::find(1);
        $pro = Blog::all();
        return view('products', ['pageseo'=>$pageseo,'gseo'=>$gseo,'homepageseo'=>$homepageseo,'pro'=>$pro]);
    }

    
    function privacypolicy(){
        $pageseo = PageSeo::where('slug', 'privacy-policy')->get();
        $homepageseo = PageSeo::where('slug', 'privacy-policy')->get();
        $gseo = GlobalSeo::find(1);
        return view('privacy-policy', ['pageseo'=>$pageseo,'gseo'=>$gseo,'homepageseo'=>$homepageseo]);
    }
    
    function blogcategories(){
        $pageseo = PageSeo::where('pagename', 'Categories')->get();
        $homepageseo = PageSeo::where('pagename', 'Categories')->get();
        $gseo = GlobalSeo::find(1);
        $blogs = BlogCategory::all();
        return view('categories', ['blogs'=>$blogs, 'pageseo'=>$pageseo,'gseo'=>$gseo,'homepageseo'=>$homepageseo]);
    }

    function sendcontact(Request $req){
        $dbs = new Contact();
        $name = $req->name;
        $email = $req->email;
        $phone = $req->phone;
        $message = $req->message;


        $ip = $this->getClientIp($req);
        $lat = $req->input('lat');
        $lon = $req->input('lon');

        $location = null;
 
        if ($lat && $lon) {
           $location = [
            'source' => 'browser',
            'latitude' => $lat,
            'longitude' => $lon,
           ];
        } else {
            try {
                 $resp = Http::timeout(5)->get("https://ipapi.co/{$ip}/json/");
                   if ($resp->ok()) {
                       $json = $resp->json();
                       $location = [
                           'source' => 'ip',
                           'ip' => $ip,
                           'city' => $json['city'] ?? null,
                           'region' => $json['region'] ?? null,
                           'country' => $json['country_name'] ?? null,
                           'postal' => $json['postal'] ?? null,
                           'latitude' => $json['latitude'] ?? ($json['lat'] ?? null),
                           'longitude' => $json['longitude'] ?? ($json['lon'] ?? null),
                           'timezone' => $json['timezone'] ?? null,
                           'org' => $json['org'] ?? null,
                       ];
                   }
               } catch (\Exception $e) {
                   
                   \Log::warning('Geo lookup failed for IP ' . $ip . ': ' . $e->getMessage());
               }
           }

        $dbs->fullname = $name;
        $dbs->email = $email;
        $dbs->phone = $phone;
        $dbs->message = $message;
        $dbs->save(); 
        

        // $mailData = [
        //     'name' => $name, 
        //     'email' => $email, 
        //     'phone' => $phone,
        //     'message' => $message,
        //     'ip' => $ip,
        //     'location' => $location,
        // ];
          
        // Mail::to('semzoglobal@gmail.com')->send(new ContactMail($mailData));

        return true;
    }


    function sendaffiliateform(Request $req){
        $dbs = new Affiliate();
        $name = $req->name;
        $cname = $req->cname;
        $phone = $req->phone;
        $wphone = $req->wphone;
        $country = $req->country;
        $address = $req->address;
        $partnership = $req->partnership;
        $email = $req->email;
        $message = $req->message;
        $signature = $req->signature;

        $signatureData = $req->signature;


        $dbs->name = $name;
        $dbs->cname = $cname;
        $dbs->phone = $phone;
        $dbs->wphone = $wphone;
        $dbs->country = $country;
        $dbs->address = $address;
        $dbs->partnership = $partnership;
        $dbs->email = $email;
        $dbs->message = $message;
        
        // Remove base64 prefix
        $image = str_replace('data:image/png;base64,', '', $signatureData);
        $image = str_replace(' ', '+', $image);
        
        // Generate a unique file name
        $imageName = 'signature_' . time() . '.png';
        
        // Define your public path
        $customFolderPath = public_path('signature');
        
        // Create the folder if it doesn’t exist
        if (!\File::exists($customFolderPath)) {
            \File::makeDirectory($customFolderPath, 0755, true);
        }
        
        // Decode and save the image
        \File::put($customFolderPath . '/' . $imageName, base64_decode($image));
        
    
  
        $ip = $this->getClientIp($req);
        $lat = $req->input('lat');
        $lon = $req->input('lon');

        $location = null;
 
        if ($lat && $lon) {
           $location = [
            'source' => 'browser',
            'latitude' => $lat,
            'longitude' => $lon,
           ];
        } else {
            try {
                 $resp = Http::timeout(5)->get("https://ipapi.co/{$ip}/json/");
                   if ($resp->ok()) {
                       $json = $resp->json();
                       $location = [
                           'source' => 'ip',
                           'ip' => $ip,
                           'city' => $json['city'] ?? null,
                           'region' => $json['region'] ?? null,
                           'country' => $json['country_name'] ?? null,
                           'postal' => $json['postal'] ?? null,
                           'latitude' => $json['latitude'] ?? ($json['lat'] ?? null),
                           'longitude' => $json['longitude'] ?? ($json['lon'] ?? null),
                           'timezone' => $json['timezone'] ?? null,
                           'org' => $json['org'] ?? null,
                       ];
                   }
               } catch (\Exception $e) {
                   
                   \Log::warning('Geo lookup failed for IP ' . $ip . ': ' . $e->getMessage());
               }
           }

        $dbs->imageName = $imageName;
        $dbs->ipaddress = $ip;
        $dbs->clocation = json_encode($location);
        $dbs->save(); 

        // $mailData = [
        //     'name' => $name, 
        //     'cname' => $cname,
        //     'phone' => $phone,
        //     'wphone' => $wphone,
        //     'country' => $country,
        //     'address' => $address,
        //     'partnership' => $partnership,
        //     'email' => $email,
        //     'message' => $message,
        //     'signature' => $signature,
        //     'imageName' => $imageName,
        //     'ipaddress' => $ip,
        //     'clocation' => $location,
        // ];
          
        // Mail::to('semzoglobal@gmail.com')->send(new AffiliateMail($mailData));
        return true;
    }

    function reviewData(Request $req){
        $dbs = new ProductReview();
        $dbs->rusername = $req->rusername;
        $dbs->rpassword = $req->rpassword;
        $dbs->productid = $req->productid;
        $dbs->starrating = $req->starrating;
        $dbs->headline = $req->headline;
        $dbs->preview = $req->preview;

        $origname = '';

        if ($req->hasFile('mediafile'))
        { 
        $file = $req->file('mediafile');
        $mimeType = $file->getClientMimeType();

        if (str_starts_with($mimeType, 'image')) 
        {
        $image = $req->file('mediafile');
        $name = $image->getClientOriginalName();
        $t=time();
        $d=date("Y-m-d",$t);
        $origname = $d."-".$t."-".$name;
        
        $customFolderPath = public_path('review');
        if (!file_exists($customFolderPath)) 
        {
        mkdir($customFolderPath, 0755, true);
        } 
        $image->move($customFolderPath, $origname);

        $imagePath = public_path('review/' . $origname);
        $imagess = Image::make($imagePath);
        $thumbnail = $imagess->resize(244, 300);
        $thumbnailPath = public_path('review-thumb/' . $origname);
        $thumbnail->save($thumbnailPath);
        
        $imagePath = public_path('review/' . $origname);
        $imagess = Image::make($imagePath);
        $thumbnail = $imagess->resize(100, 123);
        $thumbnailPath = public_path('recent-review-thumb/' . $origname);
        $thumbnail->save($thumbnailPath);
  
        $name = $req->file('mediafile')->getClientOriginalName();
        $origname = $d."-".$t."-".$name;
        }
        elseif(str_starts_with($mimeType, 'video')){
            $file = $req->file('mediafile');
            $name = $file->getClientOriginalName();
            $t = time();
            $d = date("Y-m-d", $t);
            $origname = $d . "-" . $t . "-" . $name;
            $customFolderPath = public_path('review');
            $file->move($customFolderPath, $origname);
        } 

        $dbs->mediafile = $origname;

    }

        $dbs->save();


        return true;
    }

    

    function singleblog($slug){
        $seo = BlogSeo::where('canonical', $slug)->get();
        $blog = Blog::where('slug', $slug)->first();
        $gseo = GlobalSeo::find(1);
        $cblog = DB::table('blogs')
                ->leftJoin('blogs_categories', 'blogs.category', '=', 'blogs_categories.id')
                ->where('blogs_categories.id', $blog->category)
                ->take(6)
                ->get();
         
        $allblogs = Blog::all();
        return view('single-blog',['seo'=>$seo,'blog'=>$blog,'gseo'=>$gseo,'cblog'=>$cblog,'allblogs'=>$allblogs]);
    }

    function singlecategories($slug){
        $seo = category_blog_seo::where('canonical', $slug)->get();
        $blog = BlogCategory::where('bcname', $slug)->first();
        $gseo = GlobalSeo::find(1);

        $cblog = DB::table('blogs as b')
        ->select('b.id', 'b.title', 'bc.bcname', 'bc.created_at', 'bc.updated_at', 'b.description', 'b.file', 'b.slug', 'bc.bcslug')
        ->join('blogs_categories as bc', 'b.category', '=', 'bc.id')
        ->where('bc.bcslug', $slug)
        ->get();


       $allblogs = Blog::all();
        return view('single-category',['seo'=>$seo,'blog'=>$blog,'gseo'=>$gseo,'cblog'=>$cblog,'allblogs'=>$allblogs]);
    }

    function redirectpage($slug){
        $allblogs = Blog::all();
        foreach($allblogs as $allblogs)
        {
            if($slug === $allblogs['slug']){
                return redirect('blog/'.$slug);
             }
         }
      
        
    }


    private function getClientIp(Request $req)
    {
        $headers = [
            'HTTP_CLIENT_IP',
            'HTTP_X_FORWARDED_FOR',
            'X-Forwarded-For',
            'X_FORWARDED_FOR',
            'REMOTE_ADDR',
        ];

        $ip = $req->ip();

        $xff = $req->server('HTTP_X_FORWARDED_FOR') ?: $req->header('X-Forwarded-For');
        if ($xff) {
            $parts = explode(',', $xff);
            $first = trim($parts[0]);
            if (filter_var($first, FILTER_VALIDATE_IP)) {
                $ip = $first;
            }
        }

        return $ip;
    }



  
}