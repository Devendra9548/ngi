@section('customcss')
<link rel="stylesheet" type="text/css" href="/assets/css/admin/rte_theme_default.css">
<link rel="stylesheet" type="text/css" href="/assets/css/admin/blogs.css">
@endsection

<div class="container">
    <div class="row">
        <div class="col-12">
        
  <table class="table">
    <tr>
        <th style="width:200px">Full Name</th>
        <td> {{ $members->name }}</td>
    </tr>
    <tr>
        <th style="width:200px">Company Name</th>
        <td> {{ $members->cname }}</td>
    </tr>
    <tr>
        <th style="width:200px">Phone</th>
        <td> {{ $members->phone }}</td>
    </tr>
    <tr>
        <th style="width:200px">Whatsapp No.</th>
        <td> {{ $members->wphone }}</td>
    </tr>
    <tr>
        <th style="width:200px">Country</th>
        <td> {{ $members->country }}</td>
    </tr>
    <tr>
        <th style="width:200px">Address</th>
        <td> {{ $members->address }}</td>
    </tr>
    <tr>
        <th style="width:200px">Partnership</th>
        <td> {{ $members->partnership }}</td>
    </tr>
    <tr>
        <th style="width:200px">Email</th>
        <td> {{ $members->email }}</td>
    </tr>
    <tr>
        <th style="width:200px">Message</th>
        <td> {{ $members->message }}</td>
    </tr>
    <tr>
        <th style="width:200px">Signature</th>
        <td><img src="/signature/{{$members->imageName}}" alt="{{ $members->imageName }}"></td>
    </tr>
    <tr>
        <th style="width:200px">IP Address</th>
        <td> {{ $members->ipaddress }}</td>
    </tr>
    <tr>
        <th style="width:200px">Location</th>
        <?php
         $json = $members->clocation;
         $data = json_decode($json, true);
        if (empty($data) || json_last_error() !== JSON_ERROR_NONE) {
            die('Invalid or empty JSON');
        }
        $source = $data['source'] ?? null;
        $lat = $data['latitude'] ?? null;
        $lon = $data['longitude'] ?? null;
?>

        <td>
            @if($source) 
            Source: {{ $source }} <br>
            @endif
            @if($lat) 
            Latitude: {{ $lat }} <br>
            @endif
            @if($lon) 
            Longitude: {{ $lon }} <br>
            @endif
        </td>
        
    </tr>
    <tr>
        <th style="width:200px">Time</th>
        <td> {{ $members->created_at }}</td>
    </tr>

  </table>

        </div>
    </div>
</div>