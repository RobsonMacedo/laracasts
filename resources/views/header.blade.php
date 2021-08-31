<header class="p-3 bg-dark text-white">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="{{route('welcome')}}"
                class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cup"
                    viewBox="0 0 16 16">
                    <path
                        d="M1 2a1 1 0 0 1 1-1h11a1 1 0 0 1 1 1v1h.5A1.5 1.5 0 0 1 16 4.5v7a1.5 1.5 0 0 1-1.5 1.5h-.55a2.5 2.5 0 0 1-2.45 2h-8A2.5 2.5 0 0 1 1 12.5V2zm13 10h.5a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.5-.5H14v8zM13 2H2v10.5A1.5 1.5 0 0 0 3.5 14h8a1.5 1.5 0 0 0 1.5-1.5V2z">
                    </path>
                </svg>
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="{{route('welcome')}}" class="active nav-link px-2 text-white">Home</a></li>
                <li><a href="{{route('posts')}}" class="nav-link px-2 text-white">My Posts</a></li>
                <li><a href="{{route('tags')}}" class="nav-link px-2 text-white">My Tags</a></li>
                <li><a href="{{route('create-posts')}}" class="nav-link px-2 text-white">Create a post</a></li>
                <li><a href="{{route('create-tag')}}" class="nav-link px-2 text-white">Create a tag</a></li>
                <li><a href="{{route('contact')}}" class="nav-link px-2 text-white">Contact us</a></li>
            </ul>
        
            
            @if(Route::is("posts") || Route::is("tags"))
            <livewire:search-field/>
            @endif
            
            <div class="text-end">
                <button type="button" class="btn btn-outline-light me-2">Login</button>
                <button type="button" class="btn btn-warning">Sign-up</button>
            </div>
        </div>
    </div>
</header>