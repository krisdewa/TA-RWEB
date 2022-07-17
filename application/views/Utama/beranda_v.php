<link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
<!-- FONT ASSISTANT -->
<link href="https://fonts.googleapis.com/css2?family=Assistant:wght@300&display=swap" rel="stylesheet">
<!-- AOS -->
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

<!-- CONTENT -->
<!-- <div class="top"></div> -->
<!-- untuk home -->
<section id="home" class="home pt-5 pb-3">
	<div class="container">
		<div class="kolom1 col-md-8">
			<div class="top"></div>
			<h2 data-aos="fade-up" data-aos-duration="3000">Selamat Datang Di Website</h2>
			<h4 class="text-light" data-aos="fade-up" data-aos-duration="3000">Sistem Informasi Jurnal dan Skripsi <br> Prodi
				Informatika</h4>
			<p class="desk col-md-5" data-aos="fade-up" data-aos-duration="3000">Jangan khawatir, kami akan selalu ada 24 jam
				melayani anda, dengan pelayanan yang profesional sesuai dengan bidangnya</> <br>
				<p data-aos="fade-up" data-aos-duration="3000"><a href="Utama" class="telusuri">Selengkapnya</a></p>
		</div>
		<div class="col-md-4">
            <img src="<?= base_url('image/gambar1.png') ?>" alt="" width="700px" style="position: absolute; left: 800px; top: 50px;" data-aos="fade-left" data-aos-anchor="#example-anchor"
			data-aos-offset="500" data-aos-duration="1500">
        </div>
	</div>
</section>

<!-- untuk service -->
<section id="service" class="pt-5 pb-3">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="gambar"><img src="<?= base_url('image/gambar2.png') ?>" alt="" width="500" style="top: 200px;" data-aos="fade-right" data-aos-offset="300"
					data-aos-duration="1500">
				</div>
			</div>
			<div class="col-md-8">
				<div class="kolom2">
					<!-- <p class="deskripsi">You Will Need This</p> -->
					<h2 class="h22" data-aos="fade-up" data-aos-duration="3000">Jurnal & Skripsi</h2>
					<p class="desk" data-aos="fade-up" data-aos-duration="3000">Kami menyediakan layanan referensi untuk Anda,
						menambah wawasan tentang Jurnal dan skripsi</p>
					<p data-aos="fade-up" data-aos-duration="3000"><a id="s" href="Utama" class="telusuri2">Selengkapnya</a></p>
				</div>
			</div>
		</div>
	</div>
</section>
<!--  -->

<!-- AOS -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
	AOS.init();

</script>
