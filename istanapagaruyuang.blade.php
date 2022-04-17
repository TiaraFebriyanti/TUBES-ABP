<!-- Menghubungkan dengan view template master -->
@extends('master')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

<article>
                    <div class="isi">
                        <div class="judul">
                            ISTANA PAGARUYUANG
                        </div>
                        <img src={{ asset('image/istana-pagaruyuang.jpg') }} width="300" height="200">
                        <p>Salah satu peninggalan sejarah yang masih tersisa dari eksistensi kekuasaan Kerajaan Pagaruyung adalah sebuah istana megah yang terletak di nagari Pagaruyung, Kecamatan Tanah Tanjung Emas, Batusangkar, Kabupaten Tanah Datar. Istana ini bernama resmi Istano Basa Pagaruyung yang berarti istana besar Kerajaan Pagaruyung.</p>
                        <p>stano Basa Pagaruyung dahulu merupakan kediaman dari Raja Alam, sekaligus pusat pemerintahan dari sistem konfederasi yang dipimpin oleh triumvirat (tiga pemimpin) berjuluk ‘Rajo Tigo Selo’. Sistem kepemimpinan ini menempatkan Raja Alam sebagai pemimpin kerajaan dengan dibantu dua wakilnya, yaitu Raja Adat yang berkedudukan di Buo serta Raja Ibadat yang berkedudukan di Sumpur Kudus. Kedua wakil ini memutuskan berbagai perkara yang berkaitan dengan permasalahan adat serta agama. Tetapi, jika suatu permasalahan tidak terselesaikan maka barulah Raja Pagaruyung (Raja Alam) turun tangan menyelesaikannya.</p>
                        <p>Istana ini memang merupakan replika dari bangunan asli yang dibakar Belanda pada tahun 1804. Bangunannya berbentuk sebuah rumah panggung berukuran besar dengan atap gonjong yang menjadi ciri khas dari arsitektur tradisional Minangkabau. Rumah panggung besar ini bertingkat tiga, dengan 72 tonggak yang menjadi penyangga utamanya. Terdapat 11 gonjong atau pucuk atap yang menghias bagian atas dari bangunan ini. Seluruh dinding bangunan ini dihiasi oleh ornamen ukiran berwarna-warni yang secara total terdiri dari 58 jenis motif yang berbeda.</p>
                        <p>Sebagai sebuah istana kerajaan, masing-masing tingkat dalam bangunan ini memiliki fungsi yang berbeda-beda. Tingkat paling bawah merupakan tempat aktivitas utama pemerintahan berupa sebuah ruang besar yang melebar dengan area khusus sebagai singgasana raja di bagian tengahnya. Di sisi kiri dan kanan ruangan terdapat sebuah ruangan kamar. Di bagian belakang singgasana terdapat tujuh buah kamar sebagai tempat bagi para putri raja yang telah menikah.</p>
                        <p>Bangunan asli dari istana ini awalnya berlokasi di Bukit Batu Patah. Setelah insiden tahun 1804 istana ini didirikan kembali, tetapi terbakar habis pada tahun 1966. Pada 27 Desember 1976 upaya rekonstruksi ulang kembali dilakukan dengan ditandai peletakan tunggak tuo (tiang utama) oleh Gubernur Sumatera Barat saat itu, Harun Zain. Istana ini dibangun kembali di lokasinya yang baru di sisi selatan bangunan asli, yaitu di lokasinya saat ini.</p>
                    
                    <h5>LOKASI ISTANA PAGARUYUANG </h5>
                    <h1><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.6833421360498!2d100.61921621473097!3d-0.47129639965614156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e2ad2d2be29c7dd%3A0xb19e3eb230efffbc!2sIstano%20Basa%20Pagaruyung!5e0!3m2!1sen!2sid!4v1649782406363!5m2!1sen!2sid" width="770" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></h1>
            
                        </div>
                
</article>
                 

<style>
        
        article {
            width: 98.8%;
            height: auto;
            border-radius: 3px;
            margin: 5px 5px 5px 5px;
            border: 1px solid gainsboro;
            clear: both;
        }
        
        article p {
            padding: 5px 6px 5px 5px;
            line-height: 1.5;  
        }
        article .konten {
            width: 23.5%;
            height: auto;
            margin: 5px 5px 5px 5px;
            border-radius: 3px;
            border: 1px solid gainsboro;
            float: left;
        }
        
        article .isi {
            width: 98.5%;
            height: auto;
            margin: 5px 5px 5px 5px;
            border-radius: 3px;
            border: 1px solid gainsboro;
            float: left;
        }
        article .isi .judul {
            font-size: xx-large;
            margin-bottom: 10px;
            margin-left: 10px;
            margin-top: 10px;
        }
        article .isi p {
            margin-top: 0;
        }
        article .isi img {
            float: left;
            margin: 5px 5px 5px 5px;
        }
        
        article .konten img {
            width: 95.8%;
            height: 150px;
            margin: 5px 5px 5px 5px;
        
        }
        article .konten:hover {
            opacity:0.9;
        
        }
        article .konten .judul a {
            margin-left: 5px;
            text-decoration: none;
            font-size:x-large;
            color:#020101;
        }
        
        article .konten a:hover {
            opacity:0.9;
        }
        
           article .konten {
            float: left;
            width: 48%;
           }
        
           article .konten img {
            height: auto;
           }
        
         
    
    </style>
           





@endsection