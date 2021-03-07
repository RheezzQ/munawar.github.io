<?php

namespace App\Controllers;

use App\Models\ModelRuangan;

class Ruangan extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->ModelRuangan = new ModelRuangan();
    }
    public function index()
    {
        $data = [
            'title' => 'Ruangan',
            'ruangan' => $this->ModelRuangan->allData(),
            'isi'    => 'admin/ruangan/v_index',
        ];
        return view('layout/v_wrapper', $data);
    }
}
