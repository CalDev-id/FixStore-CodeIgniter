<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PembelianModel;
use App\Models\ProductModel;

class Pembelian extends BaseController
{
    public function index()
    {
        $model = new PembelianModel();
        $data['orders'] = $model->findAll();

        return view('pembelian', [
            'orders' => $model->findAll(),
            'client' => $model->countAllResults(),
            'sales' => $model->selectSum('price')->get()->getRow(),
            'productsum' => $model->countAllResults(),
        
        ]);
        // return view('read', $data);
    }
    public function indexReport()
    {
        $model = new PembelianModel();
        $data['orders'] = $model->findAll();

        return view('Report', [
            'orders' => $model->findAll(),
            'client' => $model->countAllResults(),
            'sales' => $model->selectSum('price')->get()->getRow(),
            'productsum' => $model->countAllResults(),
        
        ]);
        // return view('read', $data);
    }

    public function create()
    {
        $model = new ProductModel();
        $data['product'] = $model->findAll();
        return view('createPembelian', $data);
    }

    public function store()
    {
        $model = new PembelianModel();

        $data = [
            'item_name' => $this->request->getVar('item_name'),
            'price' => $this->request->getVar('price'),
            'address' => $this->request->getVar('address'),
            'qty' => $this->request->getVar('qty'), 
            'name' => $this->request->getVar('name'), 
        ];
        // $imageFile = $this->request->getFile('car_image');
        // $newName = $imageFile->getRandomName();
        // $imageFile->move('image/orders', $newName);
        // $data['car_image'] = 'image/orders' . $newName;

        $model->insert($data);

        return redirect()->to('/pembelian');
    }

    public function edit($id)
    {
        $model = new PembelianModel();
        $data['order'] = $model->find($id);

        return view('editPembelian', [
            'order' => $model->find($id),
            'product' => $model->findAll(),
        
        ]);
    }

    public function update()
    {
        $model = new PembelianModel();

        $id = $this->request->getVar('id');

        $data = [
            'item_name' => $this->request->getVar('item_name'),
            'price' => $this->request->getVar('price'),
            'address' => $this->request->getVar('address'),
            'qty' => $this->request->getVar('qty'), 
            'name' => $this->request->getVar('name'), 
        ];

        $model->update($id, $data);

        return redirect()->to('/pembelian');
    }

    public function delete($id)
    {
        $model = new PembelianModel();
        $model->delete($id);

        return redirect()->to('/pembelian');
    }
}
