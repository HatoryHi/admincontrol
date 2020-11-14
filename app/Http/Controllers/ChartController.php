<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class ChartController extends BaseController
{
    function echarts(){
    	return view('admin.chart.echarts');
    }

    function c3(){
    	return view('admin.chart.c3');
    }

    function morris(){
    	return view('admin.chart.morris');
    }

    function flot(){
    	return view('admin.chart.flot');
    }

    function chartjs(){
    	return view('admin.chart.chartjs');
    }

    function sparkline(){
    	return view('admin.chart.sparkline');
    }

    function knob(){
    	return view('admin.chart.knob');
    }
}
