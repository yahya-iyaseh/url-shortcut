<?php

namespace App\Http\Controllers;

use App\Models\URLGenerator;
use Illuminate\Http\Request;

class RedirectController extends Controller
{
    public function redirect($un)
    {
        $item =  URLGenerator::where('un', $un)->first();
        $item->counter = $item->counter + 1;
        $item->save();
        if($item->access){
            return redirect($item->url);

        }else{
            return view('error')->with('url', $item->url_generator);
        }
    }
}
