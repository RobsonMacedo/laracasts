@extends('layouts.app')

@section('content')


<div class="container">
    <h1>My tag list</h1>
    @foreach ($all as $tag)
    <a href="{{route('show-tag', ['id' => $tag->id])}}">
        <h1>{{$tag->name}}</h1>
    </a>
    @endforeach


</div>
<div>
    <a href="{{route('welcome')}}">Voltar</a>
</div>
@endsection