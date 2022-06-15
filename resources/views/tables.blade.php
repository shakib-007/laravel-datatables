@extends('layouts.layout')

{{-- @section('css')

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">

@endsection --}}

@section('content')
@php
    $serial = 0;
@endphp
<table class="table table-striped" id="datatable">
    <thead  class="table-primary">
        <tr>
            <th>SL</th>
            <th>Name</th>
            <th>Age</th>
            <th>City</th>
            <th>Country</th>
        </tr>
    </thead>
    <tbody>
        
        @foreach ($datas as $data)
        <tr>
            <td>{{++$serial}}</td>
            <td>{{$data->name}}</td>
            <td>{{$data->age}}</td>
            <td>{{$data->city}}</td>
            <td>{{$data->country}}</td>
        </tr>
        @endforeach
    </tbody>
    
</table>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>

    <script type="text/javascript">
        $(document).ready( function () {
            $('#datatable').DataTable();
        } );
    </script>
@endsection








{{-- @section('css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
@endsection

@section('content')
    
    @php
        $serial = 0;
    @endphp
    <table class="table table-striped" id="datatable">
        <thead>
        <tr>
            <th>SL</th>
            <th>Name</th>
            <th>Age</th>
            <th>City</th>
            <th>Country</th>
        </tr>
        </thead>
        @foreach ($datas as $data)
        <tbody>
            <tr>
                <td>{{++$serial}}</td>
                <td>{{ $data->name }}</td>
                <td>{{ $data->age }}</td>
                <td>{{ $data->city }}</td>
                <td>{{ $data->country }}</td>
            </tr>
        </tbody>
        @endforeach
    </table>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>

    <script type="text/javascript">
        $(document).ready( function () {
            $('#datatable').DataTable();
        } );
    </script>


@endsection --}}

{{-- <tbody>
    @php
        $sl =0;
    @endphp
    @for ($i = 1; $i < 5 ; $i++)
        
    
    <tr>
        <td>{{++$sl}}</td>
        <td>fahim</td>
        <td>22</td>
        <td>khulna</td>
        <td>bangladesh</td>
    </tr>
    <tr>
        <td>{{++$sl}}</td>
        <td>shovon</td>
        <td>23</td>
        <td>barisal</td>
        <td>bangladesh</td>
    </tr>
    <tr>
        <td>{{++$sl}}</td>
        <td>galib</td>
        <td>24</td>
        <td>chittagong</td>
        <td>bangladesh</td>
    </tr>
    <tr>
        <td>{{++$sl}}</td>
        <td>sujon</td>
        <td>25</td>
        <td>coxsbazar</td>
        <td>bangladesh</td>
    </tr>
    <tr>
        <td>{{++$sl}}</td>
        <td>arnob</td>
        <td>26</td>
        <td>gazipur</td>
        <td>bangladesh</td>
    </tr>
    <tr>
        <td>{{++$sl}}</td>
        <td>tousif</td>
        <td>27</td>
        <td>badda</td>
        <td>bangladesh</td>
    </tr>
    <tr>
        <td>{{++$sl}}</td>
        <td>arefin</td>
        <td>28</td>
        <td>tejgoan</td>
        <td>bangladesh</td>
    </tr>
    <tr>
        <td>{{++$sl}}</td>
        <td>sadi</td>
        <td>29</td>
        <td>dhaka</td>
        <td>bangladesh</td>
    </tr>
    <tr>
        <td>{{++$sl}}</td>
        <td>tahmeed</td>
        <td>21</td>
        <td>dhaka</td>
        <td>bangladesh</td>
    </tr>
    @endfor --}}