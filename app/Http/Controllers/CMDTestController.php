<?php

namespace App\Http\Controllers;
use Symfony\Component\Process\Process;
use Illuminate\Http\Request;

class CMDTestController extends Controller
{
    protected function index(){
//        $para = "queen";
//        $c = exec("python py/cmdtest.py {$para}",$output,$res);
//        #$output = shell_exec("python py/cmdtest.py");
//        $output = json_encode($output);
//        return view('test')->with('output', $output);
        $process = new Process("python py/cmdtest.py");
        $process->setTimeout(3600);
//        $process->setPty(true);
        $process->run();
        return view('test',['output'=>$process->getOutput()]);
    }
}
