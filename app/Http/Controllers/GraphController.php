<?php

namespace App\Http\Controllers;
use App\Models\graph;
use Illuminate\Http\Request;
use Charts;
use DB;
class GraphController extends Controller
{
    public function index(){
        $yearsum = graph::all('date');
        foreach ($yearsum as $str)
        {
            $str->date =substr($str->date,0,4);
        }
        return $yearsum;
        $chart =Charts::database(graph::all('date'),'bar', 'highcharts')
            ->elementLabel("Total");

        return view('trend',['chart'=>$chart]);

    }
}
