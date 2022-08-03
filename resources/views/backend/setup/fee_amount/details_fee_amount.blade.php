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
                            <h3 class="box-title">Rincian Tagihan {{ $detailsData['0']['fee_category']['name'] }}</h3>
                            <a href="{{ route('fee.amount.view') }}" style="float: right;" class="btn btn-rounded btn-primary mb-5"> Kembali</a>
                        </div>

                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead class="thead-light">
                                        <tr>
                                            <th width="5%">No.</th>
                                            <th>Nama Kelas</th>
                                            <th width="25%">Jumlah Tagihan</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($detailsData as $key => $detail)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $detail['student_class']['name'] }}</td>
                                            <td>Rp. {{ $detail->amount }}</td>

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