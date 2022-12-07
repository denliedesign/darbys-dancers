@extends('layouts.app')
{{--@section('title', 'News | Misty\'s Dance Unlimited')--}}
{{--@section('description', 'Keep Up To Date With The Latest News From MDU!')--}}
@section('content')

    <div class="brand-bg-gradient-yo d-flex align-items-center justify-content-center" style="position: relative; height: 100%;">
        <div>
            <h2 class="text-center py-5">Studio Database</h2>
            <div style="height: 34px;"></div>
            <div class="custom-shape-divider-bottom-1665960448">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
                </svg>
            </div>
        </div>
    </div>

    <div class="pb-5">
{{--        @can('update', \App\Person::class)--}}
            <p class="text-center"><a href="/people/create">Add New Person</a></p>
{{--        @endcan--}}

        <div class="container" id="person-table">
            @foreach($users as $user)
                <h3 class="lead font-fira text-center mt-5 pt-5" style="font-size: 2.75em;">{{ $user->name }}</h3>
                <div class="card rounded shadow" style="border: 10px solid #31609D;">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Role</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Email</th>
                            <th scope="col">Address 1</th>
                            <th scope="col">Address 2</th>
                            <th scope="col">City</th>
                            <th scope="col">State</th>
                            <th scope="col">Zip Code</th>
                            <th scope="col">Comments</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($people as $person)
                            @if($user->id === $person->user_id)
                                @can('update', $person)
                                    <tr>
                                        <td scope="col">{{ $person->name }}</td>
                                        <td scope="col">{{ $person->role }}</td>
                                        <td scope="col">{{ $person->phone }}</td>
                                        <td scope="col">{{ $person->email }}</td>
                                        <td scope="col">{{ $person->addressOne }}</td>
                                        <td scope="col">{{ $person->addressTwo }}</td>
                                        <td scope="col">{{ $person->city }}</td>
                                        <td scope="col">{{ $person->state }}</td>
                                        <td scope="col">{{ $person->zip }}</td>
                                        <td scope="col">{!! $person->comments !!}</td>
                                        <td scope="col"><a href="/people/{{ $person->id }}/edit">Edit Person</a></td>
                                        {{--                            @can('update', \App\Person::class)--}}
                                        <td scope="col">
                                            <form action="/people/{{ $person->id }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button class="btn btn-danger ml-4" type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                                            </form>
                                        </td>
                                        {{--                            @endcan--}}
                                    </tr>
                                @endcan
                            @endif
                        @endforeach
                        </tbody>
                    </table>
                </div>
            @endforeach
        </div>
    </div>


@endsection
