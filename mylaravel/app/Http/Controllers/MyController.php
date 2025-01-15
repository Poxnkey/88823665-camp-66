<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    private function myprivite(){
        return 1;
    }

    function myfunction(Request $req, $var1 = ""){
        $data['myinput'] = $req->input('myinput');
        $data['list'] = [];

        if (!empty($data['myinput'])) {
            $num = $data['myinput'];
            for ($i = 1; $i <= 12; $i++) {
                $data['list'][] = "$num x $i = " . ($num * $i);
            }
        }

        return view('myview', $data);
    }
}
