<?php

namespace App\Controllers;

use App\Models\KasModel;

class KasController extends BaseController
{
    protected $kas;

    public function __construct()
    {
        $this->kas = new KasModel();
    }

    public function index()
    {
        $data['kas'] = $this->kas->findAll();
        return view('kas/index', $data);
    }

    public function tambah()
    {
        return view('kas/tambah');
    }

    public function simpan()
    {
        $this->kas->save([
            'tanggal' => $this->request->getPost('tanggal'),
            'jenis' => $this->request->getPost('jenis'),
            'keterangan' => $this->request->getPost('keterangan'),
            'jumlah' => $this->request->getPost('jumlah'),
        ]);
        return redirect()->to('/kas');
    }

    public function edit($id)
    {
        $data['kas'] = $this->kas->find($id);
        return view('kas/edit', $data);
    }

    public function update($id)
    {
        $this->kas->update($id, [
            'tanggal' => $this->request->getPost('tanggal'),
            'jenis' => $this->request->getPost('jenis'),
            'keterangan' => $this->request->getPost('keterangan'),
            'jumlah' => $this->request->getPost('jumlah'),
        ]);
        return redirect()->to('/kas');
    }

    public function hapus($id)
    {
        $this->kas->delete($id);
        return redirect()->to('/kas');
    }
}
