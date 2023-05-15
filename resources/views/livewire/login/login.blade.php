<div style="display: grid; place-content: center; margin-top: 150px">
    <div class="card text-dark" style="width: 500px">
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif

        @if (session()->has('errorMsg'))
            <div class="alert alert-danger">
                {{ session('errorMsg') }}
            </div>
        @endif
        <div class="card-header">

            <h2>Login</h2>
        </div>
        <form wire:submit.prevent='login'>
            <div class="card-body">


                <div class="mb-1">

                    <label for="email" style="transform: translateY(27px); margin-left: 81px;"><b>Email</b></label>
                    <div class="d-flex">

                        <label for="email" class="p-3 bg-secondary text-center rounded" style="width: 75px"> <i class="fa fa-envelope"></i> </label>
                        <input type="email" name="" id="email" class="form-control pt-4" wire:model='email'>

                    </div>

                    @error('email')
                    <span class="text-danger text-lg">{{$message}}</span>
                    @enderror

                </div>

                <div class="mb-1">

                    <label for="password" style="transform: translateY(27px); margin-left: 81px;"><b>Password</b></label>
                    <div class="d-flex">

                        <label for="password" class="p-3 bg-warning text-center rounded" style="width: 75px"> <i class="fa fa-key"></i> </label>
                        <input type="password" name="" id="password" class="form-control pt-4" wire:model='password'>

                    </div>

                    @error('password')
                    <span class="text-danger text-lg">{{$message}}</span>
                    @enderror

                </div>




                <div class="mb-3 mt-3 d-flex">
                    <a href="/register" class=""><button class="btn btn-secondary" type="button">Don't have an account?</button></a>
                    <button class="btn btn-primary" style="margin-left: 163px" type="submit"><i class="fa-solid fa-right-to-bracket"></i> Login</button>
                </div>

            </div>
        </form>
    </div>
</div>
