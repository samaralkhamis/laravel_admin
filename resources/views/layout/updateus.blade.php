@extends('layout.master')  
@section('title','Update User')

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
                    <div class="card-header"> <h4 style="text-align:center"> Update User </h4>
                    </div>
                    <div class="card-body" style="margin-top:-2%" >
                    @foreach($update as $data)
                        <form action="{{url('/updateus/id/'.$data->id)}}" method="post">
                          @csrf
                          @method('PUT')
                              <div class="row mb-3">
                                <div class="col-md-10">
                                <label for="name" class="col-md-3  text-md-end">Name</label>
                                    <input type="text" name="name" value="{{$data->name}}" required autocomplete="name" autofocus>
                                    <span><label for="name" class="col-md-3  text-md-end">Last Name</label>
                                 <input type="text" name="lname" value="{{$data->lname}}" required autofocus></span>
                                </div>
                            </div>
    
                            <div class="row mb-3">
                              <div class="col-md-12">
                              <label for="name" class="col-md-3  text-md-end">Profile Image</label>
                                  <input type="file" name="img" value="{{$data->img}}" required  autofocus>
                                  <span><label class="col-md-1 text-md-end ">Phone Number</label>
                                    <input type="number" name="phone" value="{{$data->phone}}" required  autofocus></span>
                              </div>
                          </div>
                            
                            <div class="row mb-3">
                              <div class="col-md-10">
                                <label for="name" class="col-md-3  text-md-end">Time from</label>
                                  <input type="datetime_local" name="time" value="{{$data->time}}" required  autofocus>
                              <span ><label for="name" class="col-md-3  text-md-end">Time To</label>
                                  <input type="datetime_local" name="timeTo" value="{{$data->timeTo}}" required  autofocus>
                                   </span>
                              </div>
                          </div>
                            <div class="row mb-3">
                              <div class="col-md-10">
                              <label for="name" class="col-md-3  text-md-end">Email</label>
                                  <input type="email" name="email" value="{{$data->email}}" required autofocus>
                                  <span><label class="col-md-3 text-md-end">Age </label>
                                  <input type="date" name="age" value="{{$data->age}}" required  autofocus></span>
                              </div>
                          </div>
                          <div class="row mb-3">
                            <div class="col-md-11">
                            <label for="name" class="col-md-3  text-md-end">Needed Services</label>
                                <input type="text" name="needed_services" value="{{$data->needed_services}}" required autofocus>
                              <span><label  class="col-md-2 text-md-end">Is Accepted</label>
                              <input type="number" name="is_accepted" value="{{$data->is_accepted}}" required autocomplete="name" autofocus></span>
                            </div>

                            <div class="row mb-3">
                              <div class="col-md-10">
                              <label for="name" class="col-md-2  text-md-end">Front Id Pic</label>
                                  <input type="file" name="front_id_pic" value="{{$data->front_id_pic}}" required autofocus>
                                <span><label  class="col-md-2 text-md-end">Back Id Pic</label>
                                <input type="file" name="back_id_pic" value="{{$data->back_id_pic}}" required autocomplete="name" autofocus></span>
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
    