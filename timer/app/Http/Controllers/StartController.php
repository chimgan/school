<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use TCG\Voyager\Models\User;

/**
 * Class StartController
 * @package App\Http\Controllers
 */
class StartController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function start()
    {
        return view('start.index', ['data' => 1]);
    }

    public function item($id)
    {
//        return view('start.item', ['user' => User::findOrFail($id)]);
        return view('start.item', ['user' => $id]);
    }
}
