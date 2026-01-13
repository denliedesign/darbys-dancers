@extends('layouts.app')
@section('content')

    <div class="brand-bg-gradient-yo d-flex align-items-center justify-content-center" style="position: relative; height: 100%;">
        <div>
            <h2 class="text-center py-5">Testimonials</h2>
            <div style="height: 33px;"></div>
            <div class="custom-shape-divider-bottom-1665960448">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
                </svg>
            </div>
        </div>
    </div>

    <section class="py-5">
        <div class="container">

            <!-- Shared studio attribution -->
            <div class="text-center">
                <p class="mb-0 fw-semibold">Fredericksburg Ballet Centre</p>
                <p class="mb-0 text-muted small">Fredericksburg, Virginia</p>
            </div>

            <hr class="mt-3 mb-5" style="max-width: 200px; margin-left:auto; margin-right:auto;">


            <div class="row g-4 align-items-start justify-content-center">
                <!-- Video 1 -->
                <div class="col-12 col-md-6 d-flex flex-column align-items-center">
                    <div class="portrait-video shadow-sm rounded-4 overflow-hidden">
                        <video
                            src="/images/testimonial-jennifer.mov"
                            controls
                            preload="metadata"
                            playsinline>
                        </video>
                    </div>

                    <div class="border-start ps-3 mt-3 w-100" style="max-width: 360px;">
                        <p class="mb-1 fw-semibold">Miss Jennifer</p>
                        <p class="mb-0 fst-italic small text-muted">Owner</p>
                    </div>
                </div>

                <!-- Video 2 -->
                <div class="col-12 col-md-6 d-flex flex-column align-items-center">
                    <div class="portrait-video shadow-sm rounded-4 overflow-hidden">
                        <video
                            src="/images/testimonial-christi.mov"
                            controls
                            preload="metadata"
                            playsinline>
                        </video>
                    </div>

                    <div class="border-start ps-3 mt-3 w-100" style="max-width: 360px;">
                        <p class="mb-1 fw-semibold">Miss Christi</p>
                        <p class="mb-0 fst-italic small text-muted">Instructor</p>
                    </div>
                </div>
            </div>


        </div>
    </section>


    <style>
        /* 9:16 portrait frame */
        .portrait-video {
            width: min(360px, 100%);
            aspect-ratio: 9 / 16;
            background: #000;
        }

        .portrait-video video {
            width: 100%;
            height: 100%;
            display: block;
            object-fit: cover; /* fills frame, may crop edges */
        }

        /* Optional: slightly larger on big screens */
        @media (min-width: 992px) {
            .portrait-video {
                width: 380px;
            }
        }
    </style>




@endsection
