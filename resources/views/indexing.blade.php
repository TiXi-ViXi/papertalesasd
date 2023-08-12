<link rel="stylesheet" href="{{ asset('css/test.css') }}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<x-app-layout>
    <x-slot name="header">
    <a href="{{route('class.cartmanage')}}"><img src = "image/cart.png" class="img-fluid img-thumbnail float-right" style="max-width: 100px;"></a>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Paper Tales: An online bookstore') }}
            <form action="{{ route('search2') }}" method="GET">
    <input type="text" name="query" placeholder="Search...">
    <button type="submit">Search</button>

</form>

        </h2>
    </x-slot>
    @section('content')

    
    <div class = "distance">
    <div class="container">
    <div class="row">
    
    @foreach($class as $key=>$row)
    <div class="col-md-3">
    <a href="{{route('class.book' ,$row->id)}}">{{ $row->Book_Name }}<a>
    <h1 class = "custom-cursor">{{ $row->Author_Name }}<h1>
    <img src = "image/{{ $row->file_path }}" class="gridimage" style="max-width: 150px;">
    <h1>{{ $row->Price }}<h1>
    <a href="{{route('class.addcart',$row->id)}}" class = "btn btn-sm btn-success">Add to Cart</a>
    <a href="{{route('class.book' ,$row->id)}}" class = "btn btn-sm btn-danger">view</a>
</div>

@endforeach()
</div>
</div>
    
</div>
<div class="crosshair"></div>
<script>
        document.addEventListener('mousemove', (e) => {
            const crosshair = document.querySelector('.crosshair');
            crosshair.style.left = `${e.clientX}px`;
            crosshair.style.top = `${e.clientY}px`;
        });
    </script>
 @endsection 

</x-app-layout>


