<div class='mb-4 me-3 ms-3 mt-2'>
    <div class="text-center">
        <h5> Comentários</h5>
    </div class="text-center mb-3">
    <hr>

    @if (isset($comments))
    @forelse ($comments as $comment)
    <div class="blog-post text-center">
        <p>{{$comment->text}}</p>
        <p class="blog-post-meta"><a href="">{{$comment->user->name}}</a> </p>
        <hr>
    </div>
    @empty
    <div class="text-center mb-3">
        Este post ainda não possui comentários!
    </div>
    @endforelse
    @endif



    <textarea class="form-control" wire:model="comment" name="comment[]" id="comment" cols="30" rows="10"
        placeholder="Deixe seu comentário"></textarea>
    <button wire:click="sendComment" class="btn btn-primary mt-2">Enviar</button>


</div>