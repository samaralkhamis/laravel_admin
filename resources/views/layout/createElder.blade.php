@extends('layout.master')  
@section('content')

<style>
    .card-header:first-child {
            color: white;
            background:#008E89;
        
    }
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
            <div class="col-md-8">
                <div class="row d-flex justify-content-around mt-5">
                <a href="{{url('createElder')}}" class="card-link btn btn-danger w-25 ">ADD</a>
                </div>
                <div class="card">
                    <div class="card-header"></div>
                    <div class="card-body">
                        
                        <form method="post" action="{{url('createElder')}}">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-6">
                                <label for="name" class="col-md-4 col-form-label text-md-end">First Name</label>
                                    <input id="name" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="age" class="col-md-4 col-form-label text-md-end">age</label>
                                    <input id="age" type="number" name="age" value="{{ old('age') }}" required autocomplete="age" autofocus>
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="phone_num" class="col-md-4 col-form-label text-md-end">phone_num</label>
                                    <input id="phone_num" type="text" name="phone_num" value="{{ old('phone_num') }}" required autocomplete="age" autofocus>
                                </div>
                            </div>
                            <div class="row mb-3"> 
                                <div class="col-md-6">
                                    <label for="Gender" class="col-md-4 col-form-label text-md-end">service</label>
                                        <select  name="needed_services" id="floatingSelect" aria-label="Floating label select example">
                                            <option selected value="" >service</option>
                                            <option value="Cleaning">Cleaning</option>
                                            <option value="Transportation">Transportation</option>
                                            <option value="Provide_needs">Provide_needs</option>
                                            <option value="Personal_hygiene">Personal_hygiene</option> 
                                            <option value="Personal_check">Personal_check</option>
                                          </select>
                                    </div>
                                </div>   
                               <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="time_needed" class="col-md-4 col-form-label text-md-end">time_needed</label>
                                    <input id="time_needed" type="datetime-local" name="time_needed" value="{{ old('time_needed') }}" required autocomplete="password" autofocus>
                                </div>
                            </div>
    
                            <div class="row mb-3"> 
                            <div class="col-md-6">
                                <label for="Gender" class="col-md-4 col-form-label text-md-end">Gender</label>
                                    <select  name="gender" id="floatingSelect" aria-label="Floating label select example">
                                        <option selected value="" >Gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                      </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                <label for="location" class="col-md-4 col-form-label text-md-end">location</label>
                                    <input id="location" type="text" name="location" value="{{ old('location') }}" required autocomplete="name" autofocus>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                <label for="guardian_name" class="col-md-4 col-form-label text-md-end">guardian_name</label>
                                    <input id="guardian_name" type="text" name="guardian_name" value="{{ old('guardian_name') }}" required autocomplete="name" autofocus>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                <label for="guardian_number" class="col-md-4 col-form-label text-md-end">guardian_number</label>
                                    <input id="guardian_number" type="text" name="guardian_number" value="{{ old('guardian_number') }}" required autocomplete="name" autofocus>
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <div class="col-md-6">
                                <label for="guardian_relation" class="col-md-4 col-form-label text-md-end">guardian_relation</label>
                                    <input id="guardian_relation" type="text" name="guardian_relation" value="{{ old('guardian_relation') }}" required autocomplete="name" autofocus>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="guardian_id_pic" class="col-md-4 col-form-label text-md-end">guardian id Pic</label>
                                <div class="col-md-6">
                                <input type="file" name="guardian_id_pic" placeholder="Image">
                            </div>
                        </div>
                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">SUBMIT
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
    </html>
    @endsection