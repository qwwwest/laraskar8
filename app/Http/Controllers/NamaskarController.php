<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
 
use File; 






class NamaskarController extends Controller
{
    public function renderer(string $str1 = null, string $str2 = null,string $str3 = null, string $str4 = null)
    {
        
        $req =  request()->path();
       // $file = public_path()."/media/$req.md";
   
        $file = "sites/$req.md";
     
        $main = File::get($file);  
        // if (Storage::disk('root')->exists($file)) {
        //     $main = Storage::disk('root')->get($file);
        // }else {
        //     $main = "404";
        // }
     

       
        // if(is_file($file)) {
        //     $main = file_get_contents($file) ;
        // }
        // else {
        //     $main = "404";
        // }
     
     //  $asideFiles = File::files(public_path());


        return view('namaskar', 
            [
                'title' => $req,
                'main' => $main,
                'aside' => '',
            ]);
    }
}
