<div>
    <!-- Topbar Start -->
    <div class="container-fluid bg-primary py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-white pr-3" href="#">FAQs</a>
                        <span class="text-white">|</span>
                        <a class="text-white px-3" href="#">Help</a>
                        <span class="text-white">|</span>
                        <a class="text-white pl-3" href="#">Support</a>
                    </div>
                </div>
                <div class="col-md-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-white px-3" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-white pl-3" href="">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                    <h1 class="m-0 text-secondary">
                        <span class="text-primary">
                            <img src="{{ url('/') }}/desawisatadieng.png" alt="Logo" style="height: 50px;">
                        </span>
                    </h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="#home" class="nav-item nav-link active">Home</a>
                        <a href="#visimisi" class="nav-item nav-link">Kawasan Wisata Dieng</a>
                        <!-- <a href="#struktur" class="nav-item nav-link">Struktur Organisasi</a> -->
                        <a href="#infotanah" class="nav-item nav-link">Informasi Tanah</a>
                        <a href="#datawisata" class="nav-item nav-link">Data Wisata</a>
                        <a href="#destinasiwisata" class="nav-item nav-link">Destinasi</a>
                        <a href="#potensi" class="nav-item nav-link">Peta Wisata</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- Carousel Start -->
    <div id="home" class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ url('/') }}/img/dieng_sampul.png" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Lokasi dan sebaran wisata</h4>
                            <h2 class="display-4 text-white mb-md-4 text-bold text-uppercase ">Dataran Tinggi Dieng<br></h2>
                            {{-- <a href="#" class="btn btn-primary py-md-3 px-md-5 mt-2">Learn More</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Contact Info Start -->
    <div class="container-fluid contact-info mt-5 mb-4">
        <div class="container" style="padding: 0 30px;">
            <div class="row">
                <div class="col-md-4 d-flex align-items-center justify-content-center bg-secondary mb-4 mb-lg-0" style="height: 100px;">
                    <div class="d-inline-flex">
                        <i class="fa fa-2x fa-map-marker-alt text-white m-0 mr-3"></i>
                        <div class="d-flex flex-column">
                            <h5 class="text-white font-weight-medium">Lokasi</h5>
                            <p class="m-0 text-white">Dieng, Wonosobo, Jawa Tengah</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-items-center justify-content-center bg-primary mb-4 mb-lg-0" style="height: 100px;">
                    <div class="d-inline-flex text-left">
                        <i class="fa fa-2x fa-envelope text-white m-0 mr-3"></i>
                        <div class="d-flex flex-column">
                            <h5 class="text-white font-weight-medium">Email</h5>
                            <p class="m-0 text-white">wisatadieng@ gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-items-center justify-content-center bg-secondary mb-4 mb-lg-0" style="height: 100px;">
                    <div class="d-inline-flex text-left">
                        <i class="fa fa-2x fa-phone-alt text-white m-0 mr-3"></i>
                        <div class="d-flex flex-column">
                            <h5 class="text-white font-weight-medium">Telepon</h5>
                            <p class="m-0 text-white">0821-2425-1672</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Info End -->

    <!-- About Start -->
    <div id="visimisi" class="container-fluid py-5">
        <div class="container pt-0 pt-lg-4">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <img class="img-fluid" src="{{ url('/') }}/img/dieng_area.png" alt="">
                </div>
                <div class="col-lg-7 mt-5 mt-lg-0 pl-lg-5">
                    <h1 class="mb-4">Kawasan Wisata Dieng</h1>
                    <h5 class="font-weight-medium mb-5">
                        Kawasan Wisata Dieng merupakan destinasi alam yang menakjubkan terletak di Pegunungan Dieng, Jawa Tengah, Indonesia. Dikenal dengan ketinggian dan keindahan alamnya, Dieng menawarkan pengalaman wisata yang unik. Di sini, Anda dapat menjelajahi pesona Gunung Prau, menikmati keindahan Telaga Warna dan Telaga Pengilon, serta melihat situs sejarah seperti Candi Arjuna.
                        <br><br>
                        Kawasan ini juga terkenal dengan fenomena alamnya, termasuk sunrise indah dari puncak-puncak gunung. Udara sejuk, hijaunya perkebunan sayur-sayuran, dan keunikan budaya Dieng memberikan daya tarik tersendiri bagi para pengunjung. Jelajahi keindahan alam, nikmati kekayaan budaya, dan raih pengalaman tak terlupakan di Kawasan Wisata Dieng. Selamat menikmati pesona Dieng!
                    </h5>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Pricing Plan Start -->
    <div id="infotanah" class="container-fluid pt-5 pb-3">
        <div class="container">
            <h1 class="display-4 text-center mb-5">Informasi Tanah</h1>
            <div class="row">
                @foreach ($infotanah as $info)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="bg-light text-center mb-2 pt-4">
                        <div class="d-inline-flex flex-column align-items-center justify-content-center bg-secondary rounded-circle shadow mt-2 mb-4" style="width: 200px; height: 200px; border: 15px solid #ffffff;">
                            <h3 class="text-white">
                                {{ $info->jenis_tanah }}
                            </h3>
                        </div>
                        <div class="d-flex flex-column align-items-center py-3">
                            {{-- 2 kolom 2 baris--}}
                            <div class="row">
                                <div class="col-md-6">
                                    <h5 class="font-weight-medium">Ketinggian</h5>
                                    <p class="text-muted font-italic">{{ $info->ketinggian }} mdpl</p>
                                </div>
                                <div class="col-md-6">
                                    <h5 class="font-weight-medium">Kelembaban</h5>
                                    <p class="text-muted font-italic">{{ $info->kelembaban }} %</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Pricing Plan End -->

    <!-- Services Start -->
    <!-- Destinasi Wisata Start -->
    <div id="destinasiwisata" class="container-fluid pt-5 pb-3">
        <div class="container">
            <h1 class="display-4 text-center mb-5">Destinasi Wisata</h1>
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card">
                        <img src="path/to/image1.jpg" class="card-img-top" alt="Destinasi 1">
                        <div class="card-body">
                            <h5 class="card-title">Destinasi 1</h5>
                            <p class="card-text">Deskripsi destinasi 1.</p>
                            <a href="#" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card">
                        <img src="path/to/image2.jpg" class="card-img-top" alt="Destinasi 2">
                        <div class="card-body">
                            <h5 class="card-title">Destinasi 2</h5>
                            <p class="card-text">Deskripsi destinasi 2.</p>
                            <a href="#" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card">
                        <img src="path/to/image3.jpg" class="card-img-top" alt="Destinasi 3">
                        <div class="card-body">
                            <h5 class="card-title">Destinasi 3</h5>
                            <p class="card-text">Deskripsi destinasi 3.</p>
                            <a href="#" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card">
                        <img src="path/to/image4.jpg" class="card-img-top" alt="Destinasi 4">
                        <div class="card-body">
                            <h5 class="card-title">Destinasi 4</h5>
                            <p class="card-text">Deskripsi destinasi 4.</p>
                            <a href="#" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Destinasi Wisata End -->

    <!-- Services End -->


    <!-- Features Start -->
    <div id="destinasiwisata" class="container-fluid pt-5 pb-3">
        <div class="container">
            <h1 class="display-4 text-center mb-5">Destinasi Wisata</h1>
            <div class="row">
                <div class="col-lg-7 m-0 my-lg-5 pt-0 pt-lg-5 pr-lg-5">
                    <h1 class="mb-4">Data Wisata</h1>
                    <p>Berikut data wisata berdasarkan data pada Kementrian Pariwisata dan Ekonomi Kreatif Indonesia:</p>
                    <div class="row">
                        <h5 class="font-weight-bold">Total Destinasi Wisata:</h5>
                        <div class="col-sm-6 mb-4 d-flex">
                            <h1 class="text-secondary" data-toggle="counter-up">30  </h1>
                            <span class="text-center font-weight-bold align-items-center text-secondary" style="display:flex">  Wisata</span>
                        </div>
                        <h5 class="font-weight-bold">Total Luas Kawasan Wisata Dieng:</h5>
                        <div class="col-sm-6 mb-4 d-flex">
                            <h1 class="text-secondary" data-toggle="counter-up">4.600 </h1>
                            <span class="text-center font-weight-bold align-items-center text-secondary" style="display:flex"> Ha</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="d-flex flex-column align-items-center justify-content-center bg-secondary h-100 py-5 px-3">
                        <img src="{{ asset('desawisatadieng.png') }}" alt="" class="img-fluid m-2" width="30%">
                        <img src="{{ asset('img/tempat-wisata-di-dieng.jpg') }}" alt="" class="img-fluid m-2">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->

    <!-- Pricing Plan Start -->
    <div id="potensi" class="container-fluid pt-5 pb-3">
        <div class="container">
            <h1 class="display-4 text-center mb-5">Peta Destinasi Wisata</h1>
            <div class="row">
                <div class="col-lg-12 col-sm-12 mb-4">
                    <div class="bg-light text-center mb-2 pt-4">
                        {{-- peta --}}
                                <div class="m-2" id="map" style="height: 600px;" wire:ignore></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing Plan End -->
    <div class="container-fluid bg-dark text-white py-4 px-sm-3 px-md-5">
        <p class="m-0 text-center text-white">
            &copy; <a class="text-white font-weight-medium" href="#">Sistem Informasi Geografis Wisata Dieng</a>. All Rights Reserved. Designed by
            <a class="text-white font-weight-medium" href="#">#</a>
        </p>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>
        <script src="https://unpkg.com/@geoman-io/leaflet-geoman-free@latest/dist/leaflet-geoman.min.js"></script>
        <script>
            // document.addEventListener('livewire:load', () => {
            // maps leaflet
            var map = L.map('map').setView([-7.2096, 109.9015], 13);
            L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/">2023</a>',
                maxZoom: 23,
                id: 'mapbox/streets-v11',
                tileSize: 512,
                zoomOffset: -1,
                accessToken: 'pk.eyJ1IjoiaGFuaXBwdyIsImEiOiJjbHBrZHk0MmMwN3VpMmpvZjhjdWRrYnNlIn0.s2Jc-GJnbtfr1l8HU49tNA'
            }).addTo(map);

            var marker = L.marker([-7.212356, 109.915399], { pmIgnore: true })
                .bindTooltip("Telaga Warna")
                .addTo(map);

            var marker = L.marker([-7.2050892, 109.9068403], { pmIgnore: true })
                .bindTooltip("Candi Arjuna")
                .addTo(map);

            var marker = L.marker([-7.217856, 109.916571], { pmIgnore: true })
                .bindTooltip("Batu Pandang Ratapan Angin")
                .addTo(map);

            var marker = L.marker([-7.216801, 109.914798], { pmIgnore: true })
                .bindTooltip("Dieng Plateau Theater")
                .addTo(map);

            var marker = L.marker([-7.215464, 109.917234], { pmIgnore: true })
                .bindTooltip("Telaga Pengilon")
                .addTo(map);

            var marker = L.marker([-7.214299, 109.910475], { pmIgnore: true })
                .bindTooltip("Candi Bima")
                .addTo(map);

            var marker = L.marker([-7.220264, 109.903978], { pmIgnore: true })
                .bindTooltip("Kawah Sikidang")
                //.bindPopup("Kecamatan pati")
                .addTo(map);

            var marker = L.marker([-7.208906, 109.890893], { pmIgnore: true })
                .bindTooltip("Telaga Merdada")
                .addTo(map);

            var marker = L.marker([-7.208785, 109.905991], { pmIgnore: true })
                .bindTooltip("Candi Gatotkaca")
                .addTo(map);

            var marker = L.marker([-7.207880, 109.908398], { pmIgnore: true })
                .bindTooltip("Telaga Balai Kambang")
                .addTo(map);

            var marker = L.marker([-7.214464, 109.916193], { pmIgnore: true })
                .bindTooltip("Goa Semar")
                .addTo(map);

            var marker = L.marker([-7.187194, 109.922930], { pmIgnore: true })
                .bindTooltip("Gunung Prau")
                .addTo(map);

            var marker = L.marker([-7.267958, 109.924833], { pmIgnore: true })
                .bindTooltip("Telaga Menjer")
                .addTo(map);

            var marker = L.marker([-7.233294, 109.938471], { pmIgnore: true })
                .bindTooltip("Gardu Pandang Dieng")
                .addTo(map);

            var marker = L.marker([-7.242538, 109.907072], { pmIgnore: true })
                .bindTooltip("Air Terjun Sikarim")
                .addTo(map);

            var marker = L.marker([-7.238958, 109.924775], { pmIgnore: true })
                .bindTooltip("Bukit Sikunir")
                .addTo(map);

            var marker = L.marker([-7.267635, 109.962275], { pmIgnore: true })
                .bindTooltip("Kebun Teh Tambi")
                .addTo(map);

            var marker = L.marker([-7.236643, 109.919903], { pmIgnore: true })
                .bindTooltip("Telaga Cebong")
                .addTo(map);

            var marker = L.marker([-7.197599, 109.910837], { pmIgnore: true })
                .bindTooltip("Candi Dwarawati")
                .addTo(map);

            var marker = L.marker([-7.193764, 109.933021], { pmIgnore: true })
                .bindTooltip("Bukit Teletubbies Prau")
                .addTo(map);

            var marker = L.marker([-7.188782, 109.853260], { pmIgnore: true })
                .bindTooltip("Kawah Candradimuka")
                .addTo(map);

            var marker = L.marker([-7.190289, 109.853574], { pmIgnore: true })
                .bindTooltip("Kawah Sikendang")
                .addTo(map);

            var marker = L.marker([-7.200744, 109.881511], { pmIgnore: true })
                .bindTooltip("Telaga Sewiwi")
                .addTo(map);

            var marker = L.marker([-7.204007, 109.911162], { pmIgnore: true })
                .bindTooltip("Tugu Selamat Datang")
                .addTo(map);

            var marker = L.marker([-7.213333, 109.913984], { pmIgnore: true })
                .bindTooltip("Dieng Park")
                .addTo(map);

            var marker = L.marker([-7.219531, 109.908190], { pmIgnore: true })
                .bindTooltip("Telaga Silewek")
                .addTo(map);

            var marker = L.marker([-7.247072, 109.907945], { pmIgnore: true })
                .bindTooltip("Swiss Van Java")
                .addTo(map);

            var marker = L.marker([-7.186645, 109.848448], { pmIgnore: true })
                .bindTooltip("Telaga Dringo")
                .addTo(map);

            var marker = L.marker([-7.205815, 109.904962], { pmIgnore: true })
                .bindTooltip("Dieng Culture Festival")
                .addTo(map);

            var marker = L.marker([-7.210987, 109.914775], { pmIgnore: true })
                .bindTooltip("Top Petak 9 Sky")
                .addTo(map);

            var marker = L.marker([-7.214664, 109.915563], { pmIgnore: true })
                .bindTooltip("Batu Tulis")
                .addTo(map);

            var marker = L.marker([-7.227348, 109.921588], { pmIgnore: true })
                .bindTooltip("Kawah Wurung")
                .addTo(map);

            var marker = L.marker([-7.230077, 109.920619], { pmIgnore: true })
                .bindTooltip("Savana Gn. Pakuwojo")
                .addTo(map);

            var marker = L.marker([-7.221249, 109.918665], { pmIgnore: true })
                .bindTooltip("Panjat Tebing Watu Lancip")
                .addTo(map);

            var marker = L.marker([-7.215002, 109.899702], { pmIgnore: true })
                .bindTooltip("Dataran Tinggi Dieng")
                .addTo(map);

            var marker = L.marker([-7.194114, 109.880722], { pmIgnore: true })
                .bindTooltip("D'Qiano Hot Spring Waterpark")
                .addTo(map);

            var marker = L.marker([-7.204576, 109.912896], { pmIgnore: true })
                .bindTooltip("Tuk Bimo Lukar")
                .addTo(map);

            var marker = L.marker([-7.212102, 109.907647], { pmIgnore: true })
                .bindTooltip("Savana Dieng")
                .addTo(map);

            var marker = L.marker([-7.193085, 109.883814], { pmIgnore: true })
                .bindTooltip("Kawah Sileri")
                .addTo(map);

            var marker = L.marker([-7.226107, 109.931955], { pmIgnore: true })
                .bindTooltip("Maha Sky Batu Angkruk")
                .addTo(map);

            // random color
            function getRandomColor() {
                var letters = '0123456789ABCDEF';
                var color = '#';
                for (var i = 0; i < 6; i++) {
                    color += letters[Math.floor(Math.random() * 16)];
                }
                return color;
            }
            // view maps polygon existing json.stringify
            var petas = {!! json_encode($petas -> toArray()) !!};
            petas.forEach(function (item) {
                var cords = JSON.parse(item['batas_lahan']);
                // get coordinates from geometry on cords
                var coordinates = cords.geometry.coordinates[0];
                for (var i = 0; i < coordinates.length; i++) {
                    coordinates[i].reverse();
                }
                // create polygon jika zoom diatas 15
                var polygon = L.polygon(coordinates, {
                    color: 'getRandomColor()',
                    // random color
                    fillColor: getRandomColor()
                    , fillOpacity: 0.8
                }).addTo(map);

                // random marker color
                // jadikan marker jika zoom dibawah 15
                if (map.getZoom() < 15) {
                    // marker with ramdom color from getRandomColor()
                    var marker = L.marker([-7.2096, 109.9015], {
                        icon: L.divIcon({
                            className: 'my-custom-pin'
                            , iconAnchor: [0, 24]
                            , labelAnchor: [-6, 0]
                            , popupAnchor: [0, -36]
                            , html: '<span class="fa-stack fa-2x">' +
                                '<i class="fa fa-circle fa-stack-2x" style="color:' + getRandomColor() + '"></i>' +
                                '<i class="fa fa-map-marker fa-stack-1x fa-inverse"></i>' +
                                '</span>'
                        })
                    }).addTo(map);
                }
                
                

                    
                // popup livewire click
                polygon.bindPopup(
                    '<b>ID</b> : ' + item['id'] + '<br>' +
                    "<b>Desa : </b>" + item['nama_desa'] + "<br>" +
                    "<b>Pemilik petas : </b>" + item['nama_pemiliklahan'] + "<br>" +
                    "<b>Jenis Tanah : </b>" + item['jenis_tanah'] + "<br>" +
                    "<b>Ketinggian : </b>" + item['ketinggian'] + " mdpl" + "<br>" +
                    "<b>Kelembaban : </b>" + item['kelembaban'] + "%<br>" +
                    "<b>Luas petas : </b>" + item['luas_lahan'] + " m<sup>2</sup>" + "<br>"
                );
            });


            map.on('pm:create', function (e) {
                var layer = e.layer;
                var type = e.shape;
                var data = layer.toGeoJSON();
                var dataString = JSON.stringify(data);
                @this.set('batas_lahan', dataString);
            });
            // end maps leaflet geoman draw

            // end tampilkan data dari database
            // maps leaflet geoman edit
            map.on('pm:edit', function (e) {
                var layer = e.layer;
                var type = e.shape;
                var data = layer.toGeoJSON();
                var dataString = JSON.stringify(data);
                @this.set('batas_lahan', dataString);
            });
            // end maps leaflet geoman edit

            // maps leaflet geoman delete
            map.on('pm:remove', function (e) {
                var layer = e.layer;
                var type = e.shape;
                var data = layer.toGeoJSON();
                var dataString = JSON.stringify(data);
                @this.set('batas_lahan', dataString);
            });
            // end maps leaflet geoman delete

            // maps leaflet geoman draw polygon
            map.on('pm:drawstart', function (e) {
                var layer = e.layer;
                var type = e.shape;
                var data = layer.toGeoJSON();
                var dataString = JSON.stringify(data);
                @this.set('batas_lahan', dataString);
            });
            // end maps leaflet geoman draw polygon

            // maps leaflet geoman edit polygon
            map.on('pm:editstart', function (e) {
                var layer = e.layer;
                var type = e.shape;
                var data = layer.toGeoJSON();
                var dataString = JSON.stringify(data);
                @this.set('batas_lahan', dataString);
            });
            // end maps leaflet geoman edit polygon

            // maps leaflet geoman delete polygon
            map.on('pm:deletestart', function (e) {
                var layer = e.layer;
                var type = e.shape;
                var data = layer.toGeoJSON();
                var dataString = JSON.stringify(data);
                @this.set('batas_lahan', dataString);
            });
        </script>
</div>
