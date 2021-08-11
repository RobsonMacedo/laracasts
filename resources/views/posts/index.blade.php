@extends('layout')

@section('content')

<h1>My post list</h1>
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