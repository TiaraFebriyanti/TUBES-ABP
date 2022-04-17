<!-- Menghubungkan dengan view template master -->
@extends('master')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

<article>
                    <div class="isi">
                        <div class="judul">
                            MESJID RAYA PADANG
                        </div>
                        <img src={{ asset('image/masjid-raya.jpg') }} width="300" height="200">
                        <p>Masjid Raya Sumatera Barat atau juga dikenal sebagai Masjid Mahligai Minang adalah salah satu masjid terbesar di Indonesia yang terletak di Kecamatan Padang Utara, Kota Padang, Provinsi Sumatera Barat. Masjid yang pembangunannya masih dalam tahap pengerjaan ini merupakan masjid terbesar di Sumatera Barat.Pembangunan masjid ini dimulai dengan peletakan batu pertama pada 21 Desember 2007 oleh Gubernur Sumatera Barat saat itu, Gamawan Fauzi. Pengerjaannya dilakukan dalam beberapa tahap yang terkendala karena hanya mengandalkan dana APBD Sumatera Barat.</p>
                        <p>Peletakan batu pertama sebagai tanda dimulainya pembangunan masjid ini dilakukan pada 21 Desember 2007 oleh Gubernur Gamawan Fauzi. Menurut rencana masjid ini akan memiliki tiga lantai yang diperkirakan dapat menampung sekitar 20.000 jamaah, yakni sekitar 15.000 jamaah di lantai dasar dan selebihnya di lantai dua dan tiga. Masjid ini dibangun di lahan seluas sekitar 40.000 meter persegi dengan luas bangunan utama kurang dari setengah luas lahan tersebut, yakni sekitar 18.000 meter persegi, sehingga menyisakan halaman yang luas. Di halaman tersebut akan dibuat pelataran, tempat parkir, taman, dan tempat evakuasi bila terjadi tsunami (shelter )</p>
                        <p>Desain Masjid Raya Sumatra Barat di Padang menjadi pemenang Abdullatif Al-Fozan Award, ajang penghargaan yang menampilkan karya dan desain masjid dari negara-negara berpenduduk Muslim dunia. Penerima penghargaan tersebut, Rizal Muslimin yang menjadi perancang desain Masjid Raya Sumatera Barat. Rizal berasal dari kantor arsitektur kenamaan asal Bandung, Urbane Indonesia (UI). </p>
                    </div>
                    <h5>LOKASI MESJID RAYA </h5>
                    <h1><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.2991481195872!2d100.36027941473124!3d-0.9243181993257189!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4b8d98d2319f3%3A0xebfa8823349070d3!2sGrand%20Mosque%20of%20West%20Sumatra!5e0!3m2!1sen!2sid!4v1649783455917!5m2!1sen!2sid" width="770" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></h1>
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