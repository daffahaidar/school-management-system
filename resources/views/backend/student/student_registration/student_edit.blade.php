@extends('admin.admin_master')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->

            <section class="content">
                <!-- Basic Forms -->
                <div class="box">
                    <div class="box-header with-border">
                        <h4 class="box-title">Ubah Data Siswa</h4>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col">

                                <form method="post"
                                    action="{{ route('update.student.registration', $editData->student_id) }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $editData->id }}">
                                    <div class="row">
                                        <div class="col-12">


                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h5>Nama Siswa <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="name" class="form-control"
                                                                required="" value="{{ $editData['student']['name'] }}">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h5>Nama Ayah <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="father" class="form-control"
                                                                required="" value="{{ $editData['student']['father'] }}">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h5>Nama Ibu <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="mother" class="form-control"
                                                                required="" value="{{ $editData['student']['mother'] }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h5>No. Telepon <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="mobile" class="form-control"
                                                                required="" value="{{ $editData['student']['mobile'] }}">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h5>Alamat Siswa <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="address" class="form-control"
                                                                required=""
                                                                value="{{ $editData['student']['address'] }}">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h5>Jenis Kelamin <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <select name="gender" id="gender" required=""
                                                                class="form-control">
                                                                <option value="" selected="" disabled="">Pilih
                                                                    Jenis Kelamin</option>
                                                                <option value="Laki-Laki"
                                                                    {{ $editData['student']['gender'] == 'Laki-Laki' ? 'selected' : '' }}>
                                                                    Laki-Laki</option>
                                                                <option value="Perempuan"
                                                                    {{ $editData['student']['gender'] == 'Perempuan' ? 'selected' : '' }}>
                                                                    Perempuan</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h5>Agama <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <select name="religion" id="religion" required=""
                                                                class="form-control">
                                                                <option value="" selected="" disabled="">Pilih
                                                                    Agama</option>
                                                                <option value="Islam"
                                                                    {{ $editData['student']['religion'] == 'Islam' ? 'selected' : '' }}>
                                                                    Islam</option>
                                                                <option value="Kristen"
                                                                    {{ $editData['student']['religion'] == 'Kristen' ? 'selected' : '' }}>
                                                                    Kristen</option>
                                                                <option value="Katholik"
                                                                    {{ $editData['student']['religion'] == 'Katholik' ? 'selected' : '' }}>
                                                                    Katholik</option>
                                                                <option value="Hindu"
                                                                    {{ $editData['student']['religion'] == 'Hindu' ? 'selected' : '' }}>
                                                                    Hindu</option>
                                                                <option value="Budha"
                                                                    {{ $editData['student']['religion'] == 'Budha' ? 'selected' : '' }}>
                                                                    Budha</option>
                                                                <option value="Konghuchu"
                                                                    {{ $editData['student']['religion'] == 'Konghuchu' ? 'selected' : '' }}>
                                                                    Konghunchu</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h5>Tanggal Lahir <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="date" name="birth" class="form-control"
                                                                required=""
                                                                value="{{ $editData['student']['birth'] }}">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h5>Potongan Biaya (Opsional)</h5>
                                                        <div class="controls">
                                                            <input type="text" name="discount" class="form-control"
                                                                value="{{ $editData['discount']['discount'] }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-4">
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

                                                <div class="col-md-4">
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

                                                <div class="col-md-4">
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
                                                <div class="col-md-4">
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

                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h5>Foto Siswa</h5>
                                                        <div class="controls">
                                                            <input type="file" name="image" class="form-control"
                                                                id="image" value="">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <img id="showImage"
                                                                src="{{ !empty($editData['student']['image']) ? url('upload/student_images/' . $editData['student']['image']) : url('upload/no_image.jpg') }}"
                                                                style="width: 100px; height: 130px; border: 2px solid #7A15F7; border-radius: 5px;">
                                                            <a href="{{ route('student.registration.promotion', $editData->student_id) }}"
                                                                class="btn btn-success ml-10">Naik Kelas</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="text-xs-right">
                                                <input type="submit" class="btn btn-rounded btn-info mb-5"
                                                    value="Simpan Perubahan">
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

    <script type="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection
