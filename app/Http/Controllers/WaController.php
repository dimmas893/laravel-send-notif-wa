<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class WaController extends Controller
{
    public function store(Request $request)
    {

        // $store = "http://api.textmebot.com/send.php?recipient=+6281932936892&apikey=oGAs4rupdsQz&text=This%20is%20a%20$request->name%0a%0a$request->name2%0a%0a$request->name3";
        $store = "http://api.textmebot.com/send.php?recipient=+6281392396892&apikey=oGAs4rupdsQz&text=This%20is%20a%20$request->name%0a%0a$request->name2%0a%0a$request->name3";

        return redirect($store);  
    }
}
