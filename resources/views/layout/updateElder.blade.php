@extends('layout.master')  
@section('title','Update Requests')

@section('content')
<style>

    button.btn.btn-primary {
    color: #fff;
    border-color:#008E89;
    background: #008E89;
    }
    
    div.card{
        color: #008E89;
    }
        </style>
    <html>
    <body>
    <div class="container">
        <div class="row justify-content-center">
                <div class="card">
                    <div class="card-header"> <h4 style="text-align:center"> Update Request </h4>
                    </div>
                    <div class="card-body" style="margin-top:-2%" >
                    @foreach($update as $data)
                        <form action="{{url('/updateElder/id/'.$data->elder_id)}}" method="post">
                          @csrf
                          @method('PUT')
                              <div class="row mb-3">
                                <div class="col-md-10">
                                <label for="name" class="col-md-3  text-md-end">Name</label>
                                    <input type="text" name="name" value="{{$data->name}}" required autocomplete="name" autofocus>
                                    <span><label for="name" class="col-md-4  text-md-end">Phone Number</label>
                                 <input type="number" name="phone_num" value="{{$data->phone_num}}" required autofocus></span>
                                </div>
                            </div>
    
                            <div class="row mb-3">
                              <div class="col-md-10">
                              <label for="name" class="col-md-3  text-md-end">Needed Services</label>
                                  <input type="text" name="needed_services" value="{{$data->needed_services}}" required  autofocus>
                                  <span><label for="name" class="col-md-4  text-md-end">Time Needed</label>
                                  <input type="datetime_local" name="time_needed" value="{{$data->time_needed}}" required  autofocus></span>
                              </div>
                          </div>
                            
                            <div class="row mb-3">
                              <div class="col-md-10">
                              <label for="name" class="col-md-3  text-md-end">Gender</label>
                                  <input type="text" name="gender" value="{{$data->gender}}" required  autofocus>
                                   <span ><label class="col-md-4  text-md-end ">location</label>
                                  <input type="text" name="location" value="{{$data->location}}" required  autofocus></span>
                              </div>
                          </div>
                            <div class="row mb-3">
                              <div class="col-md-10">
                              <label for="name" class="col-md-3  text-md-end">Guardian Name</label>
                                  <input type="text" name="guardian_name" value="{{$data->guardian_name}}" required autofocus>
                                  <span><label class="col-md-4 text-md-end">Guardian Relation</label>
                                  <input type="text" name="guardian_relation" value="{{$data->guardian_relation}}" required  autofocus></span>
                              </div>
                          </div>
                           
                            <div class="row mb-3">
                              <div class="col-md-11">
                              <label for="name" class="col-md-3  text-md-end">Guardian Id Pic</label>
                                  <input type="file" name="guardian_id_pic" value="{{$data->guardian_id_pic}}" required autofocus>
                                <span><label  class="col-md-2 text-md-end">Is Accepted</label>
                                <input type="text" name="is_accepted" value="{{$data->is_accepted}}" required autocomplete="name" autofocus></span>
                              </div>
                          </div>
                            <div class="row mb-0 ">
                                <div class="col-md-4 offset-md-4 mt-3">
                                    <button type="submit" class="btn btn-primary btn-block">SUBMIT</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    </body>
    </html>
    @endsection
    