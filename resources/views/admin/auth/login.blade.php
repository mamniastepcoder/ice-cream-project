<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
   <div class="container">
    <div class="row justify-content-center mt-5">
          
        <div class="col-md-6">
             @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
   @endif
   @if (session('error'))
    <div>{{ session('error') }}</div>
@endif
            <div class="card">
             <h2 class="text-center mt-2 text-success">Login</h2>

                <div class="card-body">
                    <form method="POST" action="{{('login')}}">
                        @csrf

                        <div class="form-group">
                            <label for="email">email</label>
                            <input type="text" class="form-control"  name="email" value="{{ old('email') }}" placeholder="email">
                             @error('email')
                       <div class="text-danger">{{$message}}</div>
                       @enderror
                       </div>
                      <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control " name="password" value="{{ old('password') }}" placeholder="Password" >
                            @error('password')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                               
                        </div>

                        <button type="submit" class="btn btn-primary">Login</button>
                       <a href="{{ route('register') }}" class="btn btn-secondary"> Register </a>
                 </form>
             </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

