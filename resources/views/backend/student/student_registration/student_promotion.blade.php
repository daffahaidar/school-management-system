@extends('admin.admin_master')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->

            <section class="content">
                <!-- Basic Forms -->
                <div class="box">
                    <div class="box-header with-border text-center">
                        <h4 class="box-title">Naikan Kelas {{ $editData['student']['name'] }}</h4>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col">

                                <form method="post"
                                    action="{{ route('promotion.student.registration', $editData->student_id) }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $editData->id }}">
                                    <div class="row">
                                        <div class="col-12">

                                            <div class="row">

                                                <div class="col">
                                                    <div class="form-group">
                                                        <h5>Kelas <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <select name="class_id" required="" class="form-control">
                                                                <option value="" selected="" disabled="">
                                                                    Pilih Kelas</option>
                                                                @foreach ($classes as $class)
                                                                    <option value="{{ $class->id }}"
                                                                        {{ $editData->class_id == $class->id ? 'selected' : '' }}>

                                                                        {{ $class->name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <h5>Tahun Angkatan <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <select name="year_id" required="" class="form-control">
                                                                <option value="" selected="" disabled="">
                                                                    Pilih Tahun</option>
                                                                @foreach ($years as $year)
                                                                    <option value="{{ $year->id }}"
                                                                        {{ $editData->year_id == $year->id ? 'selected' : '' }}>
                                                                        {{ $year->name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col">
                                                    <div class="form-group">
                                                        <h5>Jurusan (Opsional)</h5>
                                                        <div class="controls">
                                                            <select name="group_id" class="form-control">
                                                                <option value="" selected="" disabled="">
                                                                    Pilih Jurusan</option>
                                                                @foreach ($groups as $group)
                                                                    <option value="{{ $group->id }}"
                                                                        {{ $editData->group_id == $group->id ? 'selected' : '' }}>

                                                                        {{ $group->name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <h5>Shift Siswa (Opsional)</h5>
                                                        <div class="controls">
                                                            <select name="shift_id" class="form-control">
                                                                <option value="" selected="" disabled="">
                                                                    Pilih Shift</option>
                                                                @foreach ($shifts as $shift)
                                                                    <option value="{{ $shift->id }}"
                                                                        {{ $editData->shift_id == $shift->id ? 'selected' : '' }}>

                                                                        {{ $shift->name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col">
                                                    <div class="form-group">
                                                        <h5>Potongan Biaya (Opsional)</h5>
                                                        <div class="controls">
                                                            <input type="text" name="discount" class="form-control"
                                                                value="{{ $editData['discount']['discount'] }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="text-xs-right">
                                                <input type="submit" class="btn btn-rounded btn-info mb-5"
                                                    value="Naik Kelas">
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
