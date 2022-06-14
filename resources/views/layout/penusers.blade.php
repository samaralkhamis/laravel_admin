@extends('layout.master')
@section('title','Pending Users')
@section('content')

<div class="container-fluid py-4">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3"> Pending Users</h6>
            </div>
          </div>
          <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="align-middle text-center text-sm">ID</th>
                    <th class="align-middle text-center text-sm">Name</th>
                    <th class="align-middle text-center text-sm">Email</th>
                    <th class="align-middle text-center text-sm">Phone</th>
                    <th class="align-middle text-center text-sm">Front ID</th>
                    <th class="align-middle text-center text-sm">Back ID</th>
                    <th class="align-middle text-center text-sm">Service for job taken</th>
                    <th class="align-middle text-center text-sm">Available Time</th>
                    <th class="align-middle text-center text-sm">Have A Car</th>
                    <th class="align-middle text-center text-sm">Accept</th>
                    <th class="align-middle text-center text-sm">Deny</th>
                  </tr>
                </thead>
                <tbody> 
                  @foreach($ud as $data)
                  <tr>
                    <td>
                        <div class="align-middle text-center text-sm">
                          <h6 class="align-middle text-center text-sm">{{$data->id}}</h6>
                        </div>
                    </td>
                    <td>
                      <p class="align-middle text-center text-sm">{{$data->name}} </p>
                    </td>
                    <td class="align-middle text-center text-sm">
                      <span class="badge badge-sm bg-gradient-success">{{$data->email}} </span>
                    </td>
                    <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">{{$data->phone}} </span>
                      </td>
                    <td class="align-middle text-center">
                      <img src="/img/{{$data->front_id_pic}}" width="100%">
                    </td>
                    <td class="align-middle text-center">
                      <img src="/img/{{$data->back_id_pic}}" width="100%">
                    </td>
                    <td class="align-middle text-center text-sm">
                      <span>{{$data->needed_services}} </span>
                    </td>  
                    <td class="align-middle text-center text-sm">
                      <span>{{$data->time}} </span>
                    </td>  
                    <td class="align-middle text-center text-sm">
                      <span>{{$data->car}} </span>
                    </td>  

                    <td class="align-middle text-center text-sm">
                      <a href="{{url('acceptuser/id/'.$data->id)}}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="delete user"><i class="fas fa-check-circle" style="font-size:30px ; color:green"></i></a>
                    </td>
                    <td class="align-middle text-center text-sm">
                        <a href="{{url('denyUser/id/'.$data->id)}}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="delete user"><i class="fas fa-ban" style="font-size:30px ; color:red"></i></a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
    


@endsection