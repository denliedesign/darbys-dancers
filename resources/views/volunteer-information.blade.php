@extends('layouts.app')
@section('content')

    {{--    <div class="banner-wrap">--}}
    {{--        <div class="banner"></div>--}}
    {{--    </div>--}}

    <div class="brand-bg-gradient-yo d-flex align-items-center justify-content-center" style="position: relative; height: 100%;">
        <div>
            <h2 class="text-center py-5">Volunteer Information</h2>
            <div style="height: 34px;"></div>
            <div class="custom-shape-divider-bottom-1665960448">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
                </svg>
            </div>
        </div>
    </div>

    <div class="container mb-5">
        {{--        <h2 class="text-center my-5">Volunteer Information</h2>--}}
        <div class="row">
            <div class="col-sm d-flex align-items-center justify-content-center">
                <p class="m-0 p-0">
                    <span class="font-archivo-plain">The volunteer component is an integral aspect of the organization.</span>
                    Our volunteers find that the experience is life changing and many young people have decided to pursue careers in special education, physical therapy, speech therapy, etc. as a result. Our volunteers are generally, but not limited to, other dancers in the studio who make a one hour commitment per week to partner with a special needs child and help them during the dance class.  Many colleges require volunteer hours of community work and this is a great way for young teens to obtain these hours. Our volunteers and students form close relationships and often become like a part of each other’s families.  There is no limit to the <span class="realistic-marker-highlight">bonds they form</span>.  It requires a commitment on the part of the teen to be present each week with their child and at any dance opportunities that may present themselves.
                </p>
            </div>
            <div class="col-sm d-flex justify-content-center">
                <img src="/images/volunteer-1.jpg" alt="teen helping young dancer" class="img-fluid shadow rounded">
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-sm d-flex justify-content-center">
                <img src="/images/volunteer-2.jpg" alt="teen helping dancer in wheelchair" class="img-fluid shadow rounded">
            </div>
            <div class="col-sm d-flex align-items-center justify-content-center">
                <div>
                    <p class="m-0 p-0">
                        <span class="font-archivo-plain">The special needs dancers may be able to perform the dance steps independently, or</span>
                        they may need more assistance depending on their disability.  The teen helps the dancer by modeling the dance steps and assisting them in following directions.  Special training is not required though a general volunteer training will be conducted before class begins.  The goal is not dance perfection. The goal is for each dancer to <span class="realistic-marker-highlight">find joy in dance</span> and performing.
                    </p>
                </div>
            </div>
        </div>
        <div class="my-5">
            <h3 class="text-center lead font-fira" style="font-size: 2.75em;">
                If you are interested in volunteering, <span class="brand-bg-dark-blue text-white px-4 fw-bold">contact your studio</span> today!
            </h3>
        </div>
    </div>

    {{--    <div class="brand-bg-gradient-yo mt-5">--}}
    {{--        <div class="container py-5">--}}
    {{--            <h2 class="text-center">To volunteer with Darby’s Dancers, contact your local DD studio! Please fill out the form below.</h2>--}}
    {{--            @include('volunteer.create')--}}
    {{--        </div>--}}
    {{--    </div>--}}

    <svg xmlns="//www.w3.org/2000/svg" version="1.1" class="svg-filters" style="display:none;">
        <defs>
            <filter id="marker-shape">
                <feTurbulence type="fractalNoise" baseFrequency="0 0.15" numOctaves="1" result="warp" />
                <feDisplacementMap xChannelSelector="R" yChannelSelector="G" scale="30" in="SourceGraphic" in2="warp" />
            </filter>
        </defs>
    </svg>

@endsection
