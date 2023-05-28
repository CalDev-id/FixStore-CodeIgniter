<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PegawaiModel;
use App\Models\PembelianModel;
use App\Models\ProductModel;

class Product extends BaseController
{
    public function index()
    {
        $model = new ProductModel();
        $data['product'] = $model->findAll();

        $pegawai = new PegawaiModel();
        $product = new PembelianModel();

        return view('product', [
            'product' => $model->findAll(),
            'client' => $model->countAllResults(),
            'sales' => $product->selectSum('price')->get()->getRow(),
            'productsum' => $product->countAllResults(),
        ]);
        // return view('read', $data);
    }

    public function create()
    {
        return view('CreateProduct');
    }

    public function store()
    {
        $model = new ProductModel();

        $data = [
            'item_name' => $this->request->getVar('item_name'),
            'price' => $this->request->getVar('price'),
            'item_image' => $this->request->getVar('item_image'),
            
        ];
        $imageFile = $this->request->getFile('item_image');
        $newName = $imageFile->getRandomName();
        $imageFile->move('image/orders', $newName);
        $data['item_image'] = 'image/orders/' . $newName;

        $model->insert($data);

        return redirect()->to('/product');
    }

    public function edit($id)
    {
        $model = new ProductModel();
        $data['order'] = $model->find($id);

        return view('editProduct', $data);
    }

    public function update()
    {
        $model = new ProductModel();

        $id = $this->request->getVar('id');

        $data = [
            'item_name' => $this->request->getVar('item_name'),
            'price' => $this->request->getVar('price'),
            'item_image' => $this->request->getVar('item_image'),
        ];

        $model->update($id, $data);

        return redirect()->to('/product');
    }

    public function delete($id)
    {
        $model = new ProductModel();
        $model->delete($id);

        return redirect()->to('/product');
    }
}
