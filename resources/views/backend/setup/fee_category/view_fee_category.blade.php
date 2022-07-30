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
                            <h3 class="box-title">Daftar Pembiayaan</h3>
                            <a href="{{ route('fee.category.add') }}" style="float: right;" class="btn btn-rounded btn-success mb-5"> Tambah Kategori</a>
                        </div>

                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th width="5%">No.</th>
                                            <th>Kategori Pembiayaan</th>
                                            <th width="25%">Tindakan</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($allData as $key => $fee)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $fee->name }}</td>
                                            <td>
                                                <a href="{{ route('fee.category.edit', $fee->id) }}" class="btn btn-info">Ubah</a>
                                                <a href="{{ route('fee.category.delete', $fee->id) }}" class="btn btn-danger" id="delete">Hapus</a>

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