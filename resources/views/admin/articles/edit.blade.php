@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
<h1>Cập nhật bài viết</h1>
@stop
@section('content')
@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<div align="right">
    <a href="{{ route('admin.articles.index') }}" class="btn btn-default">Back</a>
</div>
<br>
<div class="card">
    <div class="card-body">
        <form method="post" action="{{ route('admin.articles.update', $article->id) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group row">
                <label class="col-sm-2 col-form-label require">Tiêu đề</label>
                <div class="col-sm-10">
                    <input type="text" name="title" class="form-control" value="{{ $article->title }}" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label require">Danh mục</label>
                <div class="col-sm-10">
                    <select name="type_id" class="form-control">
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}"
                            @if ($category->id == $article->type_id)
                                selected="selected"
                            @endif
                        >{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
             <div class="form-group row">
                <label class="col-sm-2 col-form-label require">Nội dung</label>
                <div class="col-sm-10">
                    <textarea name="content" class="form-control">{{ $article->content }}</textarea>
                </div>
            </div>
            <div class="form-group text-center">
                <input type="submit" name="add" class="btn btn-primary input-lg" value="Cập nhật" />
            </div>
        </form>
    </div>
</div>
@stop
@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop
@section('js')
<script src={{ url('ckeditor/ckeditor.js') }}></script>
<script>
    CKEDITOR.replace( 'content', {
        filebrowserBrowseUrl: '{{ route('ckfinder_browser') }}',
    } );
</script>
@include('ckfinder::setup')
@stop
