@extends('layouts.lay_berita')

@section('css')
<link rel="stylesheet" href="/assets/css/aos.css">
<link rel="stylesheet" href="/assets/css/datatables.min.css">
<link rel="stylesheet" href="/assets/css/slick-loader.min.css">
<link rel="stylesheet" href="/assets/css/swiper-bundle.min.css">
<link rel="stylesheet" href="/assets/css/toastr.min.css">

<style>
    /* CSS LIBRARY SWIPPER */
    .swiper {
        width: 600px;
        height: 300px;
      }

      .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;

        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
      }

      .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
      }
    body{
        margin: 0;
        padding: 0;
    }
    .bagian1 {
        margin-left: 42px;
        height: 300px;
        /* background-color: burlywood; */
        width: 66%;
        float: left;
    }
    .bagian1 .kata1 h4{
        /* text-decoration: underline; */
        /* border-bottom: 5px solid blue; */
        border-bottom-style: solid;
        border-bottom-width: thin;
        font-size: 20px;
    }
    .bagian1 .foto1{
        border: 1px solid #ccc;
        width: 240px;
        float: left;
        margin-right: 35px;
        text-decoration: none;
        color: black;
    }
    .bagian1 .desc a:link{
        text-decoration: none;
        color: black;
    }
    .bagian1 .foto1:hover{
        border: 1px solid #777;
    }
    .bagian1 .foto1 img {
        width: 100%;
    }
    .bagian2{
        margin-right: 35px;
        height: 300px;
        /* background-color: burlywood; */
        width: 20%;
        /* display: inline-block; */
        float: right;
    }
    .bagian2 .kata2 h4{
        border-bottom-style: solid;
        border-bottom-width: thin;
        font-size: 20px;
    }
    .bagian2 .foto1{
        width: 250px;
        margin-top: 21px;
        border: 1px solid #ccc;
        /* width: 100px; */
        /* float: right; */
    }
    .bagian2 .desc a:link{
        text-decoration: none;
        color: black;
    }
    .bagian2 .foto1:hover{
        border: 1px solid #777;
    }
    .bagian2 .foto1 img {
        width: 100%;
    }
    .bagian3 {
        margin-left: 42px;
        height: 220px;
        /* background-color: cadetblue; */
        width: 66%;
        float: left;
    }
    .bagian3 .kata11 h4{
        border-bottom-style: solid;
        border-bottom-width: thin;
        font-size: 20px;
    }
    .bagian3 .foto2{
        width: 150px;
        margin-top: 14px;
        border: 1px solid #ccc;
        float: left;
    }
    .bagian3 .foto2:hover{
        border: 1px solid #777;
    }
    .bagian3 .foto2 img {
        width: 100%;
        vertical-align: baseline;
    }
    .bagian3 .teks a:link{
        margin-top: 28px;
        height: 100px;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 25px;
        text-decoration: none;
        color: black;
    }
    .bagian3 .teks .tekskecil{
        /* list-style-type: none; */
        color: blue;
        margin-left: 42px;
        font-size: 14px;
        margin-top: 42px;
    }
    .bagian4{
        margin-left: 42px;
        height: 200px;
        /* background-color: gray; */
        width: 66%;
        float: left;
    }
    .bagian4 .foto3{
        width: 150px;
        margin-top: 5px;
        border: 1px solid #ccc;
        float: left;
    }
    .bagian4 .foto3:hover{
        border: 1px solid #777;
    }
    .bagian4 .foto3 img {
        width: 100%;
        vertical-align: baseline;
    }
    .bagian4 .teks1 a:link{
        margin-top: 70px;
        height: 100px;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 25px;
        text-decoration: none;
        color: black;
    }
    .bagian4 .teks1 .tekskecil1{
        color: red;
        margin-left: 42px;
        font-size: 14px;
        margin-top: 42px;
    }
    .bagian5{
        margin-left: 42px;
        height: 200px;
        /* background-color: gray; */
        width: 66%;
        float: left;
    }
    .bagian5 .foto4{
        width: 150px;
        margin-top: 5px;
        border: 1px solid #ccc;
        float: left;
    }
    .bagian5 .foto4:hover{
        border: 1px solid #777;
    }
    .bagian5 .foto4 img {
        width: 100%;
        vertical-align: baseline;
    }
    .bagian5 .teks2 a:link{
        margin-top: 70px;
        height: 100px;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 25px;
        text-decoration: none;
        color: black;
    }
    .bagian5 .teks2 .tekskecil2{
        color: red;
        margin-left: 42px;
        font-size: 14px;
        margin-top: 42px;
    }
     .clear::after{
        content: "";
        clear: both;
        display: table;
    }

</style>
@endsection

{{-- section dan endsection berfungsi untuk mengurutkan tampilan seprti letak header dan body --}}
@section('konten')

{{-- SWIPPER --}}

<div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide"><img class="lazy" src="/assets/img/Spinner.gif" data-src="/assets/img/b.jpg" alt="Bola" width="500"></div>
      <div class="swiper-slide"><img src="/assets/img/2.png" alt="Bola" width="500"></div>
      <div class="swiper-slide"><img src="/assets/img/b.jpg" alt="Bola" width="500"></div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>

