<div style="display: grid; place-content: center;" class="mt-5">
    <div class="card text-dark" style="width: 500px">
        <div class="card-header">
            <h2>Register</h2>
        </div>
        <form wire:submit.prevent='register'>
            <div class="card-body">

                {{-- <div class="image-upload position-relative shadow">
                    <input type="file" class="form-control position-absolute top-0 start-0 opacity-0" wire:model="image" id="image" name="image">
                    <label for="image" class="upload-label d-flex align-items-center justify-content-center">
                      <img src="{{ $image ? $image->temporaryUrl() : '/placeholder.png' }}" alt="Profile Image" class="preview-image rounded-circle bg-dark">
                      <span class="upload-icon"><i class="fa fa-camera"></i></span>
                    </label>

                  </div> --}}

                  <br>
                  @error('image')
                    <span class="text-danger text-lg">{{$message}}</span>
                    @enderror

                <div class="mb-1">


                    <label for="name" style="transform: translateY(27px); margin-left: 81px;"><b>Name</b></label>
                    <div class="d-flex">

                        <label for="name" class="p-3 bg-info text-center rounded" style="width: 75px"> <i class="fa-solid fa-file-signature"></i> </label>
                        <input type="text" name="" id="name" class="form-control pt-4" wire:model='name'>

                    </div>

                    @error('name')
                    <span class="text-danger text-lg">{{$message}}</span>
                    @enderror

                </div>

                <div class="mb-1">


                    <label for="username" style="transform: translateY(27px); margin-left: 81px;"><b>User Name</b></label>
                    <div class="d-flex">

                        <label for="username" class="p-3 bg-primary text-center rounded" style="width: 75px"> <i class="fa fa-user"></i> </label>
                        <input type="text" name="" id="username" class="form-control pt-4" wire:model='username'>

                    </div>

                    @error('username')
                    <span class="text-danger text-lg">{{$message}}</span>
                    @enderror

                </div>


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


                {{-- <div class="mb-1">

                    <label for="Location" style="transform: translateY(27px); margin-left: 81px;"><b>Location</b></label>
                    <div class="d-flex">

                        <label for="Location" class="p-3 bg-success text-center rounded" style="width: 75px"> <i class="fa-solid fa-location-dot"></i></label>
                        <input type="Location" name="" id="Location" class="form-control pt-4" wire:model='location'>

                    </div>

                    @error('Location')
                    <span class="text-danger text-lg">{{$message}}</span>
                    @enderror

                </div> --}}






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

                @if(!empty($password))
                <div class="mb-1">
                    <label for="confirmPassword" style="transform: translateY(27px); margin-left: 81px;"><b>Confirm Password</b></label>
                    <div class="d-flex">
                        <label for="confirmPassword" class="p-3 bg-danger text-center rounded" style="width: 75px"> <i class="fa-solid fa-unlock-keyhole"></i> </label>
                        <input type="password" name="password_confirmation" id="confirmPassword" class="form-control pt-4" wire:model='password_confirmation'>
                    </div>
                    @error('password_confirmation')
                        <span class="text-danger text-lg">{{$message}}</span>
                    @enderror
                </div>
                @endif
{{--
                <div class="mb-1 mt-4">


                    <div class="d-flex">

                        <textarea name="" id="description" class="form-control" placeholder="Description" wire:model='description'></textarea>

                    </div>

                    @error('description')
                    <span class="text-danger text-lg">{{$message}}</span>
                    @enderror

                </div> --}}


                <div class="mb-3 mt-3 d-flex w-100">
                    <a href="/login" class=""> <button type="button" class="btn btn-secondary">Already have an account?</button> </a>
                    <button class="btn btn-primary" style="margin-left: 123px" type="submit"> <i class="fa-solid fa-user"></i> Register</button>
                </div>

            </div>
        </form>
    </div>
</div>

<style>
    .image-upload {
  position: relative;
  display: inline-block;
  border-radius: 50%;
  overflow: hidden;
  width: 150px;
  height: 150px;
}

.upload-label {
  display: block;
  width: 100%;
  height: 100%;
  cursor: pointer;
}

.preview-image {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.upload-icon {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-size: 2rem;
  color: #fff;
  opacity: 0.8;
  transition: opacity 0.2s ease-in-out;
}

.upload-icon:hover {
  opacity: 1;
}

</style>
