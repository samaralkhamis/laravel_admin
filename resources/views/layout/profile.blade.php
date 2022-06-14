@extends('layout.master')
@section('title','user-details')
@section('content')

<div class="container-fluid px-2 px-md-4">
    <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');">
      <span class="mask  bg-gradient-primary  opacity-6"></span>
    </div>
    @foreach($ud as $i)
    <div class="card card-body mx-3 mx-md-4 mt-n6">
      <div class="row gx-4 mb-2">
        <div class="col-auto">
          <div class="avatar avatar-xl position-relative">
            <img src="\img\{{$i->img}}" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
          </div>
        </div>
        <div class="col-auto my-auto">
          <div class="h-100">
            <h5 class="mb-1">
                {{$i->name}} &nbsp;{{$i->lname}}
            </h5>
            <p class="mb-0 font-weight-normal text-sm">
                {{$i->gender}}
            </p>
          </div>
        </div>
       
      <div class="row">
        <div class="row ml-5">
          <div class="col-12 col-xl-4">
            <div class="card card-plain h-100">
                <h5 class=" mt-5 ml-5">Profile Information</h5>
              
              <div class="card-body p-3 ml-5">
                    <ul class="list-group">
                      <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Email :</strong> &nbsp;{{$i->email}}
                      </li>
                      <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Age :</strong> &nbsp;{{$i->age}}</li>
                      <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Needed Services:</strong> &nbsp;{{$i->needed_services}}</li>
                      <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Time From :</strong> &nbsp;{{$i->time}}</li>
                      <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Time To :</strong> &nbsp;{{$i->timeTo}}</li>
                      <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Car :</strong> &nbsp;{{$i->car}}</li>
                      <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Is Accepted :</strong> &nbsp;{{$i->is_accepted}}</li>
                      <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Is Deleted :</strong> &nbsp;{{$i->is_deleted}}</li>
                      <br>
                      <li class="list-group-item border-0 ps-0 text-sm"><a href="{{url('acceptuser/id/'.$i->id)}}"><button class="btn btn-danger btn-block">Accept</a></button></li>
           
                    </ul>
                  </div>
              </div>
            </div>
            <div class="col-12 col-xl-4">
                  <div class="card-body p-5 ml-5 mt-4">
                        <ul class="list-group">
                        
                            <li class="list-group-item border-0 ps-0 pb-0">
                               <strong class="text-dark">Front ID Picture :&nbsp;</strong> <img src="/img/{{$i->front_id_pic}}" width="100%"> 
                                
                               <strong class="text-dark">Back ID Picture :&nbsp;</strong> <img src="/img/{{$i->back_id_pic}}" width="100%"> 
    
                               </li>
                          
                        </ul>
                      </div>
                  </div>
                </div>
          </div>
        </div>
        
        
        @endforeach
         @endsection