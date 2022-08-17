@extends('admin.admin_master')
@section('admin')
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->


            <!-- Main content -->
            <section class="content">
                <div class="row">

                    <div class="col-12">
                        <div class="box bb-3 border-info">
                            <div class="box-header">
                                <h4 class="box-title">Cari <strong>Siswa</strong></h4>
                            </div>

                            <div class="box-body">
                                <form action="" method="">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h5>Tahun Angkatan</h5>
                                                <div class="controls">
                                                    <select name="year_id" class="form-control">
                                                        <option value="" selected="" disabled="">Pilih Tahun
                                                        </option>
                                                        @foreach ($years as $year)
                                                            <option value="{{ $year->id }}">{{ $year->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h5>Kelas</h5>
                                                <div class="controls">
                                                    <select name="class_id" class="form-control">
                                                        <option value="" selected="" disabled="">Pilih Kelas
                                                        </option>
                                                        @foreach ($classes as $class)
                                                            <option value="{{ $class->id }}">{{ $class->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4" style="padding-top: 21px;">
                                            <input type="submit" class="btn btn-rounded btn-primary mb-5" name="search"
                                                value="Cari Siswa">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title">Daftar Siswa</h3>
                                <a href="{{ route('student.registration.add') }}" style="float: right;"
                                    class="btn btn-rounded btn-success mb-5"> Tambahkan Siswa</a>
                            </div>

                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th width="5%">No.</th>
                                                <th>Nama</th>
                                                <th>Nomor ID</th>
                                                <th width="25%">Tindakan</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($allData as $key => $value)
                                                <tr>
                                                    <td>{{ $key + 1 }}</td>
                                                    <td>{{ $value->class_id }}</td>
                                                    <td>{{ $value->year_id }}</td>
                                                    <td>
                                                        <a href="" class="btn btn-info">Ubah</a>
                                                        <a href="" class="btn btn-danger" id="delete">Hapus</a>

                                                    </td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                        <tfoot>

                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->


                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </section>
            <!-- /.content -->

        </div>
    </div>
@endsection
