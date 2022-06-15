<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataTable;

class HomeController extends Controller
{
    //



    public function dataTable()
    {
       
        $datas = DataTable::all();
        return view('tables',compact('datas'));
    }

    public function ajaxTable()
    {
        return view('ajaxtable');
    }

}
