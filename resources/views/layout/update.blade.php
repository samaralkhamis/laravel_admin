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
@foreach($update as $data)
                    <form action="{{url('/update/id/'.$data->user_id)}}" method="post">
                      @csrf
                      @method('PUT')
                          <div class="row mb-3">
                            <div class="col-md-6">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Is Accepted</label>
                                <input type="text" name="is_accepted" value="{{$data->is_accepted}}" required autocomplete="name" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                          <div class="col-md-6">
                          <label for="name" class="col-md-4 col-form-label text-md-end">Is Deleted</label>
                              <input type="text" name="is_deleted" value="{{$data->is_deleted}}" required autocomplete="name" autofocus>
                          </div>
                      </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">SUBMIT</button>
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
