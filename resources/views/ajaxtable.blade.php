@extends('layouts.layout')

@section('content')
<table class="table table-striped" id="dtable">
    <thead class="table-primary">
        <tr>
            
            <th>Name</th>
            <th>Age</th>
            <th>City</th>
            <th>Country</th>
            
        </tr>
    </thead>
    <tbody>
       
    </tbody>
</table>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>

    <script type="text/javascript">
        $(document).ready( function () {
            $('#dtable').dataTable({
                "processing": true,
                "serverSide": true,
                "ajax": {
                    "url": "{{ route('index') }}",
                    "type": "GET"
                 },
                "columns": [
                    
                    {data : "name" , name : "name", orderable: true , searchable : true},
                    {data : "age" , name : "age"},
                    {data: "city" , name : "city"},
                    {data : "country" , name : "country"}
                    
                ]
            }

            );
        } );
    </script>

@endsection