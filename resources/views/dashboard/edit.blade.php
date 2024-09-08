@extends('partials.navbar')

@section('container')

<div class="registration-box" style="margin:auto; padding:auto; width: 400px;">
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <h1>Edit Profil</h1>
        </div>
        <div class="card-body text-center">
            <form method="post" enctype="multipart/form-data" action="{{ route('profile.update', ['id' => $user->id]) }}">
                @csrf
                @method('POST') <!-- Tambahkan metode PUT untuk pembaruan -->
                <div class="mb-3">
                    <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
                    <label for="image" class="form-label">Self Image</label>
                    @if($user->image)
                    <img src="{{asset('storage/' . $user->image)}}" class="img-preview img-fluid mb-3 col-sm-5 d-block" />
                    @else
                    <img class="img-preview img-fluid mb-3 col-sm-5" />
                    @endif
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Name" id="name" name="name" required value="{{ old('name', $user->name) }}">
                </div>
                <div class="input-group mb-3">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" id="email" name="email" required value="{{ old('email', $user->email) }}">
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control @error('no_hp') is-invalid @enderror" placeholder="Nomor Telp" id="no_hp" name="no_hp" required value="{{ old('no_hp', $user->no_hp) }}">
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
                <button class="btn btn-primary"><a href="/dashboard" style="color: white;">Back</a></button>
            </form>
            <small>Already Registered? <a href="/login">Login Now</a></small>
        </div>
    </div>
</div>

@endsection

<script>
    function previewImage() {

        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>