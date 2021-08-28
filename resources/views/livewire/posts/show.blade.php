@extends('layouts.app')

@section('content')


<div class="card mb-3 col-10 align-middle rounded-3 shadow-sm mt-2">
    @if(isset($post))
    <div class="card-header py-3">
        <h4 class="my-0 fw-normal text-center">{{$post->title}}</h4>
    </div>
    <div class="card-body text-center">
        <small class="text-muted fw-light ">{{$post->slug}}</small>

        <ul class="list-unstyled mt-3 mb-4 text-center">
            <li>{{$post->body}}</li>

        </ul>
        <div class="row">


            <div class="col">
                <p>Tags
                    @foreach ($post->tags as $tag)
                    <button type="button" class="btn btn-light">{{$tag->name ?? 'No tags until now!'}}</button>
                    @endforeach
                </p>
            </div>
            <div class="col align-middle">
                <p class="align-end">Posted by - {{$post->user->name?? ''}}</p>
            </div>
        </div>


        <div class="row">
            <div class="col"><button type="button" wire:click="update"
                    class="w-100 btn btn-lg btn-outline-primary">Alterar</button>
            </div>


            <livewire:posts.delete :post="$post" /> {{-- Passing variable into component --}}

        </div>
    </div>
    @endif

</div>
<livewire:back-button />


@endsection