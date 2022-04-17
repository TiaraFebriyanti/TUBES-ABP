<!-- Menghubungkan dengan view template master -->
@extends('master')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')


<article>
    <div class="isi">
        <div class="judul">
            JAM GADANG
                </div>
                    <img src={{ asset('image/jamgadang.jpg') }} width="300" height="200">
                    <p>Jam Gadang adalah nama untuk menara jam yang terletak di pusat kota Bukittinggi, Sumatera Barat, Indonesia. Menara jam ini memiliki jam dengan ukuran besar di empat sisinya sehingga dinamakan Jam Gadang, sebutan bahasa Minangkabau yang berarti "jam besar".</p>
                    <p>Selain sebagai pusat penanda kota Bukittinggi, Jam Gadang juga telah dijadikan sebagai objek wisata dengan diperluasnya taman di sekitar menara jam ini. Taman tersebut menjadi ruang interaksi masyarakat baik di hari kerja maupun di hari libur. Acara-acara yang sifatnya umum biasanya diselenggarakan di sekitar taman dekat menara jam ini.</p>
                    <p>Jam Gadang memiliki denah dasar seluas 13 x 4 meter. Bagian dalam menara jam setinggi 26 meter ini terdiri dari beberapa tingkat, dengan tingkat teratas merupakan tempat penyimpanan bandul. Bandul tersebut sempat patah hingga harus diganti akibat gempapada tahun 2007.</p>
                    <p>Terdapat 4 jam dengan diameter masing-masing 80 cm pada Jam Gadang. Jam tersebut didatangkan langsung dari Rotterdam,Belanda melalui pelabuhan Teluk Bayur dan digerakkan secara mekanik oleh mesin yang hanya dibuat 2 unit di dunia, yaitu Jam Gadang itu sendiri dan Big Ben di London, Inggris. Mesin jam dan permukaan jam terletak pada satu tingkat di bawah tingkat paling atas. Pada bagian lonceng tertera pabrik pembuat jam yaitu Vortmann Relinghausen. Vortman adalah nama belakang pembuat jam, Benhard Vortmann, sedangkan Recklinghausen adalah nama kota di Jerman yang merupakan tempat diproduksinya mesin jam pada tahun 1892.</p>
                    <p>Sejak didirikan, menara jam ini telah mengalami tiga kali perubahan pada bentuk atapnya. Awal didirikan pada masa pemerintahan Hindia Belanda, atap pada Jam Gadang berbentuk bulat dengan patung ayam jantan menghadap ke arah timur di atasnya. Kemudian pada masa pendudukan Jepang diubah menjadi bentuk pagoda. Terakhir setelah Indonesia merdeka, atap pada Jam Gadang diubah menjadi bentuk gonjong atau atap pada rumah adat Minangkabau, Rumah Gadang.

                        Renovasi terakhir yang dilakukan pada Jam Gadang adalah pada tahun 2010 oleh Badan Pelestarian Pusaka Indonesia (BPPI) dengan dukungan pemerintah kota Bukittinggi dan Kedutaan Besar Belanda di Jakarta. Renovasi tersebut diresmikan tepat pada ulang tahun kota Bukittinggi yang ke-262 pada tanggal 22 Desember 2010.</p>
                    </div>
                    <h5>LOKASI JAM GADANG BUKITTINGGI</h5>
                    <h1><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.761731803436!2d100.36733146443052!3d-0.30515874977735297!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd538bce0251993%3A0x671c755cea2a2d4!2sJam%20Gadang%2C%20Benteng%20Pasar%20Atas%2C%20Guguk%20Panjang%2C%20Bukittinggi%20City%2C%20West%20Sumatra%2026136!5e0!3m2!1sen!2sid!4v1649777856824!5m2!1sen!2sid" width="770" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></h1>
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