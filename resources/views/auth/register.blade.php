@extends('auth.layouts')

@section('content')

<h1>Register</h1>
<a href="{{ route('login') }}">Login</a>
<br><br>
<form action="{{ route('store') }}" method="POST">

    @csrf
    <label>Nama Lengkap</label><br>
    <input type="text" id="name" name="name" value="{{ old('name') }}"><br>

    @if ($errors->has('name'))
    <span class="text-danger">{{ $errors->first('name') }}</span>
    @endif

    <br>
    <label>Email Address</label><br>
    <input type="email" id="email" name="email" value="{{ old('email') }}"><br>

    @if ($errors->has('email'))
    <span class="text-danger">{{ $errors->first('email') }}</span>
    @endif
    <br>
    <label>Password</label><br>
    <input type="password" id="password" name="password"><br>
    
    @if ($errors->has('password'))
    <span class="text-danger">[[Serrors->first("password")]]</sparo
    @endif
    
    <br>
    <label for="password confirmation" class="col-md-4 col-form-label text-ad-end text-start" >Confirm Password</label>
    <div class="col-ed-6">
        <input type="password" class="form-control" id="password_confirmation" name="password confirmation">
    </div>
    <Input type="submit" value="Register">
</form>
@endsection