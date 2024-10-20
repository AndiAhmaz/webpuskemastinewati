<?php $this->extend('layout/Master'); ?>
<?php $this->section('content'); ?>
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
    <div class="VisiMisi">
        <div class="Visi">
            <b>Visi</b>
            <p>Puskesmas Tinewati yang berkeadilan untuk mencapai <br>
            masyarakat yang sehat dan mandiri</p>
        </div>
        <div class="Misi">
            <b>Misi</b>
            <ol type="1">
                <li>Menyelanggarakan sumber daya kesehatan yang terstandar dan bermutu</li>
                <li>Mendukung kemandirian masyarakat untuk berperilaku hidup bersih dan sehat</li>
                <li>Meningkatkan mutu pelayanan kesehatan yang merata, terjangkau dan berkeadilan</li>
            </ol>
        </div>
    </div>
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
    <div class="background-gradient">
        <div class="Nilai">
            <div>
                <img src="<?= asset_url(); ?>img/logos/male_doctor.png">
                <b>Moto</b>
                <p>"Sahabat Menuju Sehat"</p>
            </div>
            <div>
                <img src="<?= asset_url(); ?>img/logos/Hospitale.png">
                <b>Budaya Kerja</b>
                <p>"SEHATI"</p>
                <div>
                    <p><strong>Se</strong>nyum</p>
                    <p><strong>Ha</strong>ndal</p>
                    <p><strong>T</strong>eliti</p>
                    <p><strong>I</strong>khlas</p>
                </div>
            </div>
            <div>
                <img src="<?= asset_url(); ?>img/logos/PenPaper.png">
                <b>Tata Nilai</b>
                <p>"HEBAT"</p>
                <div>
                    <p><strong>H</strong>armonis</p>
                    <p><strong>E</strong>fisien</p>
                    <p><strong>B</strong>ermutu</p>
                    <p><strong>A</strong>dil</p>
                    <p><strong>T</strong>anggap</p>
                </div>
            </div>
        </div>
        <div class="devider">
            <img src="<?= asset_url(); ?>img/logos/quote2.png">
            <b>---------------------</b>
            <img src="<?= asset_url(); ?>img/logos/Group.png">
            <b>---------------------</b>
            <img src="<?= asset_url(); ?>img/logos/quote1.png">
        </div>
        <div class="struktur">
            <b class="struktur title">Struktur Organisasi</b>
            <a href="<?= asset_url(); ?>img/profile/Struktur organisasi baru Permmenkes 75( SOTK) - Copy.pdf" target="_blank" rel="noopener noreferrer"><img src="<?= asset_url(); ?>img/profile/Struktur organisasi baru Permmenkes 75( SOTK) - Copy_pages-to-jpg-0001.jpg" alt="<?= asset_url(); ?>img/default/template_image.png"></a>
        </div>
    </div>
</div>
<?php $this->endSection(); ?>