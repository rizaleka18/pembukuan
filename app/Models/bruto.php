<?php

namespace App\Models;

use CodeIgniter\Model;

class bruto extends Model
{
    protected $table      = 'tb_bruto_hr';
    protected $primaryKey = 'id_bruto';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['id_bruto', 'id_user', 't_hrg_j', 't_diskon', 't_hpp', 'tgl_input'];
}
