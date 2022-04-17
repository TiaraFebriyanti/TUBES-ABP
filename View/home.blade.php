<!-- Menghubungkan dengan view template master -->
@extends('master')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

<article>
<img src={{ asset('image/mesjid-raya.jpg') }}>
           <div class="konten">
            <a href="jamgadang"><img src={{ asset('image/jamgadang.jpg') }}></a>
            <div class="judul">
                <a href="jamgadang" >Jam Gadang</a>
            </div>
           <p align="justify">Jam Gadang adalah nama untuk menara jam yang terletak di pusat kota Bukittinggi, Sumatera Barat, Indonesia.Jam Gadang sebutan bahasa Minangkabau yang berarti "jam besar".</p>
           </div>
           <div class="konten">
            <a href="danausingkarak"><img src={{ asset('image/danau-singkarak.jpg') }} ></a>
            <div class="judul">
                <a href="danausingkarak">Danau Singkarak</a>
            </div>
        
           <p align="justify">Danau Singkarak merupakan salah satu hasil dari proses tektonik yang dipengaruhi oleh Sesar Sumatra. Danau ini memiliki luas 107,8 km kuadrat </p>
           </div>
           <div class="konten">
            <a href="istanapagaruyuang"><img src={{ asset('image/istana-pagaruyuang.jpg') }} ></a>
            <div class="judul">
                <a href="istanapagaruyuang">Istana Pagaruyuang</a>
            </div>
           <p align="justify">Istana Pagaruyung yang dapat dikunjungi di Kabupaten Tahan Datar saat ini merupakan replika dari istana aslinya yang hancur karena terbakar pada tahun 1976.</p>
           </div>
           
      </article>

    <div class="menukananatas">
        <h1>Paling Populer</h1>
        <img src={{ asset('image/masjid-raya.jpg') }} alt="MasjidRaya">
         <a href="masjidraya" >Masjid Raya</a>

         
        
    </div>

    
    

      <article>
        <div class="konten">
         <a href="masjidraya"><img src={{ asset('image/masjid-raya.jpg') }} ></a>
         <div class="judul">
             <a href="masjidraya">Masjid Raya</a>
         </div>
        <p align="justify">Masjid Raya Sumatera Barat atau juga dikenal sebagai Masjid Mahligai Minang adalah salah satu masjid terbesar di Indonesia yang terletak di Kecamatan Padang Utara, Kota Padang, Provinsi Sumatera Barat.</p>
        </div>
        <div class="konten">
         <a href="pantaicaroline"><img src={{ asset('image/pantai-caroline.jpg') }} ></a>
         <div class="judul">
             <a href="pantaicaroline">Pantai Caroline</a>
         </div>
     
        <p align="justify">Pantai Caroline memiliki kharisma tersendiri. Pasir putih di tepi pantai Padang ini semakin lengkap dengan pepohonan hijau yang berbaris dipinggirannya. </p>
        </div>
        <div class="konten">
         <a href="lembahharau"><img src={{ asset('image/lembah-harau.jpg') }} ></a>
         <div class="judul">
             <a href="lembahharau">Lembah Harau</a>
         </div>
        <p align="justify">Lembah Harau merupakan lembah yang subur terletak di Kecamatan Harau, Kabupaten Lima Puluh Kota, Provinsi Sumatera Barat.</p>
        </div>


        
   </article>

   <div class="menukananatas">
    
        <h2>Rekomendasi Pariwisata</h2>
            <ul>
                <li><a href="jamgadang">Jam Gadang</a></li>
                <li><a href="istanapagaruyuang">Istana Pagaruyuang</a></li>
                <li><a href="masjidraya">Masjid Raya</a></li>
                <li><a href="danausingkarak">Danau Singkarak</a></li>
            </ul>
        </nav>
    </div>

</div>



   
</div>

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
    padding: 5px 6px 5px ;
    line-height: 1.5;  
}
article .konten {
    width: 23.5%;
    height: auto;
    margin: 5px 5px 5px ;
    float: left;
}

article .isi {
    width: 98.5%;
    height: auto;
    margin: 5px 5px 5px ;
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
    margin: 5px 5px 5px ;
}

article .konten img {
    width: 95.8%;
    height: 150px;
    margin: 5px 5px 5px ;

}
article .konten:hover {
    opacity:0.9;

}
article .konten .judul a {
    
    margin-left: 50px;
    margin-right: 50px;
    text-decoration: none;
    font-size: 15px;
    color:#020101;
}

article .konten a:hover {
    opacity:0.9;
}

article img {
  display: block;
  width: 100%;
  height: 330px;
}

 
.menukananatas 
{
    width: 25%;
    float: left;
}

.menukananatas img {
    width: 260px;
    height: 200px;


}

.menukananatas h1 {
    background-color: grey;
    color: white;
    text-align: center;
    padding: 10px;
    margin-bottom: 13px;
    font-size: 18px;
} 

.menukananatas a {
    font-size: 13px;
    margin: 90px 90px 90px;
}

.menukananatas h2 {
    background-color: grey;
    color: white;
    text-align: center;
    padding: 10px;
    
    font-size: 18px;
} 

.menukananatas ul li a
{
    padding: 5px;
    margin: 20px 20px 20px;
}

</style>



@endsection