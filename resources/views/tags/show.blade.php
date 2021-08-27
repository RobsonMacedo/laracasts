@extends('layouts.app')

@section('content')

<h1>My tag details</h1>

@if(isset($tag))
<h2>{{$tag->name}}</h2>
<p>{{$tag->description}}</p>

@endif
<a class="btn btn-primary" href="{{route('edit-tag', ['id' => $tag->id])}}">update tag</a>
<button onclick="deleteSwal('{{route('delete-tag', ['id' => $tag->id])}}')" class="btn btn-secondary">delete
    tag</button>

<div>
    <a href="{{route('welcome')}}">Voltar</a>
</div>

@endsection