<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
 
use File; 






class NamaskarController extends Controller
{
    public function renderer(string $any = '/')
    {
        
        $req =  request()->path();
       // $file = public_path()."/media/$req.md";
   
        $file = "sites/$req.md";
     
        //$main = File::get($file);  
        // if (Storage::disk('root')->exists($file)) {
        //     $main = Storage::disk('root')->get($file);
        // }else {
        //     $main = "404";
        // }
     

       
        if(is_file($file)) {
            $main = file_get_contents($file) ;
        }
        else {
            $main = "plop";
        }
     
     //  $asideFiles = File::files(public_path());


        return view('namaskar', 
            [
                'title' => $any,
                'main' => $main,
                'aside' => '',
            ]);
    }
}
