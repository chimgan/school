<?php

namespace App\Http\Controllers;

use App\Files;
use Illuminate\Http\Request;

/**
 * Class FileController
 * @package App\Http\Controllers
 */
class FileController extends Controller
{
    /**
     * Get file list
     */
    public function getList()
    {
        return view('file.index', ['files' => Files::all()]);
    }
}
