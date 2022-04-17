<!-- Menghubungkan dengan view template master -->
@extends('master')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

<article>
                    <div class="isi">
                        <div class="judul">
                            LEMBAH HARAU
                        </div>
                        <img src={{ asset('image/lembah-harau.jpg') }} width="300" height="200">
                        <p>Lembah Harau merupakan wahana wisata alam berupa dataran luas yang dikelilingi bentangan tebing batuan alam. Keindahan panorama Lembah Harau terbentuk oleh tebing terjal di bukit-bukit yang mengelilinginya, seolah seperti dinding raksasa yang mengepung lembah di bawahnya. Dinding mahakarya Sang Pencipta Semesta ini menjulang setinggi kurang lebih 200-400 meter, menciptakan pola bayangan yang menarik untuk disaksikan pada pagi dan sore hari.</p>
                        <p>Menurut Pak Mawardi, salah satu guide lokal, kawasan Harau memiliki sejumlah air terjun alam. Ada 6 air terjun diantaranya yang termasuk kawasan objek wisata yang dikelola pemerintah setempat. Salah satunya adalah Air Terjun Sarasah Jambu, yang posisinya berada paling dekat dengan gerbang masuk dari arah Payakumbuh.Selain itu, ada juga Air Terjun Akar Berayun yang posisinya paling dekat dengan area parkir pengunjung. Air terjun yang menjulang setinggi 200 meter akan terlihat membiaskan warna pelangi yang indah saat musim kemarau.</p>
                        <p>Selain menikmati panorama alam, aktivitas lain yang diminati pengunjung Harau adalah trekking melewati jalan setapak menanjak di sisi tebing. Melewati jalur ini hingga ke puncak kurang lebih memerlukan waktu sekitar 1 hingga 1,5 jam perjalanan. Jalur trekking ini masih berhubungan dengan kawasan Kelok 9, yaitu jalan raya penghubung Provinsi Sumatera Barat dan Riau dengan panorama sekelilingnya yang indah.Biasanya aktivitas trekking ini lebih diminati oleh wisatawan mancanegara. Aktivitas trekking merupakan bagian dari paket wisata yang ditawarkan di beberapa penginapan di sekitar Harau.</p>
                        <p>Rute yang paling umum untuk menjangkau Harau adalah melalui rute Padang-Payakumbuh. Setelah membelah Kota Payakumbuh, kita melewati perbatasan gerbang masuk Kabupaten Lima Puluh Kota. Dari pintu gerbang hingga area parkir berjarak sekitar 3,5 km.</p>
                    </div>
                    <h5>LOKASI LEMBAH HARAU </h5>
                    <h1><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127673.9220573211!2d100.61898941305519!3d-0.11655941290937899!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e2ab31922ab0fdf%3A0x581641322ca49a0e!2sHarau%20Getaway!5e0!3m2!1sen!2sid!4v1649782971227!5m2!1sen!2sid" width="770" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></h1>
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