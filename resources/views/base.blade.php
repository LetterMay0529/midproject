<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://www.graphicsprings.com/filestorage/stencils/0b9e79b37796b4f9200d26edfa127d19.png?width=500&height=500" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/c1071b1668.js" crossorigin="anonymous"></script>
    <title>IPT MidTerm Project</title>
</head>
<body>
<div style="background-image: url(https://userscontent2.emaze.com/images/4ce6c7f6-c9db-458e-8943-dca74f74a88d/f434d346bf5bfd784b2d469e2c574d56.jpg);background-attachment:fixed; background-repeat: no-repeat; background-position:center; "> 
   @if (session('Error'))
    <div class="alert alert-danger">
        <div class="ccontainer">
            {{session('Error')}}
        </div>
    </div>
    @endif
    @if (session('Message'))
    <div class="alert alert-info">
        <div class="container">
            {{session('Message')}}
        </div>
    </div>
    @endif
    @if(session('errors'))
    <div class="alert alert-danger">
        <div class="container">
            Please fix the following errors
   <ul>
            @foreach(session('errors')->all() as $error)
            <li>{{$error}}</li>
            @endforeach
            </ul>
        </div>
    </div>
    @endif
    <div>
          @yield('content')
     </div>
<br><br><br>
</body>

</html>