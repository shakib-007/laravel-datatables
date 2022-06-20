<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataTable;
use DataTables;


class HomeController extends Controller
{
    

    public function getInfo(Request $request)
    {
        // $data =  DataTable::all();
        // return datatables($data)->make(true);
        // return view('ajaxtable');
        // $data =  DataTable::all()->orderBy('id','DESC')->get();
        // return datatables($data)->make(true);
        // $query =  DataTable::select('name','age','city','country');
        // return datatables($query)->make(true);
        // $data =  DataTable::all()->orderBy('id','DESC')->get();
        
        if($request->ajax())
        {
            $data =  DataTable::all();
            
            return DataTables::of($data)
                ->addIndexColumn()
                // ->addColumn('id',function($row) {
                    
                //     $html = $row->id;
                //     return $html;
                // })
                ->addColumn('name',function($row){
                    $html = 'gnt'.$row->name;
                    return $html;
                })
                // ->addColumn('name','himan')
                ->addColumn('age',function($row){
                    $html = $row->age.'<b>years</b>';
                    return $html;
                })
                ->addColumn('city',function($row){
                    $html = $row->city;
                    return $html;
                })
                ->addColumn('country',function($row){
                    $html = $row->country;
                    return $html;
                })
                
                ->rawColumns(['name','age','city','country'])
                ->make(true);
        }
        return view('ajaxtable');

    }
    

    public function dataTable()
    {
       
        $datas = DataTable::all();
        return view('tables',compact('datas'));
    }

    // public function ajaxTable()
    // {
    //     return view('ajaxtable');
    // }

}
