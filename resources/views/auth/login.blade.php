<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="{{asset('content/css/login.css')}}" rel="stylesheet">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<html>
<head>

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>
<body id="LoginForm">
    <div class="container">
        <div class="login-form">
            <div class="main-div">
                <div class="panel">
                   <h2>Admin Login</h2>
                   <p>Please enter your email and password</p>
                </div>

                @if (count($errors)>0)
                    <div class="bg-danger text-light" style="padding: 10px; margin-bottom: 10px;">

                        @foreach($errors->all() as $error)
                            <strong>{{ $error }}</strong>
                        @endforeach

                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email Address">
                    </div>

                    <div class="form-group">
                        <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password">
                    </div>

                    <button type="submit" class="btn btn-primary">Login</button>

                </form>

            </div>
        </div>
    </div>
</body>
</html>
