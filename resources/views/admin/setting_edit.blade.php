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
                    <h3 class="card-title">Setting Update</h3>

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

                    <form action="{{route('admin_setting_update')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">

                            <input type="hidden" name="id" value="{{$data->id}}" class="form-control">

                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="title" value="{{$data->title}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Keywords</label>
                                <input type="text" name="keywords" value="{{$data->keywords}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <input type="text" name="description" value="{{$data->description}}"
                                       class="form-control">

                            </div>
                            <div class="form-group">
                                <label>company</label>
                                <input type="text" name="company" value="{{$data->company}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>address</label>
                                <input type="text" name="address" value="{{$data->address}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>phone</label>
                                <input type="text" name="phone" value="{{$data->phone}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>fax</label>
                                <input type="text" name="fax" value="{{$data->fax}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>email</label>
                                <input type="text" name="email" value="{{$data->email}}" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>smtpserver</label>
                                <input type="text" name="smtpserver" value="{{$data->smtpserver}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>smtpemail</label>
                                <input type="text" name="smtpemail" value="{{$data->smtpemail}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>smtppassword</label>
                                <input type="text" name="smtppassword" value="{{$data->smtppassword}}"
                                       class="form-control">
                            </div>
                            <div class="form-group">
                                <label>smtpport</label>
                                <input type="text" name="smtpport" value="{{$data->smtpport}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>facebook</label>
                                <input type="text" name="facebook" value="{{$data->facebook}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>instagram</label>
                                <input type="text" name="instagram" value="{{$data->instagram}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>twitter</label>
                                <input type="text" name="twitter" value="{{$data->twitter}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>aboutus</label>
                                <input type="text" name="aboutus" value="{{$data->aboutus}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>contact</label>
                                <input type="text" name="contact" value="{{$data->contact}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>references</label>
                                <input type="text" name="contact" value="{{$data->references}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>status</label>
                                <input type="text" name="status" value="{{$data->status}}" class="form-control">
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
