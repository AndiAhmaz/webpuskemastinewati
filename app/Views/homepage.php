<?php $this->extend('layout/Master'); ?>
<?php $this->section('content'); ?>
<?= $this->include('include/header'); ?>
<style>
.schedule-cards {
    display: flex;
    justify-content: space-around;
    gap: 30px;
    margin: 40px 20px;
    padding: 0 20px;
    perspective: 1000px; /* Memberikan efek 3D */
}

.schedule-card {
    flex: 1;
    max-width: 400px;
    background: linear-gradient(145deg, #ffffff, #f5f5f5);
    border-radius: 20px;
    padding: 25px;
    box-shadow: 
        20px 20px 60px #d9d9d9,
        -20px -20px 60px #ffffff,
        inset 0 0 20px rgba(255,255,255,0.5);
    transition: all 0.3s ease;
    transform-style: preserve-3d;
    position: relative;
    overflow: hidden;
}

.schedule-card:hover {
    transform: translateY(-10px) rotateX(5deg);
    box-shadow: 
        25px 25px 70px #d1d1d1,
        -25px -25px 70px #ffffff,
        inset 0 0 30px rgba(255,255,255,0.7);
}

.schedule-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(
        90deg,
        transparent,
        rgba(255, 255, 255, 0.2),
        transparent
    );
    transition: 0.5s;
}

.schedule-card:hover::before {
    left: 100%;
}

.schedule-card h3 {
    color: #e91e63;
    text-align: center;
    margin-bottom: 20px;
    font-weight: bold;
    font-size: 22px;
    text-transform: uppercase;
    letter-spacing: 2px;
    position: relative;
    padding-bottom: 10px;
}

.schedule-card h3::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 50px;
    height: 3px;
    background: linear-gradient(90deg, #e91e63, #ff6090);
    border-radius: 2px;
}

.schedule-card ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.schedule-card li {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px 0;
    border-bottom: 1px solid rgba(238, 238, 238, 0.5);
    transition: all 0.3s ease;
}

.schedule-card li:hover {
    background: rgba(233, 30, 99, 0.05);
    padding-left: 10px;
    padding-right: 10px;
    border-radius: 8px;
}

.schedule-card li:last-child {
    border-bottom: none;
}

.schedule-card .day {
    font-weight: 600;
    color: #333;
    font-size: 16px;
    display: flex;
    align-items: center;
}

.schedule-card .day::before {
    content: '•';
    color: #e91e63;
    margin-right: 8px;
    font-size: 20px;
}

.schedule-card .time {
    color: #666;
    font-weight: 500;
    background: linear-gradient(145deg, #f5f5f5, #ffffff);
    padding: 5px 12px;
    border-radius: 15px;
    box-shadow: 
        3px 3px 6px #d9d9d9,
        -3px -3px 6px #ffffff;
}

/* Tambahan untuk efek glowing pada hover */
.schedule-cards:hover .schedule-card:not(:hover) {
    transform: scale(0.98);
    filter: brightness(0.95);
}

.registration {
    border-top: 5px solid #e91e63;
}

.service {
    border-top: 5px solid #2196f3;
}

.service h3 {
    color: #2196f3;
}

.service h3::after {
    background: linear-gradient(90deg, #2196f3, #64b5f6);
}

.service .day::before {
    color: #2196f3;
}

@media (max-width: 768px) {
    .dokter-list {
        padding: 20px 0 !important;
        justify-content: center !important;
    }

    .dokter-list>ul {
        justify-content: space-around !important;
    }

    .template-artikel-image-wrapper>img {
        transform: translate(-50%, 0) !important;
    }

    .schedule-cards {
        flex-direction: column;
        padding: 0 15px;
        perspective: none;
    }
    
    .schedule-card {
        margin-bottom: 20px;
        width: 100%;
        transform: none !important;
    }

    .schedule-card h3 {
        font-size: 18px;
    }

    .schedule-card:hover {
        transform: translateY(-5px) !important;
    }

    .schedule-cards:hover .schedule-card:not(:hover) {
        transform: none;
        filter: none;
    }

    .schedule-card .day,
    .schedule-card .time {
        font-size: 14px;
    }
}
</style>

<div class="body">
    <ul>
        <li>
            <div class="introduction">
                <ul>
                    <li><img src="<?= asset_url(); ?>img/default/introduction.png" alt=""></li>
                    <li>
                        <ul class="introduction description">
                            <li class="no-mobile"><b class="introduction description title">ABOUT</b></li>
                            <li>
                                <p class="introduction description desc">Siapa sih yang gak kenal Puskesmas Tinewati! Salah satu Puskesmas terbaik di kabupaten Tasikmalaya. Puskesmas berfokus pada pencegahan, pengobatan, dan pemulihan kesehatan dengan melibatkan berbagai profesi kesehatan seperti dokter, perawat, bidan, apoteker, dan ahli gizi. </p>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </li>
                <!-- Menambahkan card jam pendaftaran dan pelayanan -->
        <li>
            <div class="schedule-cards">
                <div class="schedule-card registration">
                    <h3>JAM PENDAFTARAN</h3>
                    <ul>
                        <li>
                            <span class="day">SENIN - KAMIS</span>
                            <span class="time">08.00 - 12.00 WIB</span>
                        </li>
                        <li>
                            <span class="day">JUM'AT</span>
                            <span class="time">08.00 - 10.30 WIB</span>
                        </li>
                        <li>
                            <span class="day">SABTU</span>
                            <span class="time">08.00 - 11.00 WIB</span>
                        </li>
                    </ul>
                </div>
                <div class="schedule-card service">
                    <h3>JAM PELAYANAN</h3>
                    <ul>
                        <li>
                            <span class="day">SENIN - KAMIS</span>
                            <span class="time">08.30 - 13.00 WIB</span>
                        </li>
                        <li>
                            <span class="day">JUM'AT</span>
                            <span class="time">08.30 - 11.00 WIB</span>
                        </li>
                        <li>
                            <span class="day">SABTU</span>
                            <span class="time">08.30 - 12.00 WIB</span>
                        </li>
                    </ul>
                </div>
            </div>
        </li>
        <li>
        <li>
            <div class="dokter-list"><b class="dokter-list title">KEPALA PUSKESMAS</b>
            <ul class="doctor-list">
            <div class="template-doctor">
                <div class="template-doctor-image-wrapper">
                    <img src="assets/img/ketua/1.jpg" alt="Kapus Image"></img>
                </div>
                <b class="template-doctor-nama">dr. Diah Narista, S.T., MM, M.Kes</b>
            </div>
        </ul>
            </div>
            <div class="dokter-list"><b class="dokter-list title">Kasubag TU</b>
            <ul class="doctor-list">
            <div class="template-doctor">
                <div class="template-doctor-image-wrapper">
                <img src="assets/img/ketua/2.jpeg" alt="Katu Image"></img>
                </div>
                <b class="template-doctor-nama">Akbar Bayuwiry, S.IP., MT</b>
            </div>
        </ul>
            </div>
        </li>
        <li>
            <div class="facility-button">
                <a href="/fasilitas">
                    <img src="<?= asset_url(); ?>img/tinewati/Fasilitas depan.jpeg" alt=""></img>
                    <div>FACILITY AND ROOM</div>
                </a>
            </div>
        </li>
    </ul>
</div>
<?= $this->include('include/article'); ?>
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
<?= $this->include('include/FAQ'); ?>
<?= $this->include('include/govLogo'); ?>
<?php $this->endSection(); ?>