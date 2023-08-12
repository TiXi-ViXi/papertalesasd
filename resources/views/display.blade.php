<a href = "{{route('dashboard')}}"><img src = "../../image/back.png" class="img-fluid img-thumbnail float-right" style="max-width: 100px;"></a>
@foreach($results as $key=>$row)
    <div class="col-md-3">
    <h1>{{ $row->Book_Name }}<h1>
    <h1>{{ $row->Author_Name }}<h1>
    <img src = "../../image/{{ $row->file_path }}" class="gridimage">
    <h1>{{ $row->Price }}<h1>
</div>

@endforeach()