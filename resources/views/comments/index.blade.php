<div class="container">
    <form action="{{route('comments-store', ['id'=> $post->id])}}" method="post"></form>
    <div class="form-floating">
        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
            style="height: 100px"></textarea>
        <label for="floatingTextarea2">Comments</label>
        <button class="btn btn-primary" type="submit">Save</button>

    </div>
</div>