<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\OrderModel;
use App\Models\PegawaiModel;
use App\Models\PembelianModel;
use App\Models\ProductModel;

class Orders extends BaseController
{
    public function index()
    {
        $model = new OrderModel();
        $data['orders'] = $model->findAll();
        $pegawai = new PegawaiModel();
        $product = new PembelianModel();

        $data['client'] = $model->countAllResults();

        return view('admin', [
            'pegawai' => $pegawai->findAll(),
            'orders' => $model->findAll(),
            'client' => $model->countAllResults(),
            'sales' => $product->selectSum('price')->get()->getRow(),
            'product' => $product->countAllResults(),
        ]);
        
    }

    public function create()
    {
        return view('pesan');
    }

    public function store()
    {
        $model = new OrderModel();

        $data = [
            'customer_name' => $this->request->getVar('customer_name'),
            'car_name' => $this->request->getVar('car_name'),
            'address' => $this->request->getVar('address'),
            'damage_details' => $this->request->getVar('damage_details'),
            'car_type' => $this->request->getVar('car_type'),
        ];
        $imageFile = $this->request->getFile('car_image');
        $newName = $imageFile->getRandomName();
        $imageFile->move('image/orders', $newName);
        $data['car_image'] = 'image/orders/' . $newName;

        // if ($imageFile && $imageFile->isValid()) {
        //     $newName = $imageFile->getRandomName();
        //     $imageFile->move('image/products', $newName);
        //     $post['car_image'] = 'image/products/' . $newName;
        // }

        $model->insert($data);

        return redirect()->to('/orders');
    }

    public function edit($id)
    {
        $model = new OrderModel();
        $data['order'] = $model->find($id);
        $pegawai = new PegawaiModel();

        return view('edit', [
            'pegawai' => $pegawai->findAll(),
            'order' => $model->find($id)
        ]);
    }

    public function update()
    {
        $model = new OrderModel();

        $id = $this->request->getVar('id');

        $data = [
            'customer_name' => $this->request->getVar('customer_name'),
            'car_name' => $this->request->getVar('car_name'),
            'address' => $this->request->getVar('address'),
            'damage_details' => $this->request->getVar('damage_details'),
            'car_type' => $this->request->getVar('car_type'),
            'handleby' => $this->request->getVar('handleby'),
        ];

        $model->update($id, $data);

        return redirect()->to('/orders');
    }

    public function delete($id)
    {
        $model = new OrderModel();
        $model->delete($id);

        return redirect()->to('/orders');
    }
}
