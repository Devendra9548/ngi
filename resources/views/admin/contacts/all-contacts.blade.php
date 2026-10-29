@extends('templates.admin.admin-main')
@section('title')
All Contacts
@endsection

@section('customcss')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('body')
<x-admintopheader />
<div class="main-container">


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Contact Information</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="result"></div>
                    <div id="layoutdiv" style="position: absolute; width: 100%;z-index: 999;left: 0px;height:100%;">
                    </div>
                    <div id="getformdata"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
</div>

  <!-- second section -->
    <div class="container mt-5">
     
        <div class="row bg-white mx-1">
            <div class="col-12">
            <div class="d-flex justify-content-between p-2 pt-3">
                <h2 class="">Contact Information</h2>
                <div style="text-align: end;">
                
                <a href="{{ route('contact.export.csv') }}" class="btn btn-success" 
                    style="background: #22c55e; color: white; font-weight:bold; padding: 10px 20px; border-radius: 5px; text-decoration: none;">
                    Download CSV <i class="fa-solid fa-download"></i>
                </a>
                <a href="{{ route('contact.export.pdf') }}" class="btn btn-danger" 
                    style="background: #ef4444; color: white; font-weight:bold; padding: 10px 20px; border-radius: 5px; text-decoration: none; margin-left: 10px;">
                    Download PDF <i class="fa-solid fa-download"></i>
                </a>
               </div>
               </div>

                <hr>
                <table class="table table-striped" width="100%">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Full Name</th>
                            <th>Email</th>
                            <!-- <th>Phone Number</th> -->
                            <!-- <th>Message</th> -->
                            <th>Time</th>
                            <th style="width:320px">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($members as $members)
                        <tr>
                            <td> {{ $members->id }}</td>
                            <td> {{ $members->fullname }}</td>
                            <td> {{ $members->email }}</td>
                            <!-- <td> {{ $members->phone }}</td> -->
                            <!-- <td> {{ $members->message }}</td>  -->
                            <td> {{ $members->created_at }}</td>
                            <td> 
                            <a href="/admin/single-contact-export-csv/{{ $members->id }}" class="btn btn-success" 
                               style="background: #22c55e; color: white; font-weight:500; padding: 6px 15px; border-radius: 5px; text-decoration: none;">
                               CSV <i class="fa-solid fa-download"></i>
                            </a>
                            <a href="/admin/single-contact-export-pdf/{{ $members->id }}" class="btn btn-danger" 
                                style="background: #ef4444; color: white; font-weight:500; padding: 6px 15px; border-radius: 5px; text-decoration: none;">
                                PDF <i class="fa-solid fa-download"></i>
                            </a>
                                <a id="views" href="#" class="btn btn-success text-white reads views"
                                    value="{{ $members->id }}" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal"><i class="fa-solid fa-eye"></i> View</a>
                                <a href="#" class="btn btn-danger delete" value="{{ $members->id }}"><i class="fa-solid fa-trash"></i> </a>
                            </td>
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<script>
$(document).ready(function() {
    $(".delete").click(function(event) {
        event.preventDefault();
        var data = confirm("Are You Sure You Want to Delete It?");
        if (data == true) {
            var datas = $(this).attr('value');
            $.ajax({
                type: "DELETE",
                url: "/admin/delete-contact/" + datas,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                        'content') // Include CSRF token for Laravel protection
                },
                success: function(data) {
                    alert("Deleted Successfully!")
                    location.reload();
                },

                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    alert("Before Delete Please Remove Category From memberss");
                }
            });
        }
    });
});
</script>

<script>
$(document).ready(function() {
    $(".views").click(function(event) {
        event.preventDefault();
        $('#layoutdiv').show();
        var datas = $(this).attr('value');

        $.ajax({
            type: "GET",
            url: "/admin/single-contact/" + datas,
            success: function(data) {
                $("#getformdata").html(data);

            }
        });


    });
});
</script>
</body>
@endsection