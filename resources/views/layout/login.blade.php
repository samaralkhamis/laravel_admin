<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link
    rel="stylesheet"
    href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"
    integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V"
    crossorigin="anonymous"
  />
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <title>Document</title>
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
</head>
<body>
    <section class="sign-in mt-5">
        <div class="container">
            <div class="signin-content">
                <div class="signin-image">
                    <figure><img src='/img/login.png' alt="sing up image"></figure>
                </div>
                <div class="signin-form">
                    <h2 class="form-title">Login</h2>
                    <form method="POST" action="{{url('login')}}">
                        @csrf
                        <div class="form-group">
                            <label for="email"><i class="fa fa-user"></i></label>
                            <input type="email" name="email" id="email" placeholder="email"/><br>
                         </div>
                        <div class="form-group">
                            <label for="your_pass"><i class="fa fa-unlock-alt"></i></label>
                            <input type="password" name="password" id="your_pass" placeholder="Password"/><br>

                        </div>
                        @if (session('message'))
                        <div class="alert alert-danger" role="alert">
                            {{session('message')}}
                        </div>
                    @endif
                        <div class="form-group form-button">
                            <button type="submit" name="login" id="signin" class="btn btn-primary btn-block"> login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
