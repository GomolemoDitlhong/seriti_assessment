<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function PieChart(){
        $labels = array('item1', 'item2');
        $data  = array(8,1);
        return response()->json(['labels' => $labels, 'data' => $data]);
      }


    public function Users(){
        $users = 5;
        return response()->json(['summary' => $users]);
    }

    public function Likes(){
        $likes = 25;
        return response()->json(['summary' => $likes]);
    }
    public function Uploads(){
        $uploads = 10;
        return response()->json(['summary' => $uploads]);
    }

    public function stars(){
        $stars = 500;
        return response()->json(['summary' => $stars]);
    }

    public function CurvedChart(){
        $month = array('January', 'February', 'March', 'April', 'May');
        $data1  = array(65, 60, 80, 82, 55);
        $data2  = array(28, 40, 48, 19, 85);
        return response()->json(['month' => $month, 'data1' => $data1, 'data2' => $data2]);
    }
}
