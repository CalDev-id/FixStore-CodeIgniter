<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\OrderModel;

class Orders extends BaseController
{
    public function index()
    {
        $model = new OrderModel();
        $data['orders'] = $model->findAll();

        return view('read', $data);
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
            'car_image' => $this->request->getVar('car_image'),
            'car_type' => $this->request->getVar('car_type'),
            
        ];

        $model->insert($data);

        return redirect()->to('/orders');
    }

    public function edit($id)
    {
        $model = new OrderModel();
        $data['order'] = $model->find($id);

        return view('edit', $data);
    }

    public function update()
    {
        $model = new OrderModel();

        $id = $this->request->getVar('id');

        $data = [
            'customer_name' => $this->request->getVar('customer_name'),
            'product_name' => $this->request->getVar('product_name'),
            'quantity' => $this->request->getVar('quantity')
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
