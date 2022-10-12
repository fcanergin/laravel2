@extends('layouts.admin');

@section('title','Category Edit');

@section('header_js')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Blank Page</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Blank Page</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Product Update</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">

                    <form action="{{route('admin_product_update',['id'=>$data['id']])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label>Parent</label>
                                <select class="form-control select2" name="parent_id" style="width: 100%;">

                                    <option value="0">Category</option>
                                    @foreach($datalist as $val)
                                        <option value="{{$val->id}}" @if ($data->category_id==$val->id) selected="selected" @endif>{{$val->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="title" value="{{$data->title}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Keywords</label>
                                <input type="text" name="keywords" value="{{$data->keywords}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Images</label>
                                <input type="file" name="image" class="form-control" value="{{$data->image}}">

                                @if($data->image)
                                    <img src="{{Storage::url($data->image)}}" height="10 0">
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <input type="text" name="description" value="{{$data->description}}" class="form-control">

                            </div>
                            <div class="form-group">
                                <label>Detail</label>
                                <textarea class="form-control" id="summernote" name="detail">{{$data->detail}}</textarea>
                                <script>
                                    $(document).ready(function() {
                                        $('#summernote').summernote();
                                    });
                                </script>
                            </div>
                            <div class="form-group">
                                <label>Price</label>
                                <input type="text" name="price" value="{{$data->price}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Quantity</label>
                                <input type="text" name="quantity" value="{{$data->quantity}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Minquantity</label>
                                <input type="text" name="minquantity" value="{{$data->minquantity}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Tax</label>
                                <input type="text" name="tax" value="{{$data->tax}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Slug</label>
                                <input type="text" name="slug" value="{{$data->slug}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control select2" name="status" style="width: 100%;">
                                    <option selected="selected">{{$data->status}}</option>
                                    <option>False</option>
                                    <option>True</option>
                                </select>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    Footer
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