{{-- <!-- Slider main container -->
<div class="swiper">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
      <!-- Slides -->
      <div class="swiper-slide">Slide 1</div>
      <div class="swiper-slide">Slide 2</div>
      <div class="swiper-slide">Slide 3</div>
      ...
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>

    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

    <!-- If we need scrollbar -->
    <div class="swiper-scrollbar"></div>
  </div> --}}

        <div class="bagian1">

            {{-- data dokumentasi aos masukkan di class kata1 --}}
            <div class="kata1">
                    <h4>SOROTAN</h4>
            </div>

            <div class="foto1" data-aos="fade-up">
            <a target="_blank" href="bola.jpg">
                <img class="lazy" src="/assets/img/Spinner.gif" data-src="/assets/img/b.jpg" alt="Bola" width="500">
            </a>

            <div class="desc">
            <a href="default.asp" target="_blank">Thailand Vs Indonesia: Egy Maulana Vikri Cetak Gol, Skor Imbang 2-2</a>
            </div>
        </div>

        <div class="foto1" data-aos="flip-up">
            <a target="_blank" href="2.png">
                <img src="/assets/img/2.png" alt="2" width="300" height="133">
            </a>
            <div class="desc">
                <a href="default.asp" target="_blank">
                    Laura Anna Ungkap Pesan WhatsApp Tak Pernah Dibalas Gaga Muhammad dan Keluarga</a>
            </div>
        </div>

        <div class="foto1" data-aos="flip-down">
            <a target="_blank" href="b.jpg">
                <img src="/assets/img/b.jpg" alt="b" width="300" height="133">
            </a>
            <div class="desc">
            <a href="default.asp" target="_blank">
                Ingin Mulai Bisnis Impor? Berikut 5 Langkah yang Mesti Dipersiapkan Pelaku Usaha</a>
            </div>
        </div>

        </div>

        <div class="bagian2">

            <div class="kata2">
                <h4>KOMPAS ID</h4>
            </div>

            <div class="foto1">
            <a target="_blank" href="c.png">
                <img src="/assets/img/c.png" alt="b" width="300" height="133">
            </a>
            <div class="desc">
                <a href="default.asp" target="_blank"> Segera Berlangganan Kompas.id 12 Bulan Hemat 40%</a>
            </div>
        </div>
        </div>



        <div class="bagian3">
            <div class="kata11">
                    <h4>BERITA TERKINI</h4>
            </div>

            <div class="foto2" style="margin-top: 0px;">
                <a target="_blank" href="a2.jpg">
                    <img src="/assets/img/a2.jpg" alt="Anak" width="300" height="133">
                </a>
            </div>


            <div class="teks">
                <a href="default.asp" target="_blank">4 Langkah Penting dalam Menyiapkan Dana Pendidikan Anak</a>


                    <div class="tekskecil">
                            <h5>POWERED BY LPS</h5>
                    </div>
            </div>

        </div>

        <div class="bagian4" style="width: 843.792; height: 150px;">
            <div class="foto3" style="margin-top: 0px;">
                <a target="_blank" href="a-3.jpg">
                    <img src="/assets/img/a-3.jpg" alt="Kerja" width="300" height="133">
                </a>
            </div>

            <div class="teks1">
            <a href="default.asp" target="_blank">Pasien Omicron Jatim Menginap dan Berwisata di Bali, Dinkes Bali Lacak Kontak Erat</a>

                    <div class="tekskecil1">
                            <h5>REGIONAL 02/01/2022, 20:18 WIB</h5>
                    </div>
            </div>
        </div>

        <div class="bagian5" style="width: 843.792; height: 150px;">
            <div class="foto4" style="margin-top: 0px;">
                <a target="_blank" href="a4.jpg">
                    <img src="/assets/img/a4.jpg" alt="Kartun" width="300" height="133">
                </a>
            </div>

            <div class="teks2">
            <a href="default.asp" target="_blank">7 Fakta Menarik Ron's Gone Wrong, Kisah Persahabatan dengan Robot</a>

                    <div class="tekskecil2">
                            <h5>HYPE 03/01/2022, 13:02 WIB</h5>
                    </div>
            </div>
        </div>

        <div class="clear"></div>
@endsection

@section('script')
<script src="/assets/js/aos.js"></script>
<script src="/assets/js/datatables.min.js"></script>
<script src="/assets/js/lazyload.min.js"></script>
<script src="/assets/js/swiper-bundle.min.js"></script>
<script src="/assets/js/toastr.min.js"></script>
<script src="/assets/js/slick-loader.min.js"></script>
<script>
    const App = {
        data() {
            return {

            }
        },
        mounted() {
            AOS.init();

            // lazyload utk menambahkan settingan
            var lazyLoadInstance = new LazyLoad({
            // Your custom settings go here
            });

                var swiper = new Swiper(".mySwiper", {
                navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
                },
            });

            // SLICKLOADER = SEBAGAI LOADING
            Slickloader.enable();
            Slickloader.disable();

            // Display a warning toast, with no title
            // toastr.warning('My name is Inigo Montoya. You killed my father, prepare to die!')

            // // Display a success toast, with a title
            // toastr.success('Have fun storming the castle!', 'Miracle Max Says')

            // // Display an error toast, with a title
            // toastr.error('I do not think that word means what you think it means.', 'Inconceivable!')

            // // Immediately remove current toasts without using animation
            // toastr.remove()

            // // Remove current toasts using animation
            // toastr.clear()

            // // Override global options
            // toastr.success('We do have the Kapua suite available.', 'Turtle Bay Resort', {timeOut: 5000})
        },
        methods: {

        }
    }
Vue.createApp(App).mount('#app');
</script>
@endsection
