@extends('layout.master')
@section('title','dashboard')
@section('content')

<div class="container-fluid py-4">
    <div class="container-fluid px-2 px-md-4">
        <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');">
          <span class="mask  bg-gradient-primary  opacity-6"></span>
        </div>
    {{-- <div class="row">
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-header p-3 pt-2">
            <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
              <i class="material-icons opacity-10">weekend</i>
            </div>
            <div class="text-end pt-1">
              <p class="text-sm mb-0 text-capitalize">Today's Money</p>
              <h4 class="mb-0">$53k</h4>
            </div>
          </div>
          <hr class="dark horizontal my-0">
          <div class="card-footer p-3">
            <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+55% </span>than last week</p>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-header p-3 pt-2">
            <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
              <i class="material-icons opacity-10">person</i>
            </div>
            <div class="text-end pt-1">
              <p class="text-sm mb-0 text-capitalize">Today's Users</p>
              <h4 class="mb-0">2,300</h4>
            </div>
          </div>
          <hr class="dark horizontal my-0">
          <div class="card-footer p-3">
            <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+3% </span>than last month</p>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-header p-3 pt-2">
            <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
              <i class="material-icons opacity-10">person</i>
            </div>
            <div class="text-end pt-1">
              <p class="text-sm mb-0 text-capitalize">New Clients</p>
              <h4 class="mb-0">3,462</h4>
            </div>
          </div>
          <hr class="dark horizontal my-0">
          <div class="card-footer p-3">
            <p class="mb-0"><span class="text-danger text-sm font-weight-bolder">-2%</span> than yesterday</p>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6">
        <div class="card">
          <div class="card-header p-3 pt-2">
            <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
              <i class="material-icons opacity-10">weekend</i>
            </div>
            <div class="text-end pt-1">
              <p class="text-sm mb-0 text-capitalize">Sales</p>
              <h4 class="mb-0">$103,430</h4>
            </div>
          </div>
          <hr class="dark horizontal my-0">
          <div class="card-footer p-3">
            <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+5% </span>than yesterday</p>
          </div>
        </div>
      </div>--}}
    </div> 

    {{-- users --}}

  
<br>

<div class="d-flex flex-row ">
              <div class="col-12 mt-4">
                <div class="mb-5 ps-3">
                  <h1 style="text-align:center">USERS</h1>
                </div>
                <br>
                <div class="d-flex flex-row justify-content-around">
                @foreach($ud as $data)
                  <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                    <div class="card card-blog card-plain">
                      <div class="card-header p-0 mt-n4 mx-3">
                        <a class="d-block shadow-xl border-radius-xl">
                          <img src="{{$data->front_id_pic}}" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                        </a>
                      </div>
                      <h4 style="text-align:center">{{$data->name}}</h4>
                      <div class="card-body p-3">
                        <div style="text-align:center">
                          <button type="button" class="btn btn-outline-primary btn-sm mb-0"><a href="{{url('profile/id/'.$data->id)}}"> Show Details</a></button>
                        </div>
                      </div>
                    </div>
                </div>          
        @endforeach   
    </div>


    <div class="col-12 mt-4">
      <div class="mb-5 ps-3">
        <h1 style="text-align:center">REQUESTS</h1>
      </div>
      <br>
      <div class="d-flex flex-row justify-content-around">
      @foreach($rd as $i)
        <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
          <div class="card card-blog card-plain">
            <div class="card-header p-0 mt-n4 mx-3">
              <a class="d-block shadow-xl border-radius-xl">
                <img src="{{$i->guardian_id_pic}}" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
              </a>
            </div>
            <h4 style="text-align:center">{{$i->name}}</h4>
            <div class="card-body p-3">
              <div style="text-align:center">
                <button type="button" class="btn btn-outline-primary btn-sm mb-0"><a href="{{url('profilereq/id/'.$i->elder_id)}}"> Show Details</a></button>
              </div>
            </div>
          </div>
        </div>
@endforeach   
</div>

</div>

        @endsection