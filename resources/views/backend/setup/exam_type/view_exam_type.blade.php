@extends('admin.admin_master')
@section('admin')


<div class="content-wrapper">
    <div class="container-full">
        <!-- Content Header (Page header) -->


        <!-- Main content -->
        <section class="content">
            <div class="row">



                <div class="col-12">

                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Daftar Ujian Siswa</h3>
                            <a href="{{ route('exam.type.add') }}" style="float: right;" class="btn btn-rounded btn-success mb-5"> Tambahkan Ujian</a>
                        </div>

                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th width="5%">No.</th>
                                            <th>Kategori Ujian Siswa</th>
                                            <th width="25%">Tindakan</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($allData as $key => $exam)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $exam->name }}</td>
                                            <td>
                                                <a href="{{ route('exam.type.edit', $exam->id) }}" class="btn btn-info">Ubah</a>
                                                <a href="{{ route('exam.type.delete', $exam->id) }}" class="btn btn-danger" id="delete">Hapus</a>

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