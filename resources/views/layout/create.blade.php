@extends('layout.master')  
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
                <div class="card-header"></div>
                <div class="card-body">
                    
                    <form  action="{{url('create')}}"method="post">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-md-6">
                            <label for="name" class="col-md-4 col-form-label text-md-end">First Name</label>
                                <input id="name" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="email" class="col-md-4 col-form-label text-md-end">Email</label>
                                <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            </div>
                        </div>


                           <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="password" class="col-md-4 col-form-label text-md-end">Password</label>
                                <input id="password" type="password" name="password" value="{{ old('password') }}" required autocomplete="password" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end"> Confirm Password </label>
                            <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">
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
                                <label for="age" class="col-md-4 col-form-label text-md-end">age</label>
                                <input id="age" type="number" name="age" value="{{ old('age') }}" required autocomplete="age" autofocus>
                            </div>
                        </div>
             

                        <div class="row mb-3">
                            <label for="front_id_pic" class="col-md-4 col-form-label text-md-end">Front id Pic</label>
                            <div class="col-md-6">
                            <input type="file" name="front_id_pic" placeholder="Image">
                        </div>
                    </div>

                    <div class="row mb-3">
                            <label for="back_id_pic" class="col-md-4 col-form-label text-md-end">Back id Pic</label>
                            <div class="col-md-6">
                        <input type="file" name="back_id_pic" placeholder="Image">
                    </div>
                    </div>


                    <div class="row mb-3">
                        <div class="col-md-6">
                        <label for="time" class="col-md-4 col-form-label text-md-end">Time</label>
                    <input type="date" name="time" required>
                    </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                        <label for="floatingSelect" class="col-md-4 col-form-label text-md-end">Car</label>
                            <select  name="car" id="floatingSelect" aria-label="Floating label select example">
                                <option selected value="" >Car</option>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                              </select>
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