<?php $this->extend('layout/Master'); ?>
<?php $this->section('content'); ?>
<div class="artikel">
    <!-- Tambahkan judul artikel di kiri atas -->
    <h1 class="artikel-title">ACTIVITY ARTICLES</h1>
    <div class="artikel-list">
        <?php 
        // Definisikan array artikel dengan path gambar dan data lainnya
        $artikel = [
            ["title" => "KUNJUNGAN RIDWAN KAMIL", "description" => "Gubernur Jawa Barat (Jabar) memantau Puskesmas Tinewati di 
            Kecamatan Singaparna, Kabupaten Tasikmalaya, Rabu (20/1). 
            Ia mengapresiasi langkah Pemerintah Kabupaten (Pemkab) 
            Tasikmalaya yang menyediakan tempat isolasi untuk pasien 
            Covid-19 di puskesmas. Menurut dia, tingginya tingkat hunian ruang isolasi di berbagai 
            rumah sakit salah satunya disebabkan belum banyak puskesmas 
            yang memiliki ruang isolasi. Selain itu, pola pikir masyarakat juga 
            masih mengandalkan rumah sakit untuk tempat isolasi Covid-19. 
            Padahal, puskesmas juga dapat dimanfaatkan sebagai tempat isolasi, 
            khususnya yang memiliki ruang rawat inap.Dengan menjadikan puskesmas sebagai tempat isolasi pasien Covid-19, ketersediaan ruang isolasi di rumah sakit akan tetap aman. Seharunya, lanjut dia, hanya pasien Covid-19 dengan gejala sedang hingga berat yang diisolasi di rumah sakit.

            'Kejadian meninggal di taksi karena rumah sakit penuh sudah terjadi di Depok. Ini kita harap tak terjaji di Tasik. Karena itu, pasien Covid-19 bergejala ringan sebaiknya dipindahkan ke puskesmas,' kata dia.
            
            Emil mengatakan, Pemerintah Provinsi (Pemprov) akan mengupayakan agar fasilitas puskesmas di setiap daerah seperti Puskesmas Tinewati. Pihaknya siap menambah fasilitas di ruang isolasi seperti tempat tidur dan penunjang lainnya bagi puskesmas yang kekurangan peralatan.", "image" => "Ridwan Kamil.jpg"],
            ["title" => "BANTUAN SOSIAL UNTUK WARGA", "description" => "PKM Tinewati memberikan bantuan kepada warga terdampak pandemi.Gambar di atas menampilkan sebuah kegiatan sosial yang diinisiasi oleh Puskesmas Tinewati sebagai bentuk dukungan terhadap masyarakat yang terdampak pandemi COVID-19. Terlihat lima orang, yang terdiri dari petugas kesehatan, relawan, dan perwakilan masyarakat, semuanya mengenakan masker sebagai langkah pencegahan penularan virus. Salah satu petugas terlihat menyerahkan paket bantuan berupa sembako dan kebutuhan pokok lainnya kepada seorang warga, simbol komitmen Puskesmas dalam meringankan beban masyarakat selama masa sulit pandemi.

            Di latar belakang, kita bisa melihat gedung Puskesmas Tinewati dengan papan dokumentasi kegiatan yang menunjukkan berbagai aktivitas pelayanan kesehatan yang telah dilakukan sebelumnya. Warna-warni bangunan yang cerah memberikan nuansa positif, meski kegiatan ini dilakukan dalam suasana pandemi. Bantuan yang diberikan ini adalah bagian dari program solidaritas untuk membantu masyarakat yang kesulitan secara ekonomi akibat pembatasan sosial dan dampak langsung dari COVID-19.
            
            Kegiatan seperti ini sangat penting untuk memperkuat hubungan antara fasilitas kesehatan dan masyarakat, sekaligus menunjukkan peran aktif Puskesmas dalam menjaga kesehatan serta kesejahteraan warga di sekitar wilayah mereka.", "image" => "Bantuan.jpg"]
        ];
        foreach ($artikel as $datas) { ?>
            <div class="template-artikel">
                <div class="template-artikel-image-wrapper">
                    <!-- Ganti base64 image dengan gambar dari folder -->
                    <img src="<?= base_url('assets/img/artikel/'.$datas["image"]); ?>" alt="<?= $datas["title"]; ?>">
                </div>
                <div class="template-artikel-content">
                    <b class="template-artikel-content-title"><?= $datas["title"]; ?></b>
                    <p class="template-artikel-content-description"><?= $datas["description"]; ?></p>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<?php $this->endSection(); ?>
