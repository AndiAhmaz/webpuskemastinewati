<?php $this->extend('layout/Master'); ?>
<?php $this->section('content'); ?>
<div></div>
<div class="ketua">
<div class="dokter-list">
        <b class="dokter-list title">KEPALA PUSKESMAS</b>
        <ul class="doctor-list">
            <div class="template-doctor">
                <div class="template-doctor-image-wrapper">
                    <img src="assets/img/ketua/1.jpg" alt="Kapus Image"></img>
                </div>
                <b class="template-doctor-nama">dr. Diah Narista, S.T., MM, M.Kes</b>
            </div>
        </ul>
    </div>
    <div class="dokter-list">
        <b class="dokter-list title">KASUBAG TU</b>
        <ul class="doctor-list">
            <div class="template-doctor">
                <div class="template-doctor-image-wrapper">
                <img src="assets/img/ketua/2.jpeg" alt="Katu Image"></img>
                </div>
                <b class="template-doctor-nama">Akbar Bayuwiry, S.IP., MT</b>
            </div>
        </ul>
    </div>
</div>
<div class="dokter-list">
        <b class="dokter-list title">DOKTER</b>
        <ul class="doctor-list">
            <li>
                <div class="template-doctor">
                    <div class="template-doctor-image-wrapper">
                    <img src="assets/img/dokter/3 dr. Hj. Saidah, MH.Kes.jpg" alt="dokter"></img>
                    </div>
                    <b class="template-doctor-nama">Hj. Saidah, MH.Kes</b>
                </div>
            </li>
            <li>
                <div class="template-doctor">
                    <div class="template-doctor-image-wrapper">
                    <img src="assets/img/dokter/4 dr. H. Ade Taufiq Ahmad.jpg" alt="dokter"></img>
                    </div>
                    <b class="template-doctor-nama">drg. Rizki Mutia Rachnadani</b>
                </div>
                <li>
                <div class="template-doctor">
                    <div class="template-doctor-image-wrapper">
                    <img src="assets/img/dokter/drg. Rizki Mutia Rachnadani.jpeg" alt="dokter"></img>
                    </div>
                    <b class="template-doctor-nama">drg. Ninik Ratih Sumarhadi</b>
                </div>
            </li>
            </li>
        </ul>
    </div>
    <div class="dokter-list">
        <b class="dokter-list title">PERAWAT</b>
        <ul class="doctor-list">
            <li>
                <div class="template-doctor">
                    <div class="template-doctor-image-wrapper">
                    <img src="assets/img/dokter/drg. Rizki Mutia Rachnadani.jpeg" alt="dokter"></img>
                    </div>
                    <b class="template-doctor-nama">Anggi Tisnabudi, S.Kep., Ners</b>
                </div>
            </li>
            <li>
                <div class="template-doctor">
                    <div class="template-doctor-image-wrapper">
                    <img src="assets/img/dokter/drg. Rizki Mutia Rachnadani.jpeg" alt="dokter"></img>
                    </div>
                    <b class="template-doctor-nama">Eno Herwati, S.Kep., Ners</b>
                </div>
            </li>
            <li>
                <div class="template-doctor">
                    <div class="template-doctor-image-wrapper">
                    <img src="assets/img/dokter/drg. Rizki Mutia Rachnadani.jpeg" alt="dokter"></img>
                    </div>
                    <b class="template-doctor-nama">M. Syafarudin, S.Kep.</b>
                </div>
            </li>
        </ul>
    </div>
<div class="dokter-list">
    <b class="dokter-list title">FARMASI</b>
    <ul class="doctor-list">
        <?php if (!empty($farmasi)) {
            foreach ($farmasi as $datas) { ?>
                <li>
                    <div class="template-doctor">
                        <div class="template-doctor-image-wrapper">
                            <img src="data:image/<?= $datas["extension"]; ?>;charset=utf8;base64,<?= base64_encode($datas["image"]); ?>" alt="<?= asset_url(); ?>img/default/template_image.png">
                        </div>
                        <b class="template-doctor-nama"><?= $datas["nama"]; ?></b>
                    </div>
                </li>
            <?php }; ?>
        <?php } else { ?>
            <li>
                <div class="template-doctor">
                    <div class="template-doctor-image-wrapper">
                        <img src="<?= asset_url(); ?>img/default/template_image.png"></img>
                    </div>
                    <b class="template-doctor-nama">Kategori Kosong</b>
                </div>
            </li>
        <?php } ?>
    </ul>
