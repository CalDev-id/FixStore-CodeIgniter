<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PegawaiModel;


class Pegawai extends BaseController
{
    public function index()
    {
        $model = new PegawaiModel();
        $data['orders'] = $model->findAll();

        return view('pegawai', $data);
        // return view('read', $data);
    }

    public function create()
    {
        return view('createPegawai');
    }

    public function store()
    {
        $model = new PegawaiModel();

        $data = [
            'name' => $this->request->getVar('name'),
            'age' => $this->request->getVar('age'),
            'address' => $this->request->getVar('address'),
            
        ];
        // $imageFile = $this->request->getFile('car_image');
        // $newName = $imageFile->getRandomName();
        // $imageFile->move('image/orders', $newName);
        // $data['car_image'] = 'image/orders' . $newName;

        $model->insert($data);

        return redirect()->to('/pegawai');
    }

    public function edit($id)
    {
        $model = new PegawaiModel();
        $data['order'] = $model->find($id);

        return view('editPegawai', $data);
    }

    public function update()
    {
        $model = new PegawaiModel();

        $id = $this->request->getVar('id');

        $data = [
            'name' => $this->request->getVar('name'),
            'age' => $this->request->getVar('age'),
            'address' => $this->request->getVar('address'),
            
        ];

        $model->update($id, $data);

        return redirect()->to('/pegawai');
    }

    public function delete($id)
    {
        $model = new PegawaiModel();
        $model->delete($id);

        return redirect()->to('/pegawai');
    }
}
