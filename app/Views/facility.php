<?php $this->extend('layout/Master'); ?>
<?php $this->section('content'); ?>
<div class="facility-list">
    <b class="facility-list-title">FASILITAS</b>
    <ul class="facility-list-table">
        <?php 
        // Definisikan array fasilitas dengan nama file gambar dan nama fasilitas yang sesuai
        $fasilitas_data = [
            ["nama" => "Farmasi", "image" => "farmasi.jpeg"],
            ["nama" => "Koridor Rawat Inap", "image" => "koridor rawat inap.jpeg"],
            ["nama" => "Ruang Laboratorium", "image" => "lab.jpeg"],
            ["nama" => "Ruang MBTS", "image" => "mbts.jpeg"],
            ["nama" => "Ruang Poli Gigi", "image" => "poli gigi.jpeg"],
            ["nama" => "Poli Umum", "image" => "poli umum.jpeg"],
            ["nama" => "Ruang Rawat Inap", "image" => "rawat inap.jpeg"],
            ["nama" => "Ruang Pelayanan Ibu dan Anak", "image" => "ruang pelayanan ibu dan anak.jpeg"],
            ["nama" => "Ruang UGD", "image" => "ruang ugd.jpeg"],
            ["nama" => "Ruang USG", "image" => "ruang usg.jpeg"]
        ];
        foreach ($fasilitas_data as $datas) { ?>
            <li>
                <div class="template-facility">
                    <!-- Ganti base64 image dengan gambar dari folder -->
                    <div class="template-facility-image-wrapper">
                        <img src="<?= base_url('assets/img/fasilitas/'.$datas["image"]); ?>" alt="<?= $datas["nama"]; ?>">
                    </div>
                    <b class="template-facility-nama"><?= $datas["nama"]; ?></b>
                </div>
            </li>
        <?php }; ?>
    </ul>
</div>
<div class="facility-detil"></div>
<?php $this->endSection(); ?>
