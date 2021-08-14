@extends('layouts.app')

@section('content')
<div class="row">
    <h1 class='col-10'>My post list</h1>
    <input class="col form-control me-2" wire:model="term" type="search" placeholder="Search your posts"
        aria-label="Search">
    <ul>
        @foreach ($posts as $post)
        <a href="{{route('show-posts', ['id' => $post->id])}}">
            <h1>{{$post->title}}</h1>
        </a>
        <h3>{{$post->slug}}</h3>
        @endforeach
    </ul>

</div>



<div>
    <a href="{{route('welcome')}}">Voltar</a>
</div>
@endsection