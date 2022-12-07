@extends('layouts.app')
{{--@section('title', 'News Article | Misty\'s Dance Unlimited')--}}
@section('content')

    <div class="brand-bg-gradient-yo d-flex align-items-center justify-content-center" style="position: relative; height: 100%;">
        <div>
            <h2 class="text-center py-5">{{ $article->newsTitle }}</h2>
            <div style="height: 34px;"></div>
            <div class="custom-shape-divider-bottom-1665960448">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
                </svg>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="d-flex justify-content-center mb-3">
            <img src="{{ asset('/storage/' . $article->newsPhoto) }}" alt="" class="img-fluid" style="max-width: 600px; height: auto;">
        </div>
        <div class="mb-3">
            <p>{!! $article->newsContent !!}</p>
        </div>
        <div class="mb-5 d-flex justify-content-end">
            <a href="{{ url()->previous() }}"><div class="btn btn-lg brand-bg-logo-blue shadow brand-btn text-white" style="width: 175px;">Back</div></a>
        </div>
    </div>

@endsection
