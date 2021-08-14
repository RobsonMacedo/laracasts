@extends('layouts.app')

@section('content')

<form action="{{route('store-tag')}}" method="POST">
    @csrf
    <h1>Creating a tag</h1>
    <div class="form-group">
        <label for="name">tag name</label>
        <input type='text' class="form-control @error('name') is-invalid @enderror" id="name"
            placeholder="your tag here" name="name" value="{{old('name')}}" autofocus>
        @if($errors->has('name'))
        <small class="text-danger">{{$errors->first('name')}}</small>
        @endif
    </div>

    </br>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<div>
    <a href="{{route('welcome')}}">Voltar</a>
</div>

@endsection