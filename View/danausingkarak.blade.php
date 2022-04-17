<!-- Menghubungkan dengan view template master -->
@extends('master')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

<article>
        <div class="isi">
            <div class="judul">
                DANAU SINGKARAK
            </div>
                <img src={{ asset('image/danau-singkarak.jpg') }} width="300" height="200">
                <p>Danau Singkarak adalah sebuah danau yang membentang di dua kabupaten yang terdapat di provinsi Sumatra Barat, Indonesia, yaitu kabupaten Solok dan kabupaten Tanah Datar.</p>
                <p>Danau ini memiliki luas 107,8 km kuadrat dan merupakan danau terluas kedua di pulau Sumatra setelah danau toba di Sumatra Utara. Danau ini merupakan hulu dari sungai atau Batang Ombilin. Namun sebagian air danau ini dialirkan melalui terowongan menembus Bukit Barisan ke Batang Anai untuk menggerakkan generator PLTA Singkarak[1] di dekat Lubuk Alung, kabupaten Padang Pariaman.</p>
                <p>Danau Singkarak merupakan salah satu hasil dari proses tektonik yang dipengaruhi oleh Sesar Sumatra. Danau ini adalah bagian dari Cekungan Singkarak-Solok yang termasuk di antara segmen dari Sesar Sumatra. Cekungan dari danau ini terbentuk dari sebuah amblesan yang disebabkan oleh aktivitas pergerakan Sesar Sumatra. Cekungan besar ini terbendung oleh material vulkanik dari letusan gunung api sekitarnya. Akibat pembendungan material vulkanik ini terbentuklah Danau singkarak di satu bagian Cekungan Singkarak-Solok. Berbeda dengan Danau Maninjau yang terbentuk akibat letusan gunung api, Danau Singkarak terbentuk utamanya karena proses tektonik.</p>
                    
            </div>

            <h5>LOKASI DANAU SINGKARAK </h5>
            <h1><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127666.78051516664!2d100.47077721321641!3d-0.6171237889331654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4d5e42603f255%3A0x6d533fe568da06d2!2sLake%20Singkarak!5e0!3m2!1sen!2sid!4v1649781825216!5m2!1sen!2sid" width="770" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></h1>
            
                
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


