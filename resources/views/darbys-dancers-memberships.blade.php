@extends('layouts.app')
@section('content')

    {{--    <div class="banner-wrap">--}}
    {{--        <div class="banner"></div>--}}
    {{--    </div>--}}

    <div class="brand-bg-gradient-yo d-flex align-items-center justify-content-center" style="position: relative; height: 100%;">
        <div>
            <h2 class="text-center py-5">Dancer's Memberships</h2>
            <div style="height: 34px;"></div>
            <div class="custom-shape-divider-bottom-1665960448">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
                </svg>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row">
            <div class="col-sm">
                <div class="d-flex align-items-center" style="height: 100%;">
                    <div>
                        <h3 class="lead font-fira" style="font-size: 2.75em;">Studio Locator</h3>
                        <p class="m-0 p-0">
                            <span class="font-archivo-plain">Find the Darby's Dancers Studio Location Nearest You.</span>
                            Every Darby’s Dancer will be treated with the utmost respect and kindness in an inclusive atmosphere within our Studio Memberships. Our dancers will be members of the studio like any other participants and participate in the performing arts within the studios (music, theatre, dance).
                            <br><br>
                            <span class="realistic-marker-highlight">Contact a studio</span> to get your dancer signed up. You'll find how to contact each studio by clicking their location on the map.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="d-flex justify-content-center">
                    <iframe class="shadow rounded" src="https://www.google.com/maps/d/embed?mid=1xkrV8Tj30y9tueeFx7WiarVCFXK8_AA&hl=en&ehbc=2E312F" width="640" height="480"></iframe>
                </div>
            </div>
        </div>
    </div>

    <div class="brand-bg-gradient-yo mt-5">
        <div class="container py-5">
            <h2 class="text-center">No studios near you? Fill out this "New Studio Inquiry Form" to get a Darby's Dancers program started near you!</h2>
            @include('inquire.create')
        </div>
    </div>

    <svg xmlns="//www.w3.org/2000/svg" version="1.1" class="svg-filters" style="display:none;">
        <defs>
            <filter id="marker-shape">
                <feTurbulence type="fractalNoise" baseFrequency="0 0.15" numOctaves="1" result="warp" />
                <feDisplacementMap xChannelSelector="R" yChannelSelector="G" scale="30" in="SourceGraphic" in2="warp" />
            </filter>
        </defs>
    </svg>

@endsection
