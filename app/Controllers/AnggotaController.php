<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AnggotaModel;

class AnggotaController extends BaseController
{
	function index()
    {
        $_SERVER['navAktif'] = 'anggota';
        return view('dashboard/anggota/index');
    }

	
	function create()
    {
        $_SERVER['navAktif'] = 'anggota';
        return view('dashboard/anggota/form');
    }

	function store() {
		$model = model(AnggotaModel::class);
		// insert new data
		try {
			$model->insert([
				'nama' => $this->request->getPost('nama') ?? '',
				'email' => $this->request->getPost('email') ?? '',
				'alamat' => $this->request->getPost('alamat') ?? '',
				'telepon' => $this->request->getPost('telepon') ?? '',
			]);

			return $this->response->setStatusCode(201)->setJSON([
				'message' => 'Data berhasil ditambahkan'
			]);
		} catch (\Throwable $th) {
			var_dump($th->getMessage());
			return $this->response->setStatusCode(500)->setJSON([
				'message' => 'Data gagal ditambahkan'
			]);
		}
	}
}
