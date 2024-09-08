@extends('partials.navbar')

@section('container')
<div class="login-box" style="margin:auto; padding:auto; margin-top:150px;">
    <div class="card card-outline card-primary">
        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert" id="success-alert">
            {{ session('success') }}
        </div>
        @endif

        @if(session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert" id="success-alert">
            {{ session('loginError') }}
        </div>
        @endif
        <div class="card-header text-center">
            <h1>Login</h1>
        </div>
        <div class="card-body text-center">
            <p class="login-box-msg">Sign in to start your session</p>
            <form method="post" action="/login">
                @csrf
                <div class="input-group mb-3">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" id="email" name="email" autofocus required value="{{old('email')}}">
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Password" id="password" name="password" required>
                    <div class="input-group-append">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Login</button>
                <button class="btn btn-primary"><a href="/" style="color: white;">Back</a></button>
            </form>
            <small>Not Registered? <a href="/register">Register Now</a></small>
        </div>
    </div>
</div>

@endsection

<script>
    // Set timeout to remove the alert after 2 seconds
    setTimeout(function() {
        $('#success-alert').alert('close');
    }, 2000);
</script>