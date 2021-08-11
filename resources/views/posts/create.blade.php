@extends('layout')

@section('content')

<form action="{{route('store-posts')}}" method="POST">
    @csrf
    <h1>Creating a post</h1>
    <div class="form-group">
        <label for="exampleInputPassword1">title</label>
        <input type='text' class="form-control {{$errors->has('title') ? 'is-invalid' : ''}}" id="exampleInputPassword1"
            placeholder="your title here" name="title" value="{{old('title')}}" autofocus>
        @if($errors->has('title'))
        <small class="text-danger">{{$errors->first('title')}}</small>
        @endif
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">slug</label>
        <input type="text" class="form-control {{$errors->has('slug') ? 'is-invalid' : ''}}" id="exampleInputEmail1"
            aria-describedby="emailHelp" placeholder="your slug here" name="slug" value="{{old('slug')}}">
        @if($errors->has('slug'))
        <small class="text-danger">{{$errors->first('slug')}}</small>
        @endif
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">body</label>
        <textarea class="form-control {{$errors->has('body') ? 'is-invalid' : ''}}" id="exampleInputPassword1"
            placeholder="your body text" name="body">{{old('body')}}</textarea>
    </div>
    @if($errors->has('body'))
    <small class="text-danger">{{$errors->first('body')}}</small>
    @endif
    <div class="form-group">
        <label for="">user</label>
        <select name="user_id" class="form-select @error('user_id') is-invalid @enderror"
            aria-label="Default select example">
            <option value="" @if(old('user_id')==null) selected @endif>Select the user</option>
            {{-- colocar o value vazio para este caso --}}
            @foreach ($users as $user)
            <option value="{{$user->id}}" @if($user->id == old('user_id')) selected @endif
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

    @if($errors->has('tag_id'))
    <small class="text-danger">{{$errors->first('tag_id')}}</small>
    @endif
    </br>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<div>
    <a href="{{route('welcome')}}">Voltar</a>
</div>

@endsection