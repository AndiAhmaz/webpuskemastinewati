<?php $this->extend('layout/Master'); ?>
<?php $this->section('content'); ?>
<div class="body">
    <div class="VisiMisi">
        <div class="Visi">
            <b>Visi</b>
            <p>Puskesmas Tinewati yang berkeadilan untuk mencapai masyarakat yang sehat dan mandiri</p>
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