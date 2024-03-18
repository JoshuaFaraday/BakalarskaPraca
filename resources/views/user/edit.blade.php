@extends('layouts.app')

@section('content')
<div class="container mt-12">
    <h2>Edit Profile</h2>

    <form method="POST" action="{{ route('user.update') }}">
        @csrf
        @method('PATCH')

        <h1>asdbgihjkdasg</h1>
        <h1>asdbgihjkdasg</h1>
   
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ $user->name }}" required autofocus>
        </div>

        <!-- E-mail a heslo len ak nie je admin -->
        @if ($user->email !== 'admin@admin.com')
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="{{ $user->email }}" required>
            </div>
        @endif

        <div class="form-group">
            <label for="password">New Password:</label>
            <input type="password" id="password" name="password">
            <label for="password-confirm">Confirm New Password:</label>
            <input type="password" id="password-confirm" name="password_confirmation">
        </div>

        <button type="submit" class="btn btn-primary">Update Profile</button>
    </form>
</div>
@endsection
