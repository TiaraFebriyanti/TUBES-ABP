@extends('master')

@section('konten')

<h3>Ubah Data User Sumbar Rancak</h3>
  @foreach($modelweb as $s)
    <form method="post" action="{{route('updateuser')}}">
      @csrf
      <input type="hidden" name="id_model" value="{{$s->id_model}}">
      <div class="form-group">
        <label>Nama User</label>
        <input type="text" name="nama_model" value="{{$s->nama_model}}" class="form-control" placeholder="Nama User" required="">
      </div>
      <div class="form-group">
        <label>Tempat Lahir</label>
        <input type="text" name="tempatlahir" value="{{$s->tempatlahir}}" class="form-control" placeholder="Tempat Lahir" required="">
      </div>
      <div class="form-group">
        <label>Tanggal Lahir</label>
        <input type="date" name="tanggallahir" value="{{$s->tanggallahir}}" class="form-control" placeholder="Tanggal Lahir" required="">
      </div>
      <div class="form-group">
        <label>Alamat</label>
        <textarea name="alamat" rows="3" class="form-control" placeholder="Alamat" required="">{{$s->alamat}}</textarea>
      </div>
      <div class="form-group">
        <label>No. Hp</label>
        <input type="text" name="no_hp" value="{{$s->no_hp}}" class="form-control" placeholder="No. Hp" required="">
      </div>
      <div class="form-group text-right">
        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Update Data</button>
      </div>
    </form>
  @endforeach
@endsection