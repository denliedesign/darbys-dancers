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

    <div>
{{--        @can('update', \App\Person::class)--}}
            <p class="text-center">
                <a href="/people/create">Add New Person</a>
                &nbsp; / &nbsp;
                <a href="https://buy.stripe.com/fZe28G68s5Aj7UA7ss" target="_blank">Pay Dancer Fee</a>
            </p>
{{--        @endcan--}}
    </div>

{{--    @can('view', $people)--}}
        <div class="container mb-5" id="switch-case">
            @foreach($users as $user->sortBy('studioName'))
                @switch($user->name)
                    @case(Auth::user()->name)
                        @cannot('view', $people)
                            @include('_people-author')
                        @endcannot
                    @break
                    @case(Auth::user()->email === 'valerie@darbysdancers.org')
                        @include('_people-admin')
                    @break
                @endswitch
            @endforeach
        </div>
{{--    @endcan--}}


@endsection
