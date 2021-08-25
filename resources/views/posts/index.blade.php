@extends('layouts.app')

@section('content')
<div class="row">
    <h1 class='col'>My post list</h1>

    <form class="col d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
</div>

@foreach ($all as $post)
<a href="{{route('show-posts', ['id' => $post->id])}}">
    <h1>{{$post->title}}</h1>
</a>
<h3>{{$post->slug}}</h3>
@endforeach
<div>
    <a href="{{route('welcome')}}">Voltar</a>
</div>

@endsection