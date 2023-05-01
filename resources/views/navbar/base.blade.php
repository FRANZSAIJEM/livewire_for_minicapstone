<header class="d-flex">

    <h1 class="p-3">Music Bar</h1>

    @auth

    <div class="d-inline-flex ms-auto mt-3" style="margin-right: 20px">
        <div class="dropdown">
            <a class="d-block" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                @if(auth()->check())
                    <img class="rounded-circle" width="75" height="75" src="{{ asset('uploads/image_uploads/' . auth()->user()->image) }}" alt="">

                @endif
            </a>

            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink">
                <li>

                    
                    @if(auth()->check())
                    <h3 class="p-3">{{auth()->user()->name}}</h3>

                    @endif




                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="dropdown-item">Logout</button>
                    </form>





                </li>
            </ul>
        </div>
    </div>

    @endauth

    @guest

        <div class="buttons d-inline-flex ms-auto mt-3">
            <a class="btn me-5 mb-5 fs-5 text-white" href="/login" role="button">Login</a>
            <a class="btn me-5 mb-5 fs-5 text-white" href="/register" role="button">Register</a>
        </div>
    @endguest
</header>



<style>

    .page{
        cursor: pointer;
        transition: 0.5s;
        padding: 10px;
    }
    .page:hover{
        background-color: white;
        box-shadow: 0px 10px 0px 0px rgb(118, 118, 118);
        color: black;
        transform: translateY(-10px);
    }
</style>
