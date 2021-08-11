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
    <div class="form-group">
        <label for="">user</label>
        <select name="user_id" class="form-select @error('user_id') is-invalid @enderror"
            aria-label="Default select example">

            @if(isset($post->user->name))
            <option value="{{$post->user->name}}" @if($post->user->name == old('user_id')) selected @endif
                name="user_id"> {{$post->user->name}} </option>

            @else
            <option value="" @if(!old('tag_id')) selected @endif> Select your tags </option>
            @endif
            @foreach ($users as $user)
            <option value="{{$user->name}}" @if($user->name == old('user_id')) selected @endif
                name="user_id">{{$user->name}} </option>
            @endforeach

        </select>

    </div>
    @if($errors->has('user_id'))
    <small class="text-danger">{{$errors->first('user_id')}}</small>
    @endif

    <div class="form-group">
        <label for="">select your tags</label>
        <select name="tag_id[]" class="form-select @error('tag_id') is-invalid @enderror" multiple
            aria-label="multiple select example">
            <option value="" @if(!old('tag_id')) selected @endif> Select your tags </option>
            @foreach ($tags as $tag)
            <option value="{{$tag->id}}" @if (old('tag_id') && in_array($tag->id, old('tag_id'))) selected
                @endif>{{$tag->name}}</option>
            @endforeach
        </select>
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<div>
    <a href="{{route('welcome')}}">Voltar</a>
</div>

@endsection