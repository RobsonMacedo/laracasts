@extends('layout')

@section('content')

<h1>My post details</h1>

@if(isset($post))
<h2>{{$post->title}}</h2>
<h3>{{$post->slug}}</h3>
<p>{{$post->body}}</p>
{{$tags}}
<p>Posted by - {{$user->name ?? ''}}</p>
<p>Tags - {{$tags->name ?? ''}}</p>

@endif
<div>
    <form action="{{url('post/'.$post->id.'/update')}}" method="post">
        @csrf
        <button type='submit' class="btn btn-primary">update
            post</button>
    </form>
    </br>
    <button onclick="deleteSwal('{{route('delete-posts', ['id' => $post->id])}}')" class="btn btn-secondary">New
        Delete</button>
</div>
<div>
    <a href="{{route('welcome')}}">Voltar</a>
</div>

@endsection