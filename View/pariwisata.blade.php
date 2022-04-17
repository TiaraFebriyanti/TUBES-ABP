<!-- Menghubungkan dengan view template master -->
@extends('master')

<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

<section class="artikel">
        <article>
          <figure>
           <img src={{ asset('image/jamgadang.jpg') }} alt="jamgadang" />
           <figcaption>Jam Gadang Indonesia</figcaption>
          </figure>
          <hgroup>
           <a  href="jamgadang">Jam Gadang</a>
           <h3>Bukittinggi</h3>
          </hgroup>
          <p>Jam Gadang adalah nama untuk menara jam yang terletak di pusat kota Bukittinggi, Sumatera Barat, Indonesia.</p>
        </article>    

        <article>
          <figure>
           <img src={{ asset('image/masjid-raya.jpg') }} alt="masjidraya" />
           <figcaption>Masjid Raya Indonesia</figcaption>
          </figure>
          <hgroup>
               <a href="masjidraya">Masjid Raya</a>
           <h3>Jl. Khatib Sulaiman, Alai Parak Kopi</h3>
          </hgroup>
          <p>Masjid Raya Sumatera Barat atau juga dikenal sebagai Masjid Mahligai Minang adalah salah satu masjid terbesar di Indonesia yang terletak di Kecamatan Padang Utara, Kota Padang, Provinsi Sumatera Barat.</p>
        </article>

        <article>
            <figure>
             <img src={{ asset('image/danau-singkarak.jpg') }} alt="danausingkarak" />
             <figcaption>Danau Indonesia</figcaption>
            </figure>
            <hgroup>
                 <a href="danausingkarak">Danau Singkarak</a>
             <h3>Kab. Solok dan Kab. Tanah Datar, Sumatera Barat</h3>
            </hgroup>
            <p>Danau Singkarak adalah sebuah danau yang membentang di dua kabupaten yang terdapat di provinsi Sumatra Barat, Indonesia, yaitu kabupaten Solok dan kabupaten Tanah Datar. </p>
          </article>
          
          <article>
            <figure>
             <img src={{ asset('image/istana-pagaruyuang.jpg') }} alt="istanapagaruyuang" />
             <figcaption>Istana Pagaruyuang</figcaption>
            </figure>
            <hgroup>
                 <a href="istanapagaruyuang">Istana Pagaruyuang</a>
             <h3>Jl. Sutan Alam Bagagarsyah, Pagaruyung, Kec. Tj. Emas</h3>
            </hgroup>
            <p>Istano Basa yang lebih terkenal dengan nama Istana Pagaruyung adalah museum berupa replika istana Kerajaan Pagaruyung terletak di Nagari Pagaruyung, Kecamatan Tanjung Emas, Kabupaten Tanah Datar, Sumatra Barat. Istana ini berjarak lebih kurang 5 kilometer dari Batusangkar. </p>
          </article>
         
          <article>
            <figure>
             <img src={{ asset('image/pantai-caroline.jpg') }} alt="Pantaicaroline" />
             <figcaption>Pantai Indonesia</figcaption>
            </figure>
            <hgroup>
                 <a href="pantaicaroline">Pantai Caroline</a>
             <h3>Bungus,Sumatra Barat </h3>
            </hgroup>
            <p>Pantai Carolina adalah sebuah objek wisata pantai yang terletak di daerah Bungus, 20 km di sebelah selatan Kota Padang, Sumatra Bara. Dapat dicapai dengan kendaraan umum dari terminal Oplet Pasaraya kota Padang. </p>
          </article>
          
          <article>
            <figure>
             <img src={{ asset('image/lembah-harau.jpg') }} alt="lembahharau" />
             <figcaption>Lembah Harau Indonesia</figcaption>
            </figure>
            <hgroup>
                 <a href="lembahharau">Lembah Harau
                 </a>
             <h3>Kota Payakumbuh Kabupaten Limapuluh Koto, provinsi Sumatra Barat. </h3>
            </hgroup>
            <p>PLembah Harau adalah sebuah ngarai dekat Kota Payakumbuh di Kabupaten Limapuluh Koto, provinsi Sumatra Barat. Lembah Harau diapit dua bukit cadas terjal dengan ketinggian mencapai 150 meter berupa batu pasir yang terjal berwarna-warni, dengan ketinggian 100 sampai 500 meter.  </p>
          </article>

       </section>
 

       <style>


        

section.courses {
    float: left;
    width: 659px;
    border-right: 1px solid #eeeeee;
}

article {
    clear: both;
    width: 90%;
}

hgroup {
margin-top: 30px;

}

figure {
float: left;
width: 300px;
height: 240px;
padding: 5px;
margin-left: 10px;
border: 1px solid #eeeeee;
}

  figure img{
      width: 290px;
      height: 200px;
      
      
  }

  figcaption {
  font-size: 90%;
  text-align: left;
  }


  h2, h3 {
  font-weight: normal;
  }



  h3 {
  margin-top: 5px;
  color: red;
  font-size: 18px;
  }

  article a {
      margin: 10px 5px 5px 5px;
      padding: 0px;
      font-size: 30px;
      color: rgb(56, 55, 55);
      }
    
</style>


    

@endsection