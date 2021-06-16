<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\Events\Events;

class Register extends BaseController
{
	public function index()
	{
	    if (session('isLoggedIn')){
	        return redirect()
                ->to('/products')
                ->withInput()
                ->with('errors','Already logged in.');

        }
        helper('form');

	    if ($this->request->getMethod()==='post'){
	        /** @var \App\Models\Users $users */
	        $users = model('Users');

	        $user = [
	            'login'=>$this->request->getPost('login'),
	            'password'=>$this->request->getPost('password'),
            ];

	        if (!$users->save($user)){
	            return redirect()->back()->withInput()->with('errors',$users->errors());
            }

            Events::trigger('user_created',$user['login']);

            return redirect()->to('/login')->with(
                'messages','The user has been created'
            );

        }
		return view('register/index');
	}
}
