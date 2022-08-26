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
                                <form method="GET" action="{{ route('student.year.class.wise') }}">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h5>Tahun Angkatan</h5>
                                                <div class="controls">
                                                    <select name="year_id" class="form-control">
                                                        <option value="" selected="" disabled="">Pilih Tahun
                                                        </option>
                                                        @foreach ($years as $year)
                                                            <option value="{{ $year->id }}"
                                                                {{ @$year_id == $year->id ? 'selected' : '' }}>
                                                                {{ $year->name }}</option>
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
                                                            <option value="{{ $class->id }}"
                                                                {{ @$class_id == $class->id ? 'selected' : '' }}>
                                                                {{ $class->name }}</option>
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

                                    @if (!isset($search))
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th width="5%">No.</th>
                                                    <th>Nama</th>
                                                    <th>NIS</th>
                                                    <th>Roll</th>
                                                    <th>Tahun</th>
                                                    <th>Kelas</th>
                                                    <th>Foto</th>
                                                    @if (Auth::user()->role == 'Admin')
                                                        <th>Kode</th>
                                                    @endif
                                                    <th width="25%">Tindakan</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($allData as $key => $value)
                                                    <tr>
                                                        <td>{{ $key + 1 }}</td>
                                                        <td>{{ $value['student']['name'] }}</td>
                                                        <td>{{ $value['student']['id_no'] }}</td>
                                                        <td>{{ $value->roll }}</td>
                                                        <td>{{ $value['student_year']['name'] }}</td>
                                                        <td>{{ $value['student_class']['name'] }}</td>
                                                        <td><img src="{{ !empty($value['student']['image']) ? url('upload/student_images/' . $value['student']['image']) : url('upload/no_image.jpg') }}"
                                                                style="width: 60px; height: 8z0px; border: 2px solid #7A15F7; border-radius: 5px;">
                                                        </td>
                                                        <td>{{ $value->year_id }}</td>
                                                        <td>
                                                            <a href="{{ route('student.registration.edit', $value->student_id) }}"
                                                                class="btn btn-info"><i
                                                                    class="fa fa-solid fa-user-pen"></i></a>

                                                            <a target="_blank"
                                                                href="{{ route('student.registration.details', $value->student_id) }}"
                                                                class="btn btn-primary"><i
                                                                    class="fa fa-solid fa-file-pdf"></i></a>

                                                        </td>
                                                    </tr>
                                                @endforeach

                                            </tbody>
                                            <tfoot>

                                            </tfoot>
                                        </table>
                                    @else
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th width="5%">No.</th>
                                                    <th>Nama</th>
                                                    <th>NIS</th>
                                                    <th>Roll</th>
                                                    <th>Tahun</th>
                                                    <th>Kelas</th>
                                                    <th>Foto</th>
                                                    @if (Auth::user()->role == 'Admin')
                                                        <th>Kode</th>
                                                    @endif
                                                    <th width="25%">Tindakan</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($allData as $key => $value)
                                                    <tr>
                                                        <td>{{ $key + 1 }}</td>
                                                        <td>{{ $value['student']['name'] }}</td>
                                                        <td>{{ $value['student']['id_no'] }}</td>
                                                        <td>{{ $value->roll }}</td>
                                                        <td>{{ $value['student_year']['name'] }}</td>
                                                        <td>{{ $value['student_class']['name'] }}</td>
                                                        <td><img src="{{ !empty($value['student']['image']) ? url('upload/student_images/' . $value['student']['image']) : url('upload/no_image.jpg') }}"
                                                                style="width: 60px; height: 8z0px; border: 2px solid #7A15F7; border-radius: 5px;">
                                                        </td>
                                                        <td>{{ $value->year_id }}</td>
                                                        <td>
                                                            <a href="{{ route('student.registration.edit', $value->student_id) }}"
                                                                class="btn btn-info"><i
                                                                    class="fa fa-solid fa-user-pen"></i></a>

                                                            <a target="_blank"
                                                                href="{{ route('student.registration.details', $value->student_id) }}"
                                                                class="btn btn-primary"><i
                                                                    class="fa fa-solid fa-file-pdf"></i></a>

                                                        </td>
                                                    </tr>
                                                @endforeach

                                            </tbody>
                                            <tfoot>

                                            </tfoot>
                                        </table>
                                    @endif
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
