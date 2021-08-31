<div>
    <form wire:submit.prevent="save" method="POST">
        @csrf


        <h1>Crie seu post</h1>

        <div>
            @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
            @endif
        </div>


        <div class="form-group ">
            <label class="mb-2" for="exampleInputPassword1 ">Título</label>
            <input wire:model="title" type='text' class="form-control {{$errors->has('title') ? 'is-invalid' : ''}}"
                id="exampleInputPassword1" placeholder="your title here" name="title" value="{{old('title')}}"
                autofocus>

            @error('title')
            <small class="text-danger">{{$message}}</small>
            @enderror

        </div>

        <div class="form-group mt-2">
            <label class="mb-2 for=" exampleInputEmail1">slug</label>
            <input wire:model="slug" type="text" class="form-control {{$errors->has('slug') ? 'is-invalid' : ''}}"
                id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="your slug here" name="slug"
                value="{{old('slug')}}">
            @error('slug')
            <small class="text-danger">{{$message}}</small>
            @enderror

        </div>
        <div class="form-group mt-2">
            <label class="mb-2 for=" exampleInputPassword1">body</label>
            <textarea wire:model="body" class="form-control {{$errors->has('body') ? 'is-invalid' : ''}}"
                id="exampleInputPassword1" placeholder="your body text" name="body">{{old('body')}}</textarea>
        </div>
        @error('body')
        <small class="text-danger">{{$message}}</small>
        @enderror

        <div class="form-group mt-2">
            <label class="mb-2">user</label>
            <select wire:model="user_id" name="user_id" class="form-select @error('user_id') is-invalid @enderror"
                aria-label="Default select example">
                <option value="" @if(old('user_id')==null) selected @endif>Select the user</option>
                {{-- colocar o value vazio para este caso --}}
                @foreach ($users as $user)
                <option value="{{$user->id}}" @if($user->id == old('user_id')) selected @endif
                    name="user_id">{{$user->name}} </option>
                @endforeach

            </select>

        </div>
        @error('user_id')
        <small class="text-danger">{{$message}}</small>
        @enderror


        <div class="form-group mt-2">
            <label class="mb-2">select your tags</label>
            <select wire:model="tag_id" name="tag_id[]" class="form-select @error('tag_id') is-invalid @enderror"
                multiple aria-label="multiple select example">
                @foreach ($tags as $tag)
                <option value="{{$tag->id}}" @if (old('tag_id') && in_array($tag->id, old('tag_id'))) selected
                    @endif>{{$tag->name}}</option>
                @endforeach
            </select>
        </div>
        @error('tag_id')
        <small class="text-danger">{{$message}}</small>
        @enderror

        </br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <livewire:back-button />

</div>