@section('customcss')
<link rel="stylesheet" type="text/css" href="/assets/css/admin/rte_theme_default.css">
<link rel="stylesheet" type="text/css" href="/assets/css/admin/blogs.css">
@endsection

<div class="container">
    <div class="row">
        <div class="col-12">
        
  <table class="table">
    <tr>
        <th style="width:150px">Full Name</th>
        <td> {{ $members->fullname }}</td>
    </tr>
    <tr>
        <th style="width:150px">Email</th>
        <td> {{ $members->email }}</td>
    </tr>
    <tr>
        <th style="width:150px">Phone</th>
        <td> {{ $members->phone }}</td>
    </tr>
    <tr>
        <th style="width:150px">Message</th>
        <td> {{ $members->message }}</td>
    </tr>
    <tr>
        <th style="width:150px">Time</th>
        <td> {{ $members->created_at }}</td>
    </tr>

  </table>

        </div>
    </div>
</div>