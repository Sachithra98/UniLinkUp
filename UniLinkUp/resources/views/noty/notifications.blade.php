<!-- resources/views/notifications/index.blade.php -->

@extends('layout2')

@section('content')
    <div class="container">
        <h2>Notifications</h2>

        @foreach ($notifications as $notification)
            <div class="notification {{ $notification->read ? 'read' : 'unread' }}">
                <p>{{ $notification->message }}</p>
                @unless($notification->read)
                    <form method="POST" action="{{ url("/notifications/{$notification->id}/mark-as-read") }}">
                        @csrf
                        @method('PATCH')
                        <button type="submit">Mark as Read</button>
                    </form>
                @endunless
            </div>
        @endforeach
    </div>
@endsection
