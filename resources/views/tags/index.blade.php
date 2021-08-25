@extends('layouts.app')

@section('content')


<div class="row mb-2 mt-3">
    <h1>My tag list</h1>@foreach ($all as $tag)
    <div class="col-md-3">


        <div class="card mb-3" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><a href="{{route('show-tag', ['id' => $tag->id])}}"
                        role="button">{{$tag->name}}</a></h5>
                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's
                    content.</p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>

            </div>
        </div>



    </div>@endforeach
</div>
</div>



<div>
    <a href="{{route('welcome')}}">Voltar</a>
</div>
@endsection