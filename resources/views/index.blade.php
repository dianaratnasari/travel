@extends('layouts/main')

@section('main')

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex flex-column justify-content-center align-items-center mb-5">
    <div class="container" data-aos="fade-in">

        <h1>Welcome to Zahra Travel</h1>
        <h2>Zahra Travel melayani jasa antar jemput dari wilayah Semarang tujuan Kebumen.
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptate non perspiciatis quo, possimus assumenda fugit fuga cupiditate, ut a modi vero aperiam. Dignissimos rem consectetur vero molestiae? </h2>

        <a href="https://wa.me/628891455073" type="submit" class="btn btn-primary btn-lg">
            Hubungi Kami
        </a>


    </div>
</section><!-- End Hero -->



<!-- ======= About Section ======= -->
<section id="about" class="about section-bg">
    <div class="container">

        <div class="row">
            <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative" data-aos="fade-right">
                <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox play-btn mb-4"></a>
            </div>

            <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
                <h4 data-aos="fade-up">About us</h4>
                <h3 data-aos="fade-up">Zahra Travel</h3>
                <p data-aos="fade-up">Zahra travel berdiri sejak tahun 2018. Bagi kami kenyamanan dan keselamatan penumpang itu paling utama. Oleh karena itu, kami menggunakan sopir handal yang telah berpengalaman dalam perjalanan.</p>
                <p data-aos="fade-up">Armada yang kami gunakan yaitu Xenia/Avanza. Penumpang dalam 1 mobil maksimal 7 orang. Hal ini dilakukan untuk kenyamanan penumpang. </p>
                <p data-aos="fade-up"> Zahra Travel melayani jasa antar jemput dari wilayah semarang menuju Magelang, Purworejo, dan Kebumen.</p>

            </div>
        </div>

    </div>
</section><!-- End About Section -->


<!-- ======= Services Section ======= -->
<section id="harga" class="harga">
    <div class="container">

        <div class="section-title">
            <h2 data-aos="fade-up">Rute dan Daftar Harga</h2>
        </div>


        <table class="table table-striped table-bordered" data-aos="fade-up" data-aos-delay="200">
            <thead class="table" style="background:#f8efec;">

                <tr class="text-center">
                    <th>#</th>
                    <th>Rute</th>
                    <th>Harga</th>
                </tr>

            </thead>
            <tbody class="text-center">
                <tr>
                    <td>1</td>
                    <td>Tembalang - Magelang</td>
                    <td>Rp. 90.000</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Tembalang - Purworejo</td>
                    <td>Rp. 100.000</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Tembalang - Kebumen</td>
                    <td>Rp. 150.000</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Ungaran - Magelang</td>
                    <td>Rp. 70.000</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Ungaran - Purworejo</td>
                    <td>Rp. 80.000</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Ungaran - Kebumen</td>
                    <td>120.000</td>
                <tr>
                <tr>
                    <td>7</td>
                    <td>Karangjati - Magelang</td>
                    <td>Rp. 60.000</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Karangjati - Purworejo</td>
                    <td>Rp. 70.000</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Karangjati - Kebumen</td>
                    <td>Rp. 100.000</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Bawen - Magelang</td>
                    <td>Rp. 50.000</td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>Bawen - Purworejo</td>
                    <td>Rp. 60.000</td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>Bawen - Kebumen</td>
                    <td>Rp. 90.000</td>
                </tr>
            </tbody>
        </table>

    </div>
</section><!-- End Services Section -->



