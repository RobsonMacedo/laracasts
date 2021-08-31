<div>
    
<div class="row mb-2 mt-3">
    <h1>My tag list</h1>@foreach ($all as $tag)
    <div class="col-md-3">


        <div class="card mb-3" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><a href="{{route('show-tag', ['id' => $tag->id])}}"
                        role="button">{{$tag->name}}</a></h5>

                <p class="card-text">{{$tag->description}}</p>


            </div>
        </div>



    </div>@endforeach
</div>
</div>



<livewire:back-button />
</div>
