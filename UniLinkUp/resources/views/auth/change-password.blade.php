<!-- resources/views/auth/change-password.blade.php -->

@extends("layout")

@section('content')
    <div class="container">
        <form method="POST" action="{{ route('change-password') }}">
            @csrf

            <div>
                <label for="current_password">Current Password:</label>
                <input type="password" name="current_password" required>
            </div>

            <div>
                <label for="new_password">New Password:</label>
                <input type="password" name="new_password" required>
            </div>

            <div>
                <label for="confirm_password">Confirm New Password:</label>
                <input type="password" name="confirm_password" required>
            </div>

            <button type="submit">Change Password</button>
        </form>
    </div>
@endsection