<!-- ======= Form Pemesanan Section ======= -->
<section id="order" class="order section-bg">
    <div class="container">
        <div class="section-title">
            <h2 data-aos="fade-up">Form Pemesanan</h2>
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="300">
            <div class="col-lg-5 col-lg-12">
                <form method="post" action="/kirim" class="row g-2 justify-content-center">
                    @csrf

                    <div class="col-md-4 mb-3">
                        <label for="nama" class="form-label" style="font-size: 18px;">Nama</label>
                        <input type="text" class="form-control  @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}">
                        @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-4 mx-4 mb-3">
                        <label for="lberangkat" class="form-label" style="font-size: 18px;">lokasi keberangkatan</label>
                        <select class="form-select" name="lberangkat" id="lberangkat" required>
                            <option value="Tembalang">Tembalang</option>
                            <option value="Ungaran">Ungaran</option>
                            <option value="Karangjati">Karangjati</option>
                            <option value="Bawen">Bawen</option>
                            <option value="Magelang">Magelang</option>
                            <option value="Purworejo">Purworejo</option>
                            <option value="Kebumen">Kebumen</option>
                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="tanggal" class="form-label" style="font-size: 18px;">Tanggal Pergi</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ now()}}" required>

                    </div>
                    <div class="col-md-4 mx-4 mb-3">
                        <label for="lturun" class="form-label" style="font-size: 18px;">Pergi kemana?</label>
                        <select class="form-select" name="lturun" id="lturun" required>
                            <option value="Tembalang">Tembalang</option>
                            <option value="Ungaran">Ungaran</option>
                            <option value="Karangjati">Karangjati</option>
                            <option value="Bawen">Bawen</option>
                            <option value="Magelang">Magelang</option>
                            <option value="Purworejo">Purworejo</option>
                            <option value="Kebumen">Kebumen</option>
                        </select>

                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="jumlah" class="form-label" style="font-size: 18px;">Jumlah</label>
                        <input type="number" class="form-control  @error('nama') is-invalid @enderror" id="jumlah" name="jumlah" required value="{{ old('jumlah') }}">
                        @error('jumlah')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-4 mx-4 mb-3" style="margin-top: 40px;">
                        <button type="submit" class="btn btn-dark btn-lg">Send Message</button>
                    </div>


                </form>
            </div>
        </div>

    </div>
</section>




<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
    <div class="container">

        <div class="section-title">
            <h2 data-aos="fade-up">Picture</h2>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <img src="img/portfolio/xenia.jpg" class="img-fluid" alt="">
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <img src="img/portfolio/xenia3.jpg" class="img-fluid" alt="">
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <img src="img/portfolio/avanza.png" class="img-fluid" alt="">

            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <img src="img/portfolio/avanza2.jpg" class="img-fluid" alt="">
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <img src="img/portfolio/avanza3.jpg" class="img-fluid" alt="">
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <img src="img/portfolio/avanza4.png" class="img-fluid" alt="">
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <img src="img/portfolio/avanza5.jpg" class="img-fluid" alt="">
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <img src="img/portfolio/avanza6.jpeg" class="img-fluid" alt="">
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <img src="img/portfolio/avanza7.jpeg" class="img-fluid" alt="">
            </div>

        </div>

    </div>
</section><!-- End Portfolio Section -->

< <!--=======Pricing Section=======-->
    <section id="contact" class="contact section-bg">
        <div class="container">
            <div class="section-title">
                <h2 data-aos="fade-up">Syarat & Ketentuan</h2>
            </div>
            <div class="row">
                <div class="col-md-12" data-aos="fade-up">
                    <h6>1. Anak berusia 3 tahun atau lebih harus membayar biaya tiket penuh.</h6>
                    <h6>2. Penumpang dilarang membawa barang berbahaya, makanan atau minuman yang berbau menyengat.</h6>
                    <h6>3. Penumpang dilarang merokok didalam kendaraan.</h6>
                    <h6>4. Zahra Travel tidak bertanggung jawab atas barang-barang yang hilang atau tertukar.</h6>
                    <h6>5. Waktu keberangkatan, tipe kendaraan dan rute dapat berubah sewaktu-waktu.</h6>
                    <h6>6. Gratis 1 x perjalanan dengan mengumpulkan dan menunjukkan 10 tiket ke Supir.</h6>
                </div>
            </div>


        </div>
    </section><!-- End Pricing Section -->


    @endsection