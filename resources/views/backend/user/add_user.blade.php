@extends('admin.admin_master')
@section('admin')


<div class="content-wrapper">
    <div class="container-full">
        <!-- Content Header (Page header) -->

        <section class="content">
            <!-- Basic Forms -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Tambahkan Pengguna</h3>
                    <a href="{{ route('user.view') }}" style="float: right;" class="btn btn-rounded btn-primary mb-5"> Kembali</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col">

                            <form method="post" action="{{ route('users.store') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-12">

                                        <div class="row">
                                            <div class="col-md-6">

                                                <div class="form-group">
                                                    <h5>Akses Pengguna <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <select name="role" id="role" required="" class="form-control">
                                                            <option value="" selected="" disabled="">Pilih Akses</option>
                                                            <option value="Admin">Admin</option>
                                                            <option value="Operator">Operator</option>
                                                            <option value="User">User</option>

                                                        </select>

                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">

                                                    <h5>Nama Pengguna <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="name" class="form-control" required="">
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">

                                                <div class="form-group">

                                                    <h5>Email Pengguna<span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="email" name="email" class="form-control" required="">
                                                    </div>

                                                </div>

                                            </div>
                                            <div class="col-md-6">

                                            </div>
                                        </div>


                                        <div class="text-xs-right">
                                            <input type="submit" class="btn btn-rounded btn-info mb-5" value="Tambahkan">
                                        </div>
                                    </div>
                            </form>

                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

        </section>


    </div>
</div>

@endsection
