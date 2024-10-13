<?php

namespace App\Models;

use CodeIgniter\Model;

class StrukturModel extends Model
{
    protected $table = 'struktur';
    protected $primaryKey = 'nama';
    protected $useTimestamps = true;
}
