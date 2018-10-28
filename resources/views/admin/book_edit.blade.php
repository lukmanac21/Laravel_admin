@extends('layouts.adminLayout.admin_book_create')
@section('content_addbook')
 <div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="" class="tip-bottom"><i class="icon-list"></i>New Book</a>
  </div>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-pencil"></i> </span>
           <h5>Form &amp; Add New Book</h5>
          </div>
          <div class="widget-content nopadding">
            <form id="form-wizard" class="form-horizontal" method="post" action="{{action('BookController@update', $id)}}" enctype="multipart/form-data">
              @csrf
              <input name="_method" type="hidden" value="PATCH">
              <div id="form-wizard-1" class="step">
                <div class="control-group">
                  <label class="control-label">Book Title</label>
                  <div class="controls">
                    <input id="name" type="text" name="name" value="{{$book->name}}" />
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Writer</label>
                  <div class="controls">
                    <input id="writer" type="text" name="writer" value="{{$book->writer}}" />
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Year Release</label>
                  <div class="controls">
                    <input id="year" type="text" name="year" value="{{$book->year}}"/>
                  </div>
                </div>
                 <div class="control-group">
                  <label class="control-label">Images</label>
                  <div class="controls">
                    <input id="filename" type="file" name="filename" />
                  </div>
                </div>
              </div>
                <div class="control-group">
                  <label class="control-label">Category</label>
                  <div class="controls">
                  <select name="category">
                  <option value="Science">Science</option>
                  <option value="Technology">Technology</option>
                  <option value="Social">Social</option>  
                  <option value="Mathematic">Mathematic</option>  
                </select>
                  </div>
                </div>
              </div>
              <div class="form-actions">
                <input id="next" class="btn btn-primary" type="submit" value="Save" />
                <div id="status"></div>
              </div>
              <div id="submitted"></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
