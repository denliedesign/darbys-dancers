@foreach($people->unique(1) as $person)
    @can('view', $person)
<h3 class="lead font-fira text-center mt-5 pt-5" style="font-size: 2.75em;">{{ $user->studioName }}</h3>
<p class="text-center text-muted">
    <small>
        name: {{ $user->name }}
        &nbsp; &middot; &nbsp; phone: {{ $user->phone }}
        &nbsp; &middot; &nbsp; email: {{ $user->email }}
    </small>
</p>
    @endcan
@endforeach
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
                    <td scope="col">
                        <form action="/people/{{ $person->id }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger ml-4" type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endcan
            @endif
        @endforeach
        </tbody>
    </table>
</div>
