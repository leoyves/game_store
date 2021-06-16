<?php

namespace App\Controllers;




class Catalog extends BaseController
{
	public function index()
	{
//	   $faker=Factory::create();

//	   $db= Database::connect();
//	   d($db->query('show databases')->getResultArray());
        /**@var \App\Models\Products $productsModel */

        $productsModel = model('Products');

//        d($productsModel->findAll());

	    $products= $productsModel
            ->orderBy('id','DESC')
            ->findAll(3);

//		return view('catalog/index',['products'=>$products]);
		return view('catalog/index',compact('products'));
	}
}
