<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes\GenerateDocument;

class ImageController extends Controller
{
    public function image(Request $request) {
        $tn = $request->input('template');
        $obj = new GenerateDocument();
        $res = $obj->generateTemplateImage($tn);
        return $res;
    }
}
