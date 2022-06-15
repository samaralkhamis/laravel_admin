@extends('layout.master')
@section('title','dashboard')
@section('content')
<style>

button.btn.btn-primary {
color: #fff;
border-color:#008E89;
background: #008E89;

}


</style>
  <div class="container mt-5 ml-2">
    <div class="row ml-5">
      <div class="col-xl-3 col-sm-8 mb-xl-0 mb-4 ml-5">
        <div class="card">
          <div class="card-header p-3 pt-2">
            <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
              <i class="far fa-flag opacity-10"></i>
            </div>
            <div class="text-end pt-1">
              <p class="text mb-0 text-capitalize mr-5">Contries Number</p>
              <h4 class="mb-0 mt-2" style="margin-right:45%">10</h4>
            </div>
          </div>
          <hr class="dark horizontal my-0">
          <p class="text-sm"style=" text-align:center">+2 Than Last Month</p>
          
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-header p-3 pt-2">
            <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
              <i class="material-icons opacity-10">person</i>
            </div>
            <div class="text-end pt-1">
              <p class="text mb-0 text-capitalize" style="text-align:center">New Users </p>
              <h4 class="mb-0 mt-2" style="margin-right:50%">{{$numbers[0]->users_number}}</h4>
            </div>
          </div>
          <hr class="dark horizontal my-0">
            <p class="text-sm"style=" text-align:center">For Last Month </p>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-header p-3 pt-2">
            <div class="icon icon-lg icon-shape bg-gradient-dark shadow-success text-center border-radius-xl mt-n4 position-absolute">
              <i class="material-icons opacity-10">person</i>
            </div>
            <div class="text-end pt-1">
              <p class="text mb-0 text-capitalize" style="text-align:center">New Requests </p>
              <h4 class="mb-0 mt-2" style="margin-right:50%">{{$numbers[0]->elders_number}}</h4>
            </div>
          </div>
          <hr class="dark horizontal my-0">
            <p class="text-sm"style=" text-align:center">For Last Month </p>
        </div>
      </div>
      </div>
    </div>

    <div class="row mt-4" >
      <div class="col-lg-5 col-md-6 mt-4 mb-4 ml-5">
        <div class="card z-index-2 ">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
          </div>
          <div class="card-body">
            <h6 class="mb-0 mt-4" style="text-align:center"><i class="material-icons text-sm my-auto me-1">schedule</i>Pending Users</h6>
            <p class="mt-2" style="text-align:center">Users who are Waiting to Your Approval</p>
            <hr class="dark horizontal">
            <div class="d-flex ml-5">
            <a href="{{url('PendingUsers')}}"style="margin-left:30%;margin-bottom:5%"><button class="btn btn-dark" >Show Users </button></a>
            </div>
          </div>
        </div>
      </div>
     <div class="col-lg-5 col-md-6 mt-4 mb-4 ml-5">
        <div class="card z-index-2 ">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
          </div>
          <div class="card-body">
            <h6 class="mb-0 mt-4" style="text-align:center"><i class="material-icons text-sm my-auto me-1">schedule</i>Pending Requests</h6>
            <p class="mt-2" style="text-align:center">Requests Waiting to Your Approval</p>
            <hr class="dark horizontal">
            <div class="d-flex ml-5" >
              <a href="{{url('PendingRequests')}}"style="margin-left:30% ; "><button class="btn btn-dark" >Show Requests </button>
            </div>
          </div>
        </div>
      </div>
    
    </div>

        @endsection