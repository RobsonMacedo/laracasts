<div>
    <h1>Contact us</h1>
    <form wire:submit.prevent="save" method="POST">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">name</label>
            <input wire:model="name" type="text" class="form-control" id="name" aria-describedby="name"
                placeholder="your name" autofocus>
            @error('name')
            <small>{{$message}}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input wire:model="email" type="email" class="form-control" id="email" placeholder="your email">
            @error('email')
            <small>{{$message}}</small>
            @enderror
        </div>
        <div class="mb-3">
            <textarea class="form-control" wire:model="message" name="message" id="message" cols="100" rows="10"
                placeholder="your message">Message</textarea>
            @error('message')
            <small>{{$message}}</small>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>