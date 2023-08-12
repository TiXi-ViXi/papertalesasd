@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/test.css') }}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
@section('content')
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Paper Tales: An online bookstore') }}
            <input type="text" class="form-control col-md-4 float-right" name="search" id="search" placeholder="Search...">
        </h2>

    </x-slot>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add New') }}

                </div>

                <div class="card-body">
                    @if(session()->has('success'))
                    <strong class="text-success">{{session()->get('success')}}</strong>
                    @endif
                <form action="{{route('store.class')}}" method= "post">
                    @csrf
                    <div class="mb-3">
                    <label for="exampleInputEmail1" class="for-label">Book Name</label>
                        <input type="text" name ="Book_Name" class="form-control"  id="exampleInputEmail1" placeholder="Book Name">
                        <label for="exampleInputEmail1" class="for-label">Author Name</label>
                        <input type="text" name ="Author_Name" class="form-control"  id="exampleInputEmail1" placeholder="Author Name">
                        <label for="exampleInputEmail1" class="for-label">Amount</label>
                        <input type="decimal" name ="Price" class="form-control"  id="exampleInputEmail1" placeholder="Money">
                        <label for="exampleInputEmail1" class="for-label">File Path</label>
                        <input type="String" name ="file_path" class="form-control"  id="exampleInputEmail1" placeholder="Link">
                        
</div>
<button type="submit" class="btn btn-primary pulse-button">Submit</button>

                </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
