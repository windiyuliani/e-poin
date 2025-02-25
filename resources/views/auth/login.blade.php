@extends('auth.layouts')

@section('content')

<h1>Login</h1>
<br><br>
<form action="{{ route('authenticate') }}" method="post">
    @csrf
    <label for="email">Email Address</label><br>
    <input type="email" id="email" name="email" value="{{ old('email') }}" required><br>
    @error('email')
        <span style="color: red;">{{ $message }}</span><br>
    @enderror
    <br>

    <label for="password">Password</label><br>
    <input type="password" id="password" name="password" required autocomplete="off"><br>
    @error('password')
        <span style="color: red;">{{ $message }}</span><br>
    @enderror
    <br>

    <button type="submit">Login</button>
</form>

@endsection
