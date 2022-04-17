@extends('master')

@section('konten')
<h3>Tampil Data User Sumbar Rancak</h3>
<a class="btn btn-success" href="{{route('tambahuser')}}"><i class="fa fa-plus"></i> Tambah User</a>
<br><br>

<table class="table table-bordered table-hover">
  <tr>
    <th>#ID</th>
    <th>Nama User</th>
    <th>Tempat Lahir</th>
    <th>Tanggal Lahir</th>
    <th>Alamat</th>
    <th>No. Hp</th>
    <th>Aksi</th>
  </tr>
  @foreach($modelweb as $s) 
  <tr>
    <td>{{$s->id_model}}</td>
    <td>{{$s->nama_model}}</td>
    <td>{{$s->tempatlahir}}</td>
    <td>{{$s->tanggallahir}}</td>
    <td>{{$s->alamat}}</td>
    <td>{{$s->no_hp}}</td>
    <td>
      <a href="ubahuser" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
      <a href="hapususer" onclick="return confirm('Apakah Anda Yakin Menghapus Data?');" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
    </td>
  </tr>
  @endforeach
</table>
@endsection