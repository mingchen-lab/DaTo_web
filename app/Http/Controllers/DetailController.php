<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dato_new;
use App\Models\JournalPiechart;
use App\Models\YearPiechart;
use App\Models\CountryPiechart;
use DB;
use Charts;

class DetailController extends Controller
{
    public function index(){
//    $results = Dato_new::where('pmid','=',$pmid)->get();
        $chart =Charts::create('geo', 'google')
            ->title(null)
            ->labels(['ES', 'CN', 'RU'])
            ->colors(['#FFFFFF', '#94D250'])
            ->values([5,10,20])
            ->dimensions(340,240)
            ->responsive(true);


    return view('detail',['chart'=>$chart]);
}
}
