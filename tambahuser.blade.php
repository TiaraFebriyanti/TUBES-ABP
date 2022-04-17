@extends('master')

@section('konten')

<h3>Form Input User</h3>
<form method="post" action="{{route('simpanuser')}}">
  @csrf
  
  <div class="form-group">
    <label>Nama User</label>
    <input type="text" name="nama_model" class="form-control" placeholder="Nama User" required="">
  </div>
  <div class="form-group">
    <label>Tempat Lahir</label>
    <input type="text" name="tempatlahir" class="form-control" placeholder="Tempat Lahir" required="">
  </div>
  <div class="form-group">
    <label>Tanggal Lahir</label>
    <input type="date" name="tanggallahir" class="form-control" placeholder="Tanggal Lahir" required="">
  </div>
  <div class="form-group">
    <label>Alamat</label>
    <textarea name="alamat" rows="3" class="form-control" placeholder="Alamat" required=""></textarea>
  </div>
  <div class="form-group">
    <label>No. Hp</label>
    <input type="text" name="no_hp" class="form-control" placeholder="No. Hp" required="">
  </div>
</br>
</br>
  <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Username') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

</br>


                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        </br>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        </br>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        </br>

  <div class="form-group text-right">
    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan Data</button>
  </div>
</form>
@endsection