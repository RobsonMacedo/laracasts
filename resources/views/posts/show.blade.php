@extends('layouts.app')

@section('content')

<h1>My post details</h1>

@if(isset($post))
<label for="">title</label>
<h3>{{$post->title}}</h3>
<label for="">slug</label>
<h3>{{$post->slug}}</h3>
<label for="">body</label>
<p>{{$post->body}}</p>
<p>Posted by - {{$post->user->name?? ''}}</p>
<p>Tags
    @foreach ($post->tags as $tag)
    <li><a href="">{{$tag->name ?? 'No tags until now!'}}</a> </li>
    @endforeach
</p>

@endif
<button onclick="window.location='{{route('edit-posts', ['id' => $post->id])}}'" class="btn btn-primary">update
    post</button>
<button onclick="deleteSwal('{{route('delete-posts', ['id' => $post->id])}}')" class="btn btn-secondary">New
    Delete</button>

@include('comments.index')

<div>
    <a href="{{route('welcome')}}">Voltar</a>
</div>

@endsection