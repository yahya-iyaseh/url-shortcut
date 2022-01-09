<?php

namespace App\Http\Controllers;

use App\Models\URLGenerator;
use Illuminate\Http\Request;

class RedirectController extends Controller
{
    public function redirect($un){
       $item =  URLGenerator::where('un', $un)->first();
return redirect($item->url);
    }
}
