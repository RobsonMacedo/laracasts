{{$post->comments}}
{{$post->id}}
<form onsubmit="return false" method="post">
    @csrf
    <textarea class="form-control @error('text') is-invalid @enderror" placeholder="Leave a comment here"
        id="floatingTextarea2" name="comment" style="height: 100px"></textarea>

    @error('text')
    <small class="text-danger"> {{ $message }} </small>
    @enderror


    <div>
        <button onclick="saveComment('{{route('comments-store', ['id' => $post->id])}}')" class="btn btn-primary"
            type="submit">Save</button>
    </div>
</form>