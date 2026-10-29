@extends('templates.admin.admin-main')
@section('title')
Dashboard
@endsection
@section('customcss')
<style>
  .cscard{
    border: 1px solid #0004;
    padding: 30px 20px;
    background:#fff;
    border-radius: 10px !important;
  }
  .cscard h2{
    font-size:22px!important;
  }
  .cscard  p{
    font-size:30px;
    font-weight:500;
  }
</style>
@endsection
@section('body')
<x-admintopheader/>
<div class="main-container">
  <div class="container">
    <div class="row">
        <!-- <div class="col-3">
          <div class="cscard text-center">
            <h2>Total Blogs</h2>
            <p>{{ $customer }}</p>
            <a href="/admin/all-customers" class="btn btn-primary px-3 py-2" > View All <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
          </div>
        </div> -->
        <div class="col-3">
          <div class="cscard text-center">
            <h2>Total Products</h2>
            <p>{{$customer}}</p>
            <a href="{{route('all-blogs')}}" class="btn btn-primary px-3 py-2" > View All <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
          </div>
        </div>
        <div class="col-3">
          <div class="cscard text-center">
            <h2>Total Affiliates</h2>
            <p>{{$affiliate}}</p>
            <a href="{{route('all-affiliates')}}" class="btn btn-primary px-3 py-2" > View All <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
          </div>
        </div>
        <div class="col-3">
          <div class="cscard text-center">
            <h2>Total Contacts</h2>
            <p>{{$contact}}</p>
            <a href="{{route('all-contacts')}}" class="btn btn-primary px-3 py-2" > View All <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
          </div>
        </div>
        <!-- <div class="col-3">
          <div class="cscard text-center">
            <h2>All Newsletter</h2>
            <p>0</p>
            <a href="/" class="btn btn-primary px-3 py-2" > View All <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
          </div>
        </div> -->
    </div>
  </div>
</div>
</body>
@endsection
