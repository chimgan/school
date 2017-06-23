<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class UserController extends BaseController
{
    public function index($id)
    {
        return view('user.view', ['userId' => $id]);
    }
}
