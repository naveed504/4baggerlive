<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function phpdebug()
    {

        $x = 1;
        while($x <= 5) {
        echo "The number is: $x <br>";
        $x++;
        }
        
    }

    public function loginform()
    {
        return "ok";
    }
}
