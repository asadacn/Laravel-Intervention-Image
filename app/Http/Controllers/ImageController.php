<?php

namespace App\Http\Controllers;

use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function upload(Request $request)
    {
       $img =  Image::make( $request->file('photo'))->resize(500, 500); //resizing photo
       $hexcolor = $img->pickColor(mt_rand(10,100),mt_rand(20,100), 'hex'); //getting color from uploaded photo
       $img->insert('acnlogo.png','bottom-right',5,5)->save('foo.jpg'); //inserting watermark
        
       return redirect()->back()
        ->with('status', 'Image uploaded successfuly!')
        ->with('image', 'foo.jpg')
        ->with('color',$hexcolor);
    }
}