</div>
<div class="dokter-list">
    <b class="dokter-list title">LABORATORIUM</b>
    <ul class="doctor-list">
        <?php if (isset($lab)) { ?>
            <div class="template-doctor">
                <div class="template-doctor-image-wrapper">
                    <!-- <img src="data:image/<?php #$lab[0]["extension"]; ?>;charset=utf8;base64,<?php #base64_encode($lab[0]["image"]); ?>" alt="<?php #asset_url(); ?>img/default/template_image.png"></img> -->
                </div>
                <!-- <b class="template-doctor-nama"><?php #$lab[0]["nama"]; ?></b> -->
            </div>
        <?php } else { ?>
            <div class="template-doctor">
                <div class="template-doctor-image-wrapper">
                    <img src="<?= asset_url(); ?>img/default/template_image.png"></img>
                </div>
                <b class="template-doctor-nama">Kategori Kosong</b>
            </div>
        <?php } ?>
    </ul>
</div>
<div class="dokter-list">
    <b class="dokter-list title">BIDAN</b>
    <ul class="doctor-list">
        <?php if (!empty($bidan)) {
            foreach ($bidan as $datas) { ?>
                <li>
                    <div class="template-doctor">
                        <div class="template-doctor-image-wrapper">
                            <img src="data:image/<?= $datas["extension"]; ?>;charset=utf8;base64,<?= base64_encode($datas["image"]); ?>" alt="<?= asset_url(); ?>img/default/template_image.png">
                        </div>
                        <b class="template-doctor-nama"><?= $datas["nama"]; ?></b>
                    </div>
                </li>
            <?php }; ?>
        <?php } else { ?>
            <li>
                <div class="template-doctor">
                    <div class="template-doctor-image-wrapper">
                        <img src="<?= asset_url(); ?>img/default/template_image.png"></img>
                    </div>
                    <b class="template-doctor-nama">Kategori Kosong</b>
                </div>
            </li>
        <?php } ?>
    </ul>
</div>
<div class="dokter-list">
    <b class="dokter-list title">STAFF</b>
    <ul class="doctor-list">
        <?php if (!empty($staff)) {
            foreach ($staff as $datas) { ?>
                <li>
                    <div class="template-doctor">
                        <div class="template-doctor-image-wrapper">
                            <img src="data:image/<?= $datas["extension"]; ?>;charset=utf8;base64,<?= base64_encode($datas["image"]); ?>" alt="<?= asset_url(); ?>img/default/template_image.png">
                        </div>
                        <b class="template-doctor-nama"><?= $datas["nama"]; ?></b>
                    </div>
                </li>
            <?php }; ?>
        <?php } else { ?>
            <li>
                <div class="template-doctor">
                    <div class="template-doctor-image-wrapper">
                        <img src="<?= asset_url(); ?>img/default/template_image.png"></img>
                    </div>
                    <b class="template-doctor-nama">Kategori Kosong</b>
                </div>
            </li>
        <?php } ?>
    </ul>
</div>
<div class="dokter-list">
    <b class="dokter-list title">TIM IT</b>
    <ul class="doctor-list">
        <?php if (!empty($it)) {
            foreach ($it as $datas) { ?>
                <li>
                    <div class="template-doctor">
                        <div class="template-doctor-image-wrapper">
                            <img src="data:image/<?= $datas["extension"]; ?>;charset=utf8;base64,<?= base64_encode($datas["image"]); ?>" alt="<?= asset_url(); ?>img/default/template_image.png">
                        </div>
                        <b class="template-doctor-nama"><?= $datas["nama"]; ?></b>
                    </div>
                </li>
            <?php }; ?>
        <?php } else { ?>
            <li>
                <div class="template-doctor">
                    <div class="template-doctor-image-wrapper">
                        <img src="<?= asset_url(); ?>img/default/template_image.png"></img>
                    </div>
                    <b class="template-doctor-nama">Kategori Kosong</b>
                </div>
            </li>
        <?php } ?>
    </ul>
</div>
<div></div>
<?php $this->endSection(); ?>