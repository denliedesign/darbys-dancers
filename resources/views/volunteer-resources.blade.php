@extends('layouts.app')
@section('content')

    <div class="brand-bg-gradient-yo d-flex align-items-center justify-content-center" style="position: relative; height: 100%;">
        <div>
            <h2 class="text-center py-5">Resources for Volunteers</h2>
            <div style="height: 34px;"></div>
            <div class="custom-shape-divider-bottom-1665960448">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
                </svg>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="py-5">

            {{ $code = "" }}

            @if(isset($_POST['code']))
                <div style="display: none;">
                    {{ $code = $_POST['code'] }}
                </div>
            @endif

            @if($code == 'diversity' || $code == 'brave')
                @include('_connected-volunteers')
            @else
                <div style="height: 100%;" class="d-flex align-items-center justify-content-center text-center">
                    <form method="post" action="volunteer-resources" style="border: 1px solid silver; border-radius: 10px;" class="p-5">
                        <div class="form-inline">
                            <div class="form-group">
                                <label for="code">Password</label>
                                <input type="password" class="form-control my-2" id="code" name="code" aria-describedby="code">
                            </div>
                            @csrf
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>


                <div>
                    <p class="text-center mt-3">
                        No password? Get <a href="/darbys-dancers-memberships">connected with a dance studio today</a> to access these great resources!
                    </p>
                </div>
            @endif

        </div>
    </div>

@endsection
