<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Config\Services;

class Login extends BaseController
{
	public function index()
	{
        helper('form');

        if ($this->request->getMethod()==='post'){
            /** @var \App\Models\Users $repository */
            $repository = model('Users');

            $user= $repository
                ->where('login', $this->request->getPost('login'))
                ->first();

            if (!$user || !password_verify(
                $this->request->getPost('password'),
                $user['password']
                )){
                return redirect()->to('/login')->withInput()->with('errors','wrong password');


            }
            $session=Services::session();
            $session->set('isLoggedIn',true);

            $session->set('userData',[
                'id'=> $user['id'],
                'login'=> $user['login'],

            ]);
            return redirect()->to('/products')
                ->withInput()
                ->with('messages','Logged in.');

        }


        return view('login/index');
	}
	public function logout(){
	    $session =Services::session();
	    $session->destroy();

	    return redirect()->to('/login');
    }
}
