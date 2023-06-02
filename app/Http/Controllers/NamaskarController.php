<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Namaskar\MemPad;
use App\Namaskar\Namaskar;
use App\Namaskar\Infini;
use Michelf\MarkdownExtra;

use File;

class NamaskarController extends Controller
{
    public function renderer(string $any = '/')
    {

        $req =  request()->path();
       // $file = public_path()."/media/$req.md";
        $file = "sites/$req.md";

        if(File::isFile($file)) {
            $main = File::get($file); ;
        }
        else {
            $main = "404";
        }


       $asideFiles = File::files(public_path());

        return view('namaskar',
            [
                'title' => $any,
                'main' => $main,
                'aside' => $asideFiles,
            ]);
    }

    public function site($site, string $url = '/')
    {

        $file = "sites/$site/$site.lst";
        $sidemenu = false;
        if(is_file($file)) {
            $mempad = new MemPad($file, $site);
            $getElementByUrl = $mempad->getElementByUrl($site.'/'.$url);
            $sidemenu =  $mempad->getRootElements() ;
            if (!$getElementByUrl) {
                $main = "404 $url in $file";
            }
            else {
                $id = $getElementByUrl->id;
                $main = $mempad->getContentById($id);
                $main = MarkdownExtra::defaultTransform($main);
                $elt = $mempad->getElementById($id);
                $title = $elt->title;
            }
        }
        else {
            $main = "404 no site found";
        }


      // $asideFiles = File::files(public_path());

        return view('namaskar',
            [
                'title' => $url,
                'main' => $main,
                'subsite' => $site,

                'sidemenu' => $sidemenu,
                'sidemenu_max_levels' => 1,
            ]);

    }
}
