
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">
    @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger">{{$error}}</div>
            @endforeach
        @endif

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" >

   

    
    <!-- Custom styles for this template -->
    <link href="css/login.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin">
  <form action="{{route('doLogin')}}" method="post">
  @csrf
    <h1 class="h3 mb-3 fw-normal">Admin Login </h1>

    <div class="form-floating">
    <input required name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
    <input required name="password" type="password" class="form-control" id="exampleInputPassword1">
      <label for="floatingPassword">Password</label>
    </div>

    
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
  
  </form>
</main>


    
  </body>
</html>


<!--  -->