@extends('layouts.app')
@section('content')

    <div class="container py-5">
        <div class="container">
            @can('view-all-users')
                <h2>User List</h2>
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Studio Name</th>
                    <th>Phone</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->studioName }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>{{ $user->created_at }}</td>
                        <td>{{ $user->updated_at }}</td>
                        <td>
                            <form action="{{ route('users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this user?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            @else
            <!-- Display only the logged-in user's account -->
                <h2>Your Account Details</h2>
                <p>
                    Username: {{ Auth::user()->name }}
                    <br>Email: {{ Auth::user()->email }}
                    <br>Studio: {{ Auth::user()->studioName }}
                    <br>Phone: {{ Auth::user()->phone }}
                    <br>Created: {{ Auth::user()->created_at }}
                </p>
            @endcan
        </div>
    </div>

@endsection
