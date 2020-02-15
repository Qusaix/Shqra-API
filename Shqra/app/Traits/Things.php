<?php
namespace App\Traits;
use URL;

trait things
{
    public function uploadImage($file , $image)
    {
        $image = $image;
        $name = rand().'.'. $image->getClientOriginalExtension();
        $image->move(public_path($file),$name);
        
        return URL::to($file.'/'.$name);
    }
}