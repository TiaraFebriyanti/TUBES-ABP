<!-- Menghubungkan dengan view template master -->
@extends('master')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

    
<h4>Selamat Datang <b>{{Auth::user()->name}}</b>, Anda Login sebagai <b>{{Auth::user()->role}}</b>.</h4>
</br>
</br>
</br>

<hgroup>
<img src={{ asset('image/user.png') }} width="100" height="100">
<a href="tampiluser">User</a>

</hgroup>
@endsection