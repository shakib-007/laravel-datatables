<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataTable;

class ApiController extends Controller
{
    //
    public function getInfo()
    {
        $query =  DataTable::select('name','age','city','country');
        return datatables($query)->make(true);
    }
    
}
