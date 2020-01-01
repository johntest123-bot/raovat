@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
<h1>Tạo dịch vụ</h1>
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
    <a href="{{ route('admin.services.index') }}" class="btn btn-default">Back</a>
</div>
<br>
<div class="card">
    <div class="card-body">
        <form method="post" action="{{ route('admin.services.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <label class="col-sm-2 col-form-label require">Tiêu đề</label>
                <div class="col-sm-10">
                    <input type="text" name="title" class="form-control" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label require">Nội dung</label>
                <div class="col-sm-10">
                    <textarea name="content" class="form-control"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label require">Ảnh</label>
                <div class="col-sm-10">
                    <input type="file" name="thumbnail" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label require">Slug</label>
                <div class="col-sm-10">
                    <input type="text" name="slug" class="form-control" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Meta title</label>
                <div class="col-sm-10">
                    <input type="text" name="meta_title" class="form-control" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Meta keyword</label>
                <div class="col-sm-10">
                    <input type="text" name="meta_keyword" class="form-control" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Meta description</label>
                <div class="col-sm-10">
                    <textarea name="meta_description" class="form-control"></textarea>
                </div>
            </div>
            <div class="form-group text-center">
                <input type="submit" name="add" class="btn btn-primary input-lg" value="Thêm" />
            </div>
        </form>
    </div>
</div>
@stop
@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop
