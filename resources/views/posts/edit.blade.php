@extends('layout')

@section('content')

<form action="{{route('update-posts', ['id' => $post->id ] )}}" method="POST">
    @csrf
    <h1>Updating a post</h1>
    <div class="form-group">
        <label for="exampleInputPassword1">title</label>
        <input type='text' class="form-control" id="exampleInputPassword1" placeholder="your title here" name="title"
            value={{$post->title}}>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">slug</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
            placeholder="your slug here" name="slug" value={{$post->slug}}>

    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">body</label>
        <textarea class="form-control" id="exampleInputPassword1" placeholder="your body text"
            name="body">{{$post->body}}</textarea>
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<div>
    <a href="{{route('welcome')}}">Voltar</a>
</div>

@endsection