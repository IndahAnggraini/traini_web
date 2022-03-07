<html>
    <head>

        <style>
            body{
                margin: 0;
                padding: 0;
            }
            .head1{
                background-color: white;
                width: 100%;
                height: 28px;
                color: black;
                font-size: 13px;
                text-indent: 10px;
                line-height: 2.2;
            }
            .head1 ul li {
                display: inline;
                list-style-type: none;
                line-height: 0.2;
            }
            .head1 .ull a:link{
                text-decoration: none;
                color: black;
                margin-top: 14px;
            }
            .head{
                background-color: black;
                width: 100%;
                height: 100px;
                color: white;
                border: 2px solid gray;
            }
            .head .pilihan{
                /* list-style-type: none; */
                color: white;
                margin-left: 35px;
                font-size: 35px;
                font-style: italic;
                margin-top: 7px;
                float: left;
            }
            .head .pilihan .pilihan1{
                /* list-style-type: none; */
                color: red;
                margin-left: 42px;
                font-size: 7px;
                font-style: italic;
                margin-top: 42px;
                float: left;
            }
            .head .form{
                margin-left: 600px;
                margin-top: 28px;
                float: left;
            }
            .head .form2{
                margin-right: 200px;
                float: right;
                margin-top: 28px;
            }
            .list {
                background-color: black;
                width: 100%;
                height: 100px;
                border: 2px solid black;
                color: white;
                border: 2px solid gray;
            }
            .list ul li{
                display: inline;
                list-style-type: none;
            }
            .list .ul1 a:link{
                text-decoration: none;
                color: white;
                margin-top: 14px;
            }
            .ul2{
                display: none;
            }
            .list .ul1 li:hover .ul2{
                display: block;
                visibility: visible;
            }
            .ul3{
                display: none;
            }
            .list .ul1 li:hover .ul3{
                display: block;
                visibility: visible;
            }
            .ul4{
                display: none;
            }
            .list .ul1 li:hover .ul4{
                display: block;
                visibility: visible;
            }
            .ul5{
                display: none;
            }
            .list .ul1 li:hover .ul5{
                display: block;
                visibility: visible;
            }
            .ul6{
                display: none;
            }
            .list .ul1 li:hover .ul6{
                display: block;
                visibility: visible;
            }
            .ul7{
                display: none;
            }
            .list .ul1 li:hover .ul7{
                display: block;
                visibility: visible;
            }
            .ul8{
                display: none;
            }
            .list .ul1 li:hover .ul8{
                display: block;
                visibility: visible;
            }
            .ul9{
                display: none;
            }
            .list .ul1 li:hover .ul9{
                display: block;
                visibility: visible;
            }
            .ul10{
                display: none;
            }
            .list .ul1 li:hover .ul10{
                display: block;
                visibility: visible;
            }
            .ul11{
                display: none;
            }
            .list .ul1 li:hover .ul11{
                display: block;
                visibility: visible;
            }
            .ul12{
                display: none;
            }
            .list .ul1 li:hover .ul12{
                display: block;
                visibility: visible;
            }
            .ul13{
                display: none;
            }
            .list .ul1 li:hover .ul13{
                display: block;
                visibility: visible;
            }
             .clear::after{
                content: "";
                clear: both;
                display: table;
            }
            .footer{
                background-color: black;
                width: 100%;
                height: 200px;
                color: white;
                border: 2px solid gray;
            }
            .footer .footer1{
                /* list-style-type: none; */
                color: white;
                margin-left: 56px;
                font-size: 35px;
                font-style: italic;
                margin-top: 21px;
                float: left;
            }
            .footer .footer1 .footer2{
                /* list-style-type: none; */
                color: red;
                margin-left: 42px;
                font-size: 7px;
                font-style: italic;
                margin-top: 42px;
                float: left;
            }
            .footer .footer1 .footer3{
                /* list-style-type: none; */
                color: white;
                margin-left: 42px;
                font-size: 7px;
                margin-top: 14px;
                float: left;
                font-family: Arial, Helvetica, sans-serif;
            }
            .footer .footer1 .fotofooter{
                width: 5px;
                margin-top: 5px;
            }
            .footer .footer1 .fotofooter1{
                width: 5px;
                margin-left: 77px;
                margin-top: 5px;
            }
            .footer .footer1 .fotofooter2{
                width: 5px;
                margin-left: 140px;
                margin-top: 5px;
            }

        </style>
        @yield('css')
</head>



<body>
<div id="app">

    <div class="head1" style="margin-top: 17px; margin-bottom: 0px;">
            <ul class="ull">
                <li>
                <a href="default.asp" target="_blank">HARIAN KOMPAS</a>
                </li>

                <li>
                    <a href="default.asp" target="_blank">KOMPAS TV</a>
                </li>

                <li>
                    <a href="default.asp" target="_blank">LIVE RADIO</a>
                </li>

                <li>
                    <a href="default.asp" target="_blank">KOMPASIANA.COM</a>
                </li>

                <li>
                    <a href="default.asp" target="_blank">PASANGIKLAN.COM</a>
                </li>

                <li>
                    <a href="default.asp" target="_blank">GRAMEDIA.COM</a>
                </li>

                <li>
                    <a href="default.asp" target="_blank">GRAMEDIA DIGITAL</a>
                </li>

                <li>
                    <a href="default.asp" target="_blank">GRIDOTO.COM</a>
                </li>

                <li>
                    <a href="default.asp" target="_blank">BOLASPORT.COM</a>
                </li>

                <li>
                    <a href="default.asp" target="_blank">GRID.ID</a>
                </li>

                <li>
                    <a href="default.asp" target="_blank">KONTAN.CO.ID</a>
                </li>

                <li>
                    <a href="default.asp" target="_blank">KGMEDIA.ID</a>
                </li>
            </ul>
        </div>

        <div class="head">

            <div class="pilihan" style="width: 169px;">

            <h3 style="margin-top: 0px;margin-bottom: 0px;height: 0px;width: 887px;">KOMPAS</h3>

                <div class="pilihan1" style="height: 13px;">
                        <h2>JERNIH MELIHAT DUNIA</h2>
                </div>

            </div>

            <div class="form" style="margin-top: 28px; margin-left: 408px;">
                <form action="/tugas_satu" method="get">
                    <input type="text" placeholder="Search" size="30">
                </form>
            </div>

            <div class="form2">
                <form action="/tugas_satu" method="post">
                    <input type="button" formaction="/tugas_dua" value="LANGGANAN KOMPAS.ID">
                </form>
            </div>

        </div>

        <div class="list">
            <ul class="ul1">
                    <li>
                        <a href="default.asp" target="_blank">NEWS</a>
                        <ul class="ul2">
                            <li>Nasional</li>
                            <li>Global</li>
                            <li>Kilas Daerah</li>
                            <li>Kilas Kementrian</li>
                            <li>Kilas Badan Negara</li>
                            <li>Indeks</li>
                            <li>Megapolitan</li>
                            <li>Surat Pembaca</li>
                            <li>Kilas Korporasi</li>
                            <li>Sorot Politik</li>
                            <li>Kilas Parlemen</li>
                            <li>Regional</li>
                        </ul>
                    </li>

                <li class="nav-item">
                    <a href="./tren" class="nav-link">TREN</a>
                </li>
                <li>
                    <a href="default.asp" target="_blank">HEALTH</a>
                </li>

                <li>
                    <a href="default.asp" target="_blank">EDUKASI</a>
                    <ul class="ul3">
                        <li>Sekolah</li>
                        <li>Pendidikan Khusus</li>
                        <li>Skola</li>
                        <li>Kilas Pendidikan</li>
                        <li>Perguruan Tinggi</li>
                        <li>Beasiswa</li>
                        <li>Dunia Kuliah</li>
                    </ul>
                </li>

                <li><a href="default.asp" target="_blank">MONEY</a>
                    <ul class="ul4">
                        <li>Whats New</li>
                        <li>Work Smart</li>
                        <li>SmartPreneur</li>
                        <li>Kilas Badan</li>
                        <li>Kilas Fintech</li>
                        <li>Earn Smart</li>
                        <li>Spend Smart</li>
                        <li>Kilas BUMN</li>
                        <li>Kilas Transportasi</li>
                        <li>Indeks</li>
                    </ul>
                </li>

                <li><a href="default.asp" target="_blank">TEKNO</a>
                    <ul class="ul5">
                        <li>Apps & OS</li>
                        <li>Internet</li>
                        <li>Business</li>
                        <li>Indeks</li>
                        <li>Gadget</li>
                        <li>Hardware</li>
                        <li>Galeri</li>
                    </ul>
                </li>

                <li><a href="default.asp" target="_blank">LIFESTYLE</a>
                    <ul class="ul6">
                        <li>Eat good</li>
                        <li>Look good</li>
                        <li>Feel good</li>
                        <li>Sadar Stunting</li>
                        <li>Buku</li>
                    </ul>
                </li>

                <li><a href="default.asp" target="_blank">PROPERTI</a>
                    <ul class="ul7">
                        <li>News</li>
                        <li>Arsitektur</li>
                        <li>Konsultasi</li>
                        <li>Tips</li>
                        <li>Indeks</li>
                        <li>Hunian</li>
                        <li>Beranda</li>
                        <li>Figur</li>
                        <li>Galeri 360</li>
                        <li>Sorot Properti</li>
                    </ul>
                </li>

                <li><a href="default.asp" target="_blank">BOLA</a>
                    <ul class="ul8">
                        <li>Liga Indonesia</li>
                        <li>Liga Champions</li>
                        <li>Liga Inggris</li>
                        <li>Internasional</li>
                        <li>MotoGP</li>
                        <li>Sports</li>
                        <li>Liga Italia</li>
                        <li>Liga Lain</li>
                        <li>Liga Spanyol</li>
                        <li>Bundesliga</li>
                        <li>Badminton</li>
                        <li>Indeks</li>
                    </ul>
                </li>

                <li><a href="default.asp" target="_blank">TRAVEL</a>
                    <ul class="ul9">
                        <li>Jalan jalan</li>
                        <li>Travel Tips</li>
                        <li>Travel Update</li>
                        <li>Superapp</li>
                        <li>Ohayo Jepang</li>
                        <li>Itinerary</li>
                        <li>Travel Promo</li>
                        <li>Galeri</li>
                        <li>Parekraf</li>
                        <li>Indeks</li>
                    </ul>
                </li>

                <li><a href="default.asp" target="_blank">OTOMOTIF</a>
                    <ul class="ul10">
                        <li>Motor</li>
                        <li>Sport</li>
                        <li>Komunitas</li>
                        <li>Mobil</li>
                        <li>Niaga</li>
                        <li>Otopedia</li>
                    </ul>
                </li>

                <li><a href="default.asp" target="_blank">SAINS</a>
                    <ul class="ul11">
                        <li>Fenomena</li>
                        <li>Oh Begitu</li>
                        <li>Baru Jadi Ortu</li>
                        <li>Indeks</li>
                        <li>Kita</li>
                        <li>Halo Prof</li>
                        <li>Prof Cilik</li>
                    </ul>
                </li>

                <li><a href="default.asp" target="_blank">HYPE</a>
                    <ul class="ul12">
                        <li>Seleb</li>
                        <li>Film</li>
                        <li>Ent!</li>
                        <li>Musik</li>
                        <li>Hits</li>
                        <li>Indeks</li>
                    </ul>
                </li>

                <li><a href="default.asp" target="_blank">VIK</a></li>
                <li><a href="default.asp" target="_blank">KOLOM</a></li>
                <li><a href="default.asp" target="_blank">JEO</a></li>

                <li><a href="default.asp" target="_blank">IMAGES</a>
                    <ul class="ul13">
                        <li>Foto</li>
                        <li>Video</li>
                    </ul>
                </li>
                </ul>
            </ul>

        </div>

        <div class="clear"></div>

        {{-- yield ini untuk menyelipkan data yg berubah setiap halamannya --}}
        <section class="content">
            <div class="container-fluid">
              @yield('konten')
            </div><!-- /.container-fluid -->
        </section>


        <div class="footer">
            <div class="footer1" style="width: 169px;margin-left: 114px;margin-right: 49px;">

                    <h3 style="margin-top: 0px;margin-bottom: 0px;height: 0px;width: 887px;">KOMPAS</h3>

                    <div class="footer2" style="height: 13px;">
                        <h2>JERNIH MELIHAT DUNIA</h2>
                    </div>

                    <div class="footer3" style="margin-left: 14px;">
                            <h2>Penghargaan dan Sertifikat:</h2>
                    </div>

                    <div class="fotofooter" style="height: 0px;">
                        <a target="_blank" href="f1.png">
                            <img src="/assets/img/f1.png" alt="b">
                        </a>
                    </div>

                    <div class="fotofooter1" style="height: 0px;">
                        <a target="_blank" href="f2.png">
                            <img src="/assets/img/f2.png" alt="f">
                        </a>
                    </div>

                    <div class="fotofooter2" style="height: 0px;">
                        <a target="_blank" href="f3.png">
                            <img src="/assets/img/f3.png" alt="f3">
                        </a>
                    </div>

            </div>
        </div>
    </div>


        <!-- jQuery harus paling atas -->
<script src="/assets/AdminLTE-master/plugins/jquery/jquery.min.js"></script>
<script src="/assets/js/vue3.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.24.0/axios.js"></script>

{{-- script harus di paling bawah --}}
@yield('script')

    </body>
</html>


