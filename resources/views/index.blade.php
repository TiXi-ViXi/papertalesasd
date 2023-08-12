<link rel="stylesheet" href="{{ asset('css/test.css') }}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Paper Tales: An online bookstore') }}
            <form action="{{ route('search') }}" method="GET">
    <input type="text" name="query" placeholder="Search...">
    <button type="submit">Search</button>
</form>
        </h2>
    </x-slot>
    @section('content')
    <a href="{{route('create.class')}}" class="btn tbn-sm btn-primary" style="float:right;">Add New</a>
    <div class = "distance">
    <div class="container">
    <div class="row">
    
    @foreach($results as $row)
    <div class="col-md-3">
    <a href="{{route('class.book' ,$row->id)}}">{{ $row->Book_Name }}<a>
    <h1>{{ $row->Author_Name }}<h1>
    <img src = "image/{{ $row->file_path }}" class="gridimage" style="max-width: 150px;">
    <h1>{{ $row->Price }}<h1>
    <a href="{{route('class.delete' ,$row->id)}}" class = "btn btn-sm btn-danger">delete</a>
    
</div>

@endforeach()
</div>
</div>
    
</div>
 @endsection 

</x-app-layout>


