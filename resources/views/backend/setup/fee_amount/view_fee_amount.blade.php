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
                            <h3 class="box-title">Daftar Tagihan</h3>
                            <a href="{{ route('fee.amount.add') }}" style="float: right;" class="btn btn-rounded btn-success mb-5"> Tambahkan Tagihan</a>
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
                                        @foreach($allData as $key => $amount)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $amount['fee_category']['name'] }}</td>
                                            <td>
                                                <a href="#" class="btn btn-info">Ubah</a>
                                                <a href="#" class="btn btn-danger" id="delete">Hapus</a>

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