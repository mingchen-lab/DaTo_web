<?php

namespace App\Http\Controllers;

use App\Product;
use App\Models\Dato_new;
use Charts;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;



class MainController extends Controller
{

    public function index(){
        $Drecords = Dato_new::all();

        $chart =Charts::create('geo', 'google')
            ->title(null)
            ->labels(['ES', 'CN', 'RU'])
            ->colors(['#FFFFFF', '#94D250'])
            ->values([5,10,20])
            ->dimensions(340,240)
            ->responsive(true);

        return view('index',['Drecords'=>$Drecords,'chart'=>$chart]);

    }

	public function search(){
		return view('search');
	}
	
	public function statistics(){
		return view('statistics');
	}
	
	public function contact(){
		return view('contact');
	}
	
	public function help(){
		return view('help');
	}
	
    public function destroy($id){
		/*
        Product::destroy($id);
        return redirect('/admin/products');
		*/
    }

    public function newProduct(){
		/*
        return view('admin.new');
		*/
    }

    public function add() {


    }
}