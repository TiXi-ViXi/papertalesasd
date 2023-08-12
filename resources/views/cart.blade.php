<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
@php
    $countt = 0;
@endphp
<a href = "{{route('dashboard')}}"><img src = "../../image/back.png" class="img-fluid img-thumbnail float-right" style="max-width: 100px;"></a>
@if (count($results) > 0)
<table>
        <thead>
            <tr>
                <th>Number</th>
                <th>Name</th>
                <th>Image</th>
                <th>Count</th>
                <th>Price</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        @foreach($results as $key=>$row)
            <tr>
                <td>1</td>
                <td>{{ $row->Book_Name }}</td>
                <td><img src="../../image/{{ $row->file_path }}" class="img-fluid img-thumbnail float-right" style="max-width: 100px;"></td>
                <td>{{ $row->count }}</td>
                <td>{{ $row->Price }}</td>
                <td><a href="{{route('class.addcarts',$row->id)}}" class = "btn btn-sm btn-success">add</a></td>
                <td><a href="{{route('class.deletecart',$row->id)}}" class = "btn btn-sm btn-danger">delete</a></td>
                @php
                $countt = $countt + ($row->count)*($row->Price);
                @endphp
            </tr>
        @endforeach
        </tbody>
</table>
<h1>Total</h1>
<h1>{{ $countt }}</h1>
@else
<h1>PLEASE ADD SOME THING TO CONTINUE</h1>
@endif