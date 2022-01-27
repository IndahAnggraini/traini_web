@extends('layouts.lay_berita')

{{-- section dan endsection berfungsi untuk mengurutkan tampilan seprti letak header dan body --}}
@section('konten')
<html>
    <head>
        <style>
            body{
                margin: 0;
                padding: 0;
            }
            .tren {
                background-color: cadetblue;
                color: white;
                height: 60px;
                width: 100%;
                border: 2px solid cadetblue;
            }
            .tren .tren2 {
                margin-left: 35px;
                font-size: 35px;
                margin-top: 7px;
            }
            .bagian1 {
                margin-left: 42px;
                height: 320px;
                margin-top: 21px;
                background-color: cadetblue;
                width: 15%;
                float: left;
            }
            .bagian1 .foto1{
                border: 1px solid #ccc;
                width: 240px;
                float: left;
                margin-right: 35px;
                text-decoration: none;
                color: black;
                margin-top: 35px;
            }
            .bagian1 .tgl a:link{
                text-decoration: none;
                color: black;
                font-size: 17px;
                padding-top: 14px;
                font-family: Arial, Helvetica, sans-serif;
            }
            .bagian1 .desc a:link{
                text-decoration: none;
                color: white;
                margin-top: 35px;
                height: 100px;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 20px;
            }
            .bagian1 .foto1:hover{
                border: 1px solid #777;
            }
            .bagian1 .foto1 img {
                width: 100%;
            }
            .bagian11 {
                height: 320px;
                margin-top: 21px;
                background-color: cadetblue;
                width: 18%;
                float: left;
            }
            .bagian11 .foto11{
                border: 1px solid #ccc;
                width: 240px;
                float: left;
                text-decoration: none;
                color: black;
                margin-top: 35px;
            }
            .bagian11 .tgl2 a:link{
                text-decoration: none;
                color: black;
                font-size: 17px;
                padding-top: 14px;
                font-family: Arial, Helvetica, sans-serif;
            }
            .bagian11 .desc2 a:link{
                text-decoration: none;
                color: white;
                margin-top: 35px;
                height: 100px;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 20px;
            }
            .bagian111 {
                height: 320px;
                margin-top: 21px;
                background-color: cadetblue;
                width: 18%;
                float: left;
            }
            .bagian111 .foto111{
                border: 1px solid #ccc;
                width: 240px;
                float: left;
                text-decoration: none;
                color: black;
                margin-top: 35px;
            }
            .bagian111 .tgl3 a:link{
                text-decoration: none;
                color: black;
                font-size: 17px;
                padding-top: 14px;
                font-family: Arial, Helvetica, sans-serif;
            }
            .bagian111 .desc3 a:link{
                text-decoration: none;
                color: white;
                margin-top: 35px;
                height: 100px;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 20px;
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
                height: 250px;
                /* background-color: cadetblue; */
                width: 60%;
                float: left;
                margin-top: 45px;
            }
            .bagian3 .kata11 h4{
                font-size: 30px;
                color: cadetblue;
                font-family: Arial, Helvetica, sans-serif;
            }
            .bagian3 .foto2{
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
            .bagian3 .teks{
                margin-left: 42px;
                height: 100px;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 21px;
                text-decoration: none;
                color: black;
            }
            .bagian3 .teks .tekskecil a:link{
                /* list-style-type: none; */
                color: black;
                font-size: 25px;
                font-family: Arial, Helvetica, sans-serif;
                margin-top: 56px;
            }
            .bagian4{
                margin-left: 42px;
                height: 250px;
                width: 60%;
                float: left;
                margin-top: 90px;
            }
            .bagian4 .foto3{
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
            .bagian4 .tekss {
                margin-left: 42px;
                height: 100px;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 21px;
                text-decoration: none;
                color: black;
            }
            .bagian4 .tekss .tekskecil1 a:link{
                color: black;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 25px;
                margin-top: 56px;
            }
            .bagian5{
                margin-left: 42px;
                height: 250px;
                width: 60%;
                float: left;
            }
            .bagian5 .foto4{
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
            .bagian5 .teks2{
                margin-left: 42px;
                height: 100px;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 21px;
                text-decoration: none;
                color: black;
            }
            .bagian5 .teks2 .tekskecil2 a:link{
                color: black;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 25px;
                margin-top: 56px;
            }
             .clear::after{
                content: "";
                clear: both;
                display: table;
            }
        </style>
    </head>

    <body>

        <div class="tren">
            <div class="tren2">
                <h3 style="margin-top: 0px; margin-bottom: 0px;">TREN</h3>
            </div>
        </div>

        <div class="bagian1">

            <div class="foto1">
                <a target="_blank" href="s1.jpg">
                    <img src="/assets/img/s1.jpg" alt="tren" width="300" height="133">
                </a>
            </div>

                <div class="tgl" style="padding-top: 154px;margin-top: 49px;">
                    <a href="default.asp" target="_blank">24/01/2022, 20:30 WIB</a>
                </div>

            <div class="desc" style="padding-top: 25px;">
                <a href="default.asp" target="_blank">Tidur Ditemani Musik? Kenali Plus Minusnya</a>
            </div>
        </div>

        <div class="bagian11">

            <div class="foto11" style="margin-left: 20px;">
                        <a target="_blank" href="s2.jpg">
                            <img src="/assets/img/s2.jpg" alt="trenn" width="240" height="133">
                        </a>
            </div>

            <div class="tgl2" style="padding-top: 154px;margin-top: 49px;margin-left: 20px;">
                <a href="default.asp" target="_blank">25/01/2022, 13:00 WIB</a>
            </div>

            <div class="desc2" style="padding-top: 25px;margin-left: 20px;">
                <a href="default.asp" target="_blank">Untuk Pelaku usaha, Ini Cara Membuat NPWP Badan Usaha</a>
            </div>

        </div>

        <div class="bagian111">

            <div class="foto111" style="margin-left: 20px;">
                        <a target="_blank" href="s3.jpeg">
                            <img src="/assets/img/s3.jpeg" alt="trenn" width="240" height="133">
                        </a>
            </div>

            <div class="tgl3" style="padding-top: 154px;margin-top: 49px;margin-left: 20px;">
                <a href="default.asp" target="_blank">25/01/2022, 13:30 WIB</a>
            </div>

            <div class="desc3" style="padding-top: 25px;margin-left: 20px;">
                <a href="default.asp" target="_blank">Penjelasan Korlantas Polri soal Warna Pelat Nomor Kendaraan Putih Mulai 2022</a>
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
                <a target="_blank" href="q1.jpg">
                    <img src="/assets/img/q1.jpg" alt="Anak" width="400" height="200">
                </a>
            </div>


            <div class="teks">
                <h6 style="margin-left: 250px;margin-top: -;padding-top: 40px;">25/01/2022, 11:00 WIB</h6>
                    <div class="tekskecil" style="margin-top: 50px;">
                        <a href="./detail" target="_blank">Tanda-tanda Tikus Masuk Rumah, Salah Satunya adalah Bau Amis Ikan</a>
                    </div>
            </div>

        </div>

        <div class="bagian4">
            <div class="foto3" style="margin-top: 0px;">
                <a target="_blank" href="q2.jpg">
                    <img src="/assets/img/q2.jpg" alt="Kerja" width="400" height="200">
                </a>
            </div>

            <div class="tekss">
                <h6 style="margin-left: 250px;margin-top: -;padding-top: 40px;">25/01/2022, 14:00 WIB</h6>
                    <div class="tekskecil1" style="margin-top: 50px;">
                        <a href="default.asp" target="_blank">Kucing Tua juga Menderita Radang Sendi, Ini Gejala dan Penanganannya
                        </a>
                    </div>
            </div>
        </div>

        <div class="bagian5">
            <div class="foto4" style="margin-top: 0px;">
                <a target="_blank" href="q3.jpg">
                    <img src="/assets/img/q3.jpg" alt="Kartun" width="400" height="200">
                </a>
            </div>

            <div class="teks2">
                <h6 style="margin-left: 250px;margin-top: -;padding-top: 40px;">25/01/2022, 13:48 WIB</h6>
                <div class="tekskecil2" style="margin-top: 50px;">
                    <a href="default.asp" target="_blank">Ganjar Si Angsa Hitam 2024?
                    </a>
                </div>
            </div>
        </div>

        <div class="clear"></div>


    </body>
</html>
@endsection
