<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="mt-5">
        <h1 class="text-center mb-4 text-success">New Registration</h1>
        
        <!-- Success Alert -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        
        <!-- Error Alert -->
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <!-- Registration Form -->
        <form method="POST" action="{{ route('register.insert') }}" class="border border-success rounded p-5 mx-auto" style="max-width: 500px;">
            @csrf

            <!-- Name Field -->
            <div class="form-group">
                <label for="name"><b >Name</b></label>
                <input id="name" type="text" name="name" value="{{ old('name') }}" class="form-control" autofocus >
                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Email Field -->
            <div class="form-group">
                <label for="username"><b >Email</b></label>
                <input id="email" type="email" name="email" value="{{ old('username') }}" class="form-control" >
                @error('username')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Password Field -->
            <div class="form-group">
                <label for="password"><b >Password</b></label>
                <input id="password" type="password" name="password" class="form-control" >
                @error('password')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Confirm Password Field -->
            <div class="form-group">
                <label for="password_confirmation"><b >Confirm Password</b></label>
                <input id="password_confirmation" type="password" name="password_confirmation" class="form-control" >
                @error('password_confirmation')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary btn-block">Register</button>

            <a href="{{ route('login') }}" class="d-block text-center mt-3">Click to Login</a>
        </form>
    </div>
</body>
</html>

