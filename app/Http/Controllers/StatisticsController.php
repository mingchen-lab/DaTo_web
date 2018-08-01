<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dato_new;
use App\Models\JournalPiechart;
use App\Models\YearPiechart;
use App\Models\CountryPiechart;
use DB;
use Carbon\Carbon;
class StatisticsController extends Controller
{
    public function Piechart(){
        
        
        
        $top10Journal = json_decode(DB::table('dato_new')->select('journal_short',DB::raw('COUNT(*) as num'))
                                                         ->groupBy('journal_short')
                                                         ->orderBy('num','desc')
                                                         ->skip(0)
                                                         ->take(9)
                                                         ->get(),true);

        $valuetheotherjournal = json_decode(DB::table('dato_new')->select(DB::raw('COUNT(*) as num'))
                                                    ->where('journal_short','!=',$top10Journal[0]['journal_short']) 
                                                    ->where('journal_short','!=',$top10Journal[1]['journal_short'])  
                                                    ->where('journal_short','!=',$top10Journal[2]['journal_short'])  
                                                    ->where('journal_short','!=',$top10Journal[3]['journal_short'])  
                                                    ->where('journal_short','!=',$top10Journal[4]['journal_short'])  
                                                    ->where('journal_short','!=',$top10Journal[5]['journal_short'])  
                                                    ->where('journal_short','!=',$top10Journal[6]['journal_short'])  
                                                    ->where('journal_short','!=',$top10Journal[7]['journal_short'])  
                                                    ->where('journal_short','!=',$top10Journal[8]['journal_short'])
                                                    ->get(),true)[0]['num'];       

        $affected = DB::table('journalpiechart')->where('id','1')->update(['label'=>$top10Journal[0]['journal_short'],'value'=>$top10Journal[0]['num']]);
        $affected = DB::table('journalpiechart')->where('id','2')->update(['label'=>$top10Journal[1]['journal_short'],'value'=>$top10Journal[1]['num']]);
        $affected = DB::table('journalpiechart')->where('id','3')->update(['label'=>$top10Journal[2]['journal_short'],'value'=>$top10Journal[2]['num']]);
        $affected = DB::table('journalpiechart')->where('id','4')->update(['label'=>$top10Journal[3]['journal_short'],'value'=>$top10Journal[3]['num']]);
        $affected = DB::table('journalpiechart')->where('id','5')->update(['label'=>$top10Journal[4]['journal_short'],'value'=>$top10Journal[4]['num']]);
        $affected = DB::table('journalpiechart')->where('id','6')->update(['label'=>$top10Journal[5]['journal_short'],'value'=>$top10Journal[5]['num']]);
        $affected = DB::table('journalpiechart')->where('id','7')->update(['label'=>$top10Journal[6]['journal_short'],'value'=>$top10Journal[6]['num']]);
        $affected = DB::table('journalpiechart')->where('id','8')->update(['label'=>$top10Journal[7]['journal_short'],'value'=>$top10Journal[7]['num']]);
        $affected = DB::table('journalpiechart')->where('id','9')->update(['label'=>$top10Journal[8]['journal_short'],'value'=>$top10Journal[8]['num']]);
        $affected = DB::table('journalpiechart')->where('id','10')->update(['label'=>'the other','value'=>$valuetheotherjournal]);
                      
        $journalresult = DB::table('journalpiechart')->get();
       


        $currenttime = Carbon::now();
        $currentyear = substr($currenttime,0,4);
        $yearlist = array($currentyear-1,$currentyear-2,$currentyear-3,$currentyear-4,$currentyear-5,$currentyear-6,$currentyear-7,$currentyear-8,$currentyear-9);
        $yearnum1 = json_decode(DB::table('dato_new')->select(DB::raw('COUNT(*) as num'))
                                                         ->where('date','like',$yearlist[0].'%')
                                                         ->get(),true);
        $yearnum2 = json_decode(DB::table('dato_new')->select(DB::raw('COUNT(*) as num'))
                                                         ->where('date','like',$yearlist[1].'%')
                                                         ->get(),true);
        $yearnum3 = json_decode(DB::table('dato_new')->select(DB::raw('COUNT(*) as num'))
                                                         ->where('date','like',$yearlist[2].'%')
                                                         ->get(),true);
        $yearnum4 = json_decode(DB::table('dato_new')->select(DB::raw('COUNT(*) as num'))
                                                         ->where('date','like',$yearlist[3].'%')
                                                         ->get(),true);
        $yearnum5 = json_decode(DB::table('dato_new')->select(DB::raw('COUNT(*) as num'))
                                                         ->where('date','like',$yearlist[4].'%')
                                                         ->get(),true);
        $yearnum6 = json_decode(DB::table('dato_new')->select(DB::raw('COUNT(*) as num'))
                                                         ->where('date','like',$yearlist[5].'%')
                                                         ->get(),true);
        $yearnum7 = json_decode(DB::table('dato_new')->select(DB::raw('COUNT(*) as num'))
                                                         ->where('date','like',$yearlist[6].'%')
                                                         ->get(),true);
        $yearnum8 = json_decode(DB::table('dato_new')->select(DB::raw('COUNT(*) as num'))
                                                         ->where('date','like',$yearlist[7].'%')
                                                         ->get(),true);
        $yearnum9 = json_decode(DB::table('dato_new')->select(DB::raw('COUNT(*) as num'))
                                                         ->where('date','like',$yearlist[8].'%')
                                                         ->get(),true);
        $yearnum10 = json_decode(DB::table('dato_new')->select(DB::raw('COUNT(*) as num'))
                                                         ->where('date','not like',$yearlist[0].'%')
                                                         ->where('date','not like',$yearlist[1].'%')
                                                         ->where('date','not like',$yearlist[2].'%')
                                                         ->where('date','not like',$yearlist[3].'%')
                                                         ->where('date','not like',$yearlist[4].'%')
                                                         ->where('date','not like',$yearlist[5].'%')
                                                         ->where('date','not like',$yearlist[6].'%')
                                                         ->where('date','not like',$yearlist[7].'%')
                                                         ->where('date','not like',$yearlist[8].'%')
                                                         ->get(),true);

        $affected = DB::table('yearpiechart')->where('id','1')->update(['label'=>$yearlist[0],'value'=>$yearnum1[0]['num']]);
        $affected = DB::table('yearpiechart')->where('id','2')->update(['label'=>$yearlist[1],'value'=>$yearnum2[0]['num']]);
        $affected = DB::table('yearpiechart')->where('id','3')->update(['label'=>$yearlist[2],'value'=>$yearnum3[0]['num']]);
        $affected = DB::table('yearpiechart')->where('id','4')->update(['label'=>$yearlist[3],'value'=>$yearnum4[0]['num']]);
        $affected = DB::table('yearpiechart')->where('id','5')->update(['label'=>$yearlist[4],'value'=>$yearnum5[0]['num']]);
        $affected = DB::table('yearpiechart')->where('id','6')->update(['label'=>$yearlist[5],'value'=>$yearnum6[0]['num']]);
        $affected = DB::table('yearpiechart')->where('id','7')->update(['label'=>$yearlist[6],'value'=>$yearnum7[0]['num']]);
        $affected = DB::table('yearpiechart')->where('id','8')->update(['label'=>$yearlist[7],'value'=>$yearnum8[0]['num']]);
        $affected = DB::table('yearpiechart')->where('id','9')->update(['label'=>$yearlist[8],'value'=>$yearnum9[0]['num']]);
        $affected = DB::table('yearpiechart')->where('id','10')->update(['label'=>'the other','value'=>$yearnum10[0]['num']]);
       
        $yearresult = DB::table('yearpiechart')->get();
       



        $top10Country = json_decode(DB::table('dato_new')->select('country_long',DB::raw('COUNT(*) as num'))
                                                        ->groupBy('country_long')
                                                        ->orderBy('num','desc')
                                                        ->skip(0)
                                                        ->take(9)
                                                        ->get(),true);
        
        $valuetheothercountry = json_decode(DB::table('dato_new')->select(DB::raw('COUNT(*) as num'))
                                                        ->where('country_long','!=',$top10Country[0]['country_long']) 
                                                        ->where('country_long','!=',$top10Country[1]['country_long'])  
                                                        ->where('country_long','!=',$top10Country[2]['country_long'])  
                                                        ->where('country_long','!=',$top10Country[3]['country_long'])  
                                                        ->where('country_long','!=',$top10Country[4]['country_long'])  
                                                        ->where('country_long','!=',$top10Country[5]['country_long'])  
                                                        ->where('country_long','!=',$top10Country[6]['country_long'])  
                                                        ->where('country_long','!=',$top10Country[7]['country_long'])  
                                                        ->where('country_long','!=',$top10Country[8]['country_long'])
                                                        ->get(),true)[0]['num'];  

        $affected = DB::table('countrypiechart')->where('id','1')->update(['label'=>$top10Country[0]['country_long'],'value'=>$top10Country[0]['num']]);
        $affected = DB::table('countrypiechart')->where('id','2')->update(['label'=>$top10Country[1]['country_long'],'value'=>$top10Country[1]['num']]);
        $affected = DB::table('countrypiechart')->where('id','3')->update(['label'=>$top10Country[2]['country_long'],'value'=>$top10Country[2]['num']]);
        $affected = DB::table('countrypiechart')->where('id','4')->update(['label'=>$top10Country[3]['country_long'],'value'=>$top10Country[3]['num']]);
        $affected = DB::table('countrypiechart')->where('id','5')->update(['label'=>$top10Country[4]['country_long'],'value'=>$top10Country[4]['num']]);
        $affected = DB::table('countrypiechart')->where('id','6')->update(['label'=>$top10Country[5]['country_long'],'value'=>$top10Country[5]['num']]);
        $affected = DB::table('countrypiechart')->where('id','7')->update(['label'=>$top10Country[6]['country_long'],'value'=>$top10Country[6]['num']]);
        $affected = DB::table('countrypiechart')->where('id','8')->update(['label'=>$top10Country[7]['country_long'],'value'=>$top10Country[7]['num']]);
        $affected = DB::table('countrypiechart')->where('id','9')->update(['label'=>$top10Country[8]['country_long'],'value'=>$top10Country[8]['num']]);
        $affected = DB::table('countrypiechart')->where('id','10')->update(['label'=>'the other','value'=>$valuetheothercountry]);

        $countryresult = DB::table('countrypiechart')->get();
        //$tmp = json_encode($yearnum1, JSON_UNESCAPED_UNICODE);





        $data = [];
        $data['first'] = 'Zhang';
        $data['last'] = 'Jinglin';
        return view("test",$data);
        // return view("piechart", ["journalresult" => $journalresult,"yearresult" => $yearresult,"countryresult" => $countryresult]);
    }


    public function MapView(){
        return view("mapview");
    }
}
