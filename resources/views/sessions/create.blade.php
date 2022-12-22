<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Khaptad-Login</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrapcss/bootstrap-grid.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <style>
        body{
            height:100vh;
            display:flex;
            flex-direction:column;
            justify-content:center;
            align-items: center;
            background-image: url('../khaptadnpassets/background2.webp');
        }

        .card{
            overflow:hidden;
            border-radius:10px;
            min-height:500px;

        }

        .img-left{
            width:45%;
            background: url("../khaptadnpassets/khaptad-logo.png") center;
            /* background-size: cover; */
            background-repeat: no-repeat;
        }

        .card-body{
            padding:2rem;
        }

        input[type = 'email'],input[type = 'password']{
            border-radius:20px;
            height: 50px;
            border:none;
            background: #E3F2FD;
            width: 300px;
            padding: .5rem;
            color: green;
        }


        .title{
            color: white;
            margin-left: 2rem;
            font-size: 26px;
        }

        .login-btn{
            width: 80px;
            height: 30px;
        }
    </style>
</head>

<body>
    <div class="container">

        <div class='col-md-9 card mx-auto d-flex flex-row px-0'>
            
            <div class="img-left d-md-flex d-none"></div>
            
            <div class="card-body d-flex flex-column justify-content-center">
                <h4 class="title pb-3">Login into account</h4>
                
                <form class='col-sm-10 col-12 mx-auto' method="POST" action="/login">
                    {{ csrf_field() }}
                    <div class='form-group '>
                    <input style="color:black" type="email" id="email" name="email" class="form-control " placeholder='email'>
                    </div>
                    <div class='form-group py-3 ' >
                    <input type="password" class="form-control" id="password" name="password" placeholder='***'>
                    </div>
                    <div class='d-flex justify-content-evenly'>
                        <input type="submit" class="login-btn about-readmore-btn " value='Login'>
                        
                        <a href="{{ route('home') }}">
                            <input type="button" class="login-btn about-readmore-btn" value='Home'>
                        </a>
                    </div>
                </form>
            </div>
    
        </div>
    </div>
    {{-- <div class="login-section">

        <div class="login-nav">
            <a href="{{ route('home') }}">Home</a>
            <div class="login-title">
                <h3>Log In</h3>
            </div>
        
        </div>
    
        <div>
            <form class="login-form" method="POST" action="/login">
                {{ csrf_field() }}
                <div class="form-box">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
            
                <div class="form-box">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
            
                <div class="form-box">
                    <button style="cursor:pointer" type="submit" class="login-btn">Login</button>
                </div>
            </form>
        </div>
    
    </div> --}}

</body>
</html>





