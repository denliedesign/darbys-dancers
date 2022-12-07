@extends('layouts.app')
{{--@section('title', 'News | Misty\'s Dance Unlimited')--}}
{{--@section('description', 'Keep Up To Date With The Latest News From MDU!')--}}
@section('content')

    <div class="brand-bg-gradient-yo d-flex align-items-center justify-content-center" style="position: relative; height: 100%;">
        <div>
            <h2 class="text-center py-5">News</h2>
            <div style="height: 34px;"></div>
            <div class="custom-shape-divider-bottom-1665960448">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
                </svg>
            </div>
        </div>
    </div>

    <div class="pb-5">
        @can('update', \App\Article::class)
            <p class="text-center"><a href="/articles/create">Create New Article</a></p>
        @endcan

        <div class="container" id="news">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 pb-5">
                @foreach($articles as $article)
                    <div class="col-sm p-2">
                        <div class="card" style="max-width: 400px">
                            <a href="/articles/{{ $article->id }}">
                                <img src="{{ asset('/storage/' . $article->newsPhoto) }}" class="card-img-top" alt="...">
                            </a>
                            <div class="card-body">
                                <h4 class="font-fira">{{ $article->newsTitle }}</h4>
                                <p class="card-text">{!! strip_tags(substr($article->newsContent, 0, 125)) . '...' !!}</p>
                            </div>
                            @can('update', \App\Article::class)
                                <div class="card-footer">
                                    <div class="admin-controls d-flex justify-content-center align-items-center pb-2">
                                        <div><a href="/articles/{{ $article->id }}/edit">Edit Article</a></div>
                                        <div class="mx-3">
                                            <form action="/articles/{{ $article->id }}" method="POST">
                                                @method('DELETE')
                                                @csrf

                                                <button class="btn btn-danger ml-4" type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endcan
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
