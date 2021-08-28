@extends('layouts.app')

@section('content')


<div class="row">
    <div class="col-12">
        <form action="{{route('store-tag')}}" method="POST">
            @csrf
            <h1>Crie sua tag</h1>

            <div class="form-group ">
                <label class="mb-2" for="name">Nome</label>
                <input type='text' class="form-control @error('name') is-invalid @enderror" id="name"
                    placeholder="nome da tag" name="name" value="{{old('name')}}" autofocus>
                @if($errors->has('name'))
                <small class="text-danger">{{$errors->first('name')}}</small>
                @endif
            </div>
            <div class="form-group mt-2">
                <label class="mb-2" for="name">Descrição</label>
                <textarea class="form-control {{$errors->has('description') ? 'is-invalid' : ''}}"
                    id="exampleInputPassword1" placeholder="descição da tag" name="description"
                    maxlength="50">{{old('description')}}</textarea>

                @if($errors->has('description'))
                <small class="text-danger">{{$errors->first('description')}}</small>
                @endif
            </div>

            </br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
<livewire:back-button />

@endsection