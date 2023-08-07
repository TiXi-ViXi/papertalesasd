<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
class manage extends Controller
{
    public function index()
    {
        $class = DB::table('book')->get();
        return view('dashboard',compact('class'));
    }
    public function create(){
        return view('createbook');
    }

    public function store(Request $request){

        $data=array(
            'Book_Name' =>$request->Book_Name,
            'Author_Name'=>$request->Author_Name,
            'Price'=>$request->Price,
            'file_path'=>$request->file_path
        );

        DB::table('book')->insert($data);
        return redirect()->back()->with('success','Successfully inserted!');
}
public function delete($id){
    DB::table('book')->where('id',$id)->delete();
    return redirect()->back()->with('success','Successfully deleted');
}
public function search(Request $request)
{
    $query = $request->input('query');
    $results = DB::table('book')->where('Book_Name', 'like', '%' . $query . '%')->get();

    return view('index', compact('results'));
}
}