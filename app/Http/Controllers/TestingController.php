<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;


class TestingController extends Controller
{
    public function imageTest()
    {
        ini_set('memory_limit','256M'); 
        $img = Image::make('test.jpg')->resize(300, 200);

        return $img->response('jpg');
        // dd('Here');
    }
}
