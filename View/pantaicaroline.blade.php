<!-- Menghubungkan dengan view template master -->
@extends('master')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

<article>
                    <div class="isi">
                        <div class="judul">
                            PANTAI CAROLINE PADANG
                        </div>
                        <img src={{ asset('image/pantai-caroline.jpg') }} width="300" height="200">
                       <p>Pantai Caroline memiliki kharisma tersendiri. Pasir putih di tepi pantai Padang ini semakin lengkap dengan pepohonan hijau yang berbaris dipinggirannya. Mayoritas pepohonan tersebut adalah pohon kelapa yang landai. Jika Anda berkunjung pada saat cuaca cerah, riak ombak akan memanggil-manggil jiwa petualangan Anda untuk merasakan riuhnya air laut. Pantai di Sumatera Barat ini juga merupakan surga bagi Anda yang gemar surving. Ombaknya sangat menantang untuk ditaklukkan. Tidak hanya itu saja, memancing atau sekedar bermain sepak bola bersama teman-teman Anda juga akan menjadi aktivitas menyenangkan, yang dapat Anda lakukan di Pantai Caroline.</p>
                       <p>Pantai Caroline terletak di sebelah Selatan Kota Padang, Provinsi Sumatera Barat. Tepatnya berlokasi di Teluk Bungus, berbatasan langsung dengan Kabupaten Pesisir Selatan, sekitar 25 Km dari Kota Padang. Dari sekian banyak pantai yang terhampar di sepanjang Pantai Padang, Pantai Caroline masuk dalam kategori pantai dengan potensi laut yang masih terjaga dan layak menjadi lokasi tujuan wisata.</p>
                       <p>Perjalanan menuju Pantai Caroline dapat Anda tempuh menggunakan mobil pribadi, taxi, mobil rental, bus ataupun angkutan umum jurusan Bungus. Penyewaan Boat dan perahu nelayan juga tersedia, bagi Anda yang ingin mengunjungi Pulau-pulau indah yang terletak dihadapannya. Selama perjalanan, Anda akan disuguhkan pemandangan cantik Teluk Bayur, Pantai Bungus, dan pulau-pulau kecil yang terpajang luas saat Anda melintasi puncak mercusuar tua yang sudah ada sejak masa kolonial Belanda. Pernah dengar Pulau Sikuai? Nah, sesampainya di Pantai Caroline, Anda dapat mencapai pulau indah itu hanya dalam waktu 45 menit saja menggunakan perahu cepat atau speedboat.</p>
                       <p>Untuk masuk kawasan wisata Pantai Caroline hanya dibebankan biaya Rp.5000 per orang. Bagi pengunjung yang menggunakan mobil pribadi ataupun mobil rental, juga dikenakan biaya parkir Rp.5000. Penggunaan speedboat dari Pantai Caroline menuju Pulau Sikuai dipasok dengan tarif Rp.500.000 hingga Rp.600.000. Serta Rp.800.000 untuk ke Pulau Cibadak yang juga tidak jauh dari lokasi pantai Caroline. Disarankan agar Anda melakukan penawaran harga terlebih dahulu.</p>
                    </div>
                    <h5>LOKASI PANTAI CAROLINE </h5>
                    <h1><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15956.659015281744!2d100.39953552634978!3d-1.0370791378959203!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4bacc33ecdb41%3A0x8924aa7303f6290a!2sPantai%20Carolina!5e0!3m2!1sen!2sid!4v1649783960737!5m2!1sen!2sid" width="770" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></h1>
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