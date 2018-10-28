@extends('layouts.adminLayout.admin_book')
@section('content_book')
<!--main-container-part-->
<div id="content">
  <!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Book" class="tip-bottom"><i class="icon-list"></i>Book</a></div>
  </div>
  <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
    <h5>Data table</h5>
  </div>
  <div class="widget-content nopadding">
   <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Writer</th>
        <th>Images</th>
        <th>Year Release</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($books as $book)
     <tr>
      <td>{{$book['id']}}</td>
      <td>{{$book['name']}}</td>
      <td>{{$book['writer']}}</td> 
      <td>{{$book['filename']}}</td>
      <td>{{$book['year']}}</td>
      <td><a href="{{action('BookController@edit', $book['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('BookController@destroy', $book['id'])}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>
@endsection
