<!-- Menghubungkan dengan view template master -->
@extends('master')

<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

  <p>Kontak Kami</p>
  
  <table border="1" cellpadding="3" cellspacing="0">
    <tr>
      <td>Email</td>
      <td>:</td>
      <td>kelompoktujuh@gmail.com</td>
    </tr>
    <tr>
      <td>Facebook</td>
      <td>:</td>
      <td>facebook/Kelompoktujuh</td>
    </tr>
    <tr>
      <td>Twitter</td>
      <td>:</td>
      <td>twitter/@kelompoktujuh</td>
    </tr>
    <tr>
      <td>Hp</td>
      <td>:</td>
      <td>081-234-567-89</td>
    </tr>
  </table>

@endsection