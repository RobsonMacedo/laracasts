@extends('layouts.app')

@section('content')
{{-- <style>
    .margin-top {
        margin-top: 1%;
    }
</style> --}}
<div class="row mb-2 mt-3">
    @foreach ($posts as $post)
    <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-primary">{{$post->title}}</strong>

                <p class="card-text mb-auto">{{$post->slug}}</p>
                <a href="{{route('show-posts', ['id' => $post->id])}}" class="stretched-link">Continue reading</a>
            </div>
            <div class="col-auto d-none d-lg-block">
                <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img"
                    aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef"
                        dy=".3em">Thumbnail</text>
                </svg>

            </div>
        </div>
    </div>
    @endforeach

</div>


<div>
    <a href="{{route('welcome')}}">Voltar</a>
</div>

@endsection