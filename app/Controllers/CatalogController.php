<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class CatalogController extends ResourceController
{

    protected $modelName = 'App\Models\Catalog';
    protected $format = 'json';
   
    
    public function index()
    {
        $data = [
            'success' => true,
            'message'=> 'Data found',
            'data'=> $this->model->orderBy('id', 'DESC')->findAll()
        ];

        return $this->respond($data, 200);
    }

    
    public function show($id = null)
    {
        $data = [
            'success' => true,
            'message'=> 'Data found',
            'data' => $this->model->find($id)
        ];

        if($data['data'] == null){
            return $this->failNotFound('Data gift was not found');
        }

        return $this->respond($data, 200);
    }
   
    public function create()
    {
        $rules = $this->validate([
            'name'  => 'required',
            'point'  => 'required',
            'stock'  => 'required',
            'picture' => 'uploaded[picture]|max_size[picture, 2048]|is_image[picture]|mime_in[picture,image/jpg,image/jpeg,image/png]',
            'description'  => 'required',
        ]);


            //process uploaded files
            $pic = $this->request->getFile('picture');
            $pic_name = $pic->getRandomName();
            $pic->move('img', $pic_name); 



         if(!$rules) {
            $response = [
                'message' => $this->validator->getErrors()
            ];
            return $this->failValidationErrors($response);
        }

        $this->model->insert([
            'name' => esc($this->request->getVar('name')),
            'point' => esc($this->request->getVar('point')),
            'stock' => esc($this->request->getVar('stock')),
            'picture' => $pic_name,
            'description' => esc($this->request->getVar('description')),
        ]);
        // $userId = $this->model->getInsertID();
        $response = [
            'success' => true,
            'message' => 'Data has been Submitted successfully',
            'data' => $pic_name
            
        ];
        return $this->respond($response, 200); 

        // return $this->respondCreated($response);
    }

    
    public function edit($id = null)
    {
        //
    }

    
    public function update($id = null)
    {
        $rules = $this->validate([
            'name'  => 'required',
            'point'  => 'required',
            'stock'  => 'required',
            'picture' => 'max_size[picture, 2048]|is_image[picture]|mime_in[picture,image/jpg,image/jpeg,image/png]',
            'description'  => 'required',
        ]);

         if(!$rules) {
            $response = [
                'message' => $this->validator->getErrors()
            ];
            return $this->failValidationErrors($response);
        }

        //process uploaded files
            $pic = $this->request->getFile('picture');

            if($pic){
                $pic_name = $pic->getRandomName();
                $pic->move('img', $pic_name); 
                // unlink('img/'.$this->request->getPost('old_img'));
            } 
            // else {
            //    $pic_name =  $this->request->getPost('old_img')
            // }

        $this->model->update($id, [
            'name' => esc($this->request->getVar('name')),
            'point' => esc($this->request->getVar('point')),
            'stock' => esc($this->request->getVar('stock')),
            'picture' => $pic_name,
            'description' => esc($this->request->getVar('description')),
        ]);
        $response = [
            'success' => true,
            'message' => 'Data updated successfully'
        ];
        return $this->respond($response, 200); 
    }

   
    public function delete($id = null)
    {

        $dbImg =  $this->model->find($id);
        if($dbImg['picture'] != ''){
            unlink('img/'. $dbImg['picture']);
        }
        $this->model->delete($id);
        $response = [
            'success' => true,
            'message' => 'data deleted successfully',
            'data' => []
        ];
        return $this->respondDeleted($response);
    }
}
