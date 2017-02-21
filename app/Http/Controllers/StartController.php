<?php
namespace App\Http\Controllers;

use App\User;
use Illuminate\Routing\Controller as BaseController;

/**
 * Class StartController
 * @package App\Http\Controllers
 */
class StartController extends BaseController
{
    /**
     * Default index action
     * Get user list
     */
    public function index()
    {
        return view('start.index', ['user' => User::findOrFail(1)]);
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getUserById($id)
    {
        return view('start.userInfo', ['user' => User::findOrFail($id)]);
    }
}
