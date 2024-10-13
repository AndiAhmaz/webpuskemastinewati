<?php

namespace App\Controllers;

use App\Models\ArtikelModel;
use App\Models\FasilitasModel;
use App\Models\StrukturModel;
use CodeIgniter\CLI\Console;

class Main extends BaseController
{

    protected $strukturModel;
    protected $fasilitasModel;
    protected $artikelModel;
    public function __construct()
    {
        $this->strukturModel = new StrukturModel();
        $this->fasilitasModel = new FasilitasModel();
        $this->artikelModel = new ArtikelModel();
    }

    private function filterData($arr, $val, $col)
    {
        $filtered = array_filter($arr, function ($item) use ($col, $val) {
            if (array_key_exists($col, $item) && $item[$col] === $val) {
                return $item;
            }
            return false;
        });

        return array_values($filtered);
    }

    public function homepage()
    {
        $struktur_Data = $this->strukturModel->findAll();
        $kapus = $this->filterData($struktur_Data, "KAPUS", "posisi");
        $katu = $this->filterData($struktur_Data, "KASUBAG TU", "posisi");
        $artikel_data = $this->artikelModel->findAll();

        $data = [
            'title' => 'Home',
            'homepage' => true,
            'profile' => false,
            'structure' => false,
            'facility' => false,
            'article' => false,
            'kapus' => $kapus,
            'katu' => $katu,
            'artikel' => array_slice($artikel_data, -2, 2, true)
        ];

        echo view('homepage', $data);
    }

    public function structure()
    {
        $struktur_Data = $this->strukturModel->findAll();
        $kapus = $this->filterData($struktur_Data, "KAPUS", "posisi");
        $katu = $this->filterData($struktur_Data, "KASUBAG TU", "posisi");
        $dokter = $this->filterData($struktur_Data, "DOKTER", "posisi");
        $perawat = $this->filterData($struktur_Data, "PERAWAT", "posisi");
        $farmasi = $this->filterData($struktur_Data, "FARMASI", "posisi");
        $lab = $this->filterData($struktur_Data, "LAB", "posisi");
        $bidan = $this->filterData($struktur_Data, "BIDAN", "posisi");
        $staff = $this->filterData($struktur_Data, "STAFF", "posisi");
        $it_guy = $this->filterData($struktur_Data, "IT", "posisi");

        $data = [
            'title' => 'Struktur',
            'homepage' => false,
            'profile' => false,
            'structure' => true,
            'facility' => false,
            'article' => false,
            'kapus' => $kapus,
            'katu' => $katu,
            'dokter' => $dokter,
            'perawat' => $perawat,
            'farmasi' => $farmasi,
            'lab' => $lab,
            'bidan' => $bidan,
            'staff' => $staff,
            'it' => $it_guy
        ];

        echo view('structure', $data);
    }

    public function facility()
    {
        $data_facility = $this->fasilitasModel->findAll();
        $data = [
            'title' => 'Fasilitas',
            'homepage' => false,
            'profile' => false,
            'structure' => false,
            'facility' => true,
            'article' => false,
            'fasilitas_data' => $data_facility
        ];
        echo view('facility', $data);
    }

    public function article()
    {
        $artikel_data = $this->artikelModel->findAll();

        $data = [
            'title' => 'Artikel',
            'homepage' => false,
            'profile' => false,
            'structure' => false,
            'facility' => false,
            'article' => true,
            'artikel' => $artikel_data
        ];
        echo view('article', $data);
    }

    public function profile()
    {
        $data = [
            'title' => 'Artikel',
            'homepage' => false,
            'profile' => true,
            'structure' => false,
            'facility' => false,
            'article' => false
        ];
        echo view('profile', $data);
    }
}
