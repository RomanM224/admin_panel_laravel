@extends('layouts.admin_layout')

@section('title', 'Add Post')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Add Post</h1>
            </div><!-- /.col -->

        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        @if (session('success'))
        <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
        </div>
        @endif
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-primary">
                    <!-- form start -->
                    <form action="{{ route('post.store') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="title" placeholder="Enter post name" required>
                            </div>
                            <!-- Select multiple-->

                            <div class="form-group">
                                <label>Choose Category</label>
                                <select name="cat_id" class="form-control" required>
                                    @foreach($categories as $category)
                                    <option value="{{ $category['id'] }}">{{ $category['title'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <textarea name="text" class="editor" id="editor"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="feature_image">Choose Image</label>
                                <img src="/{{ $post['img'] ?? ''}}" alt="" class="imgUploaded" width="400" style="display:block">
                                <input type="text" name="img" class="form-control" id="feature_image" name="feature_image" value="" readonly>
                                <a href="" class="popup_selector btn btn-primary mt-2" data-inputid="feature_image">Select Image</a>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->

@endsection