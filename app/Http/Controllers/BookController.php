<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
class BookController extends Controller
{
	public function index()
    {
       $books = \App\Book::all();
       return view('admin/book',['books'=>$books]);
   }
   public function create()
   {
    return view('admin/book.create');
}
public function store(Request $request)
{
    if($request->hasfile('filename'))
    {
        $file = $request->file('filename');
        $img=time().$file->getClientOriginalName();
        $file->move(public_path().'/images/', $img);
    }
    $book= new \App\Book;
    $book->name=$request->get('name');
    $book->writer=$request->get('writer');
    $book->category=$request->get('category');
    $book->filename=$img;
    $book->year=$request->get('year');

    $book->save();

    return redirect('book')->with('success', 'Information has been added');
}
public function edit($id)
{
    $book = \App\Book::find($id);
    return view('admin/book_edit',compact('book','id'));
}
public function update(Request $request, $id)
{
    if($request->hasfile('filename'))
    {
        $file = $request->file('filename');
        $img=time().$file->getClientOriginalName();
        $file->move(public_path().'/images/', $img);
    }
    $book= \App\Book::find($id);
    $book->name=$request->get('name');
    $book->writer=$request->get('writer');
    $book->category=$request->get('category');
    $book->year=$request->get('year');
    $book->filename=$img;
    $book->save();
    return redirect('book');
}
public function destroy($id)
{
    $book = \App\Book::find($id);
    $book->delete();
    return redirect('book')->with('success','Information has been  deleted');
}
}
