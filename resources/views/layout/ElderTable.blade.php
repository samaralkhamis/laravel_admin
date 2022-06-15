@extends('layout.master')
@section('title','Elder')
@section('content')

<div class="container-fluid py-4">
    <div class="row">
        <a href="{{url('createElder')}}" class="card-link btn w-10 " style="background-color:#008E89 ; color:white; margin-left:85%">add</a>
        </div>
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">Accepted Requests</h6>
            </div>
          </div>
          <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                 
                  <tr>
                    <th class="align-middle text-center text-sm">ID</th>
                    <th class="align-middle text-center text-sm">Name</th>
                    <th class="align-middle text-center text-sm">Phone Number</th>
                    <th class="align-middle text-center text-sm">Services</th>
                    <th class="align-middle text-center text-sm">Time Nedded</th>
                    <th class="align-middle text-center text-sm">gender</th>
                    <th class="align-middle text-center text-sm">location</th>
                    <th class="align-middle text-center text-sm">Guardian Name</th>
                    <th class="align-middle text-center text-sm">Guardian Number</th>
                    <th class="align-middle text-center text-sm">Guardian Relation</th>
                    <th class="align-middle text-center text-sm">Guardian id Pic</th>
                    <th class="align-middle text-center text-sm">Action</th>
                  </tr>
                </thead>
                <tbody> 
                  @foreach($ud as $data)
                  <tr>
                    <td>
                        <div class="align-middle text-center text-sm">
                          <h6 class="align-middle text-center text-sm">{{$data->elder_id}}</h6>
                        </div>
                    </td>
                    <td>
                      <p class="align-middle text-center text-sm">{{$data->name}} </p>
                    </td>
                    <td class="align-middle text-center text-sm">
                      <span class="badge badge-sm bg-gradient-success">{{$data->phone_num}} </span>
                    </td>
                    <td class="align-middle text-center text-sm">
                      <span>{{$data->needed_services}} </span>
                    </td> 
                    <td class="align-middle text-center text-sm">
                      <span>{{$data->time_needed}} </span>
                    </td> <td class="align-middle text-center text-sm">
                      <span>{{$data->gender}} </span>
                    </td> <td class="align-middle text-center text-sm">
                      <span>{{$data->location}} </span>
                    </td>
                  </td> 
                  <td class="align-middle text-center text-sm">
                    <span>{{$data->guardian_name}} </span>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span>{{$data->guardian_number}} </span>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span>{{$data->guardian_relation}} </span>
                  </td>

                    <td class="align-middle text-center">
                      <img src="/img/{{$data->guardian_id_pic}}" width="100%">
                    </td>

                    
                    <td class="align-middle text-center text-sm">
                      <a href="{{url('delete/id/'.$data->elder_id)}}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="delete user"><i class="fa fa-trash" style="color:red" aria-hidden="true"></i></a><br>
                      <a href="{{url('edit/id/'.$data->elder_id)}}"><i class="fas fa-edit" style="color:green"></i>
                      </a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
    
@endsection