<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\Exceptions\PageNotFoundException;

class Products extends BaseController
{
	public function index()
	{
//	    d(session('isLoggedIn'));
//	    d(session('userData'));


        /**@var \App\Models\Products $productsModel */

        $productsModel = model('Products');

        return view('products/index',[
            'products'=>$productsModel->paginate(3),
            'pager'=>$productsModel->pager,
            ]);

	}
	public function add(){
	    helper('form');
        /**@var \App\Models\Products $productsModel  */
        $productsModel=model('Products');


        if ($this->request->getMethod()==='post'){
//	        dd($this->request->getPost());
//            $validationRequest=$this->validate([
//                'title'=>'required|min_length[10]',
//                'description'=>'required|min_length[50]',
//                'price'=>'required|decimal',
//
//            ]);


//            dd($validationRequest);
//            if ($validationRequest){
            if ($productsModel->save($this->request->getPost())){

//                $productsModel->save($this->request->getPost());

                return redirect()->to('/products/index');
            }
//            return view('products/add',['validation'=>$this->validator]);

        }

	    return view('products/add',[
	        'validation'=> $productsModel->getValidation()
        ]);

    }

    public function edit(int $id){
	    helper('form');

        /**@var \App\Models\Products $productsModel  */
        $productsModel=model('Products');

        $entity=$productsModel->find($id);
        if (!$entity){
            throw PageNotFoundException::forPageNotFound();
        }

        if ($this->request->getMethod()==='post'){
            if ($productsModel->update($entity['id'], $this->request->getPost())){
                return redirect()->to('/products/index');

            }

        }


        return view('products/edit',[
            'validation'=>$productsModel->getValidation(),
            'entity'=>$entity
        ]);

    }

    public function delete(int $id){

        /**@var \App\Models\Products $productsModel  */
        $productsModel=model('Products');

        $entity=$productsModel->find($id);
        if (!$entity){
            throw PageNotFoundException::forPageNotFound();
        }

        $productsModel->delete($id);

        return redirect()->to('/products/index');




    }
}
