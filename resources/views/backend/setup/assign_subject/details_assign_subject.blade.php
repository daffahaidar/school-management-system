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
                            <h3 class="box-title">Rincian Kurikulum {{ $detailsData['0']['student_class']['name'] }}</h3>
                            <a href="{{ route('assign.subject.view') }}" style="float: right;" class="btn btn-rounded btn-primary mb-5"> Kembali</a>
                        </div>

                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead class="thead-light">
                                        <tr>
                                            <th width="5%">No.</th>
                                            <th width="20%">Mata Pelajaran</th>
                                            <th width="20%">Nilai Rata-Rata</th>
                                            <th width="20%">Nilai KKM</th>
                                            <th width="20%">Target Nilai</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($detailsData as $key => $detail)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $detail['school_subject']['name'] }}</td>
                                            <td>{{ $detail->full_mark }}</td>
                                            <td>{{ $detail->pass_mark }}</td>
                                            <td>{{ $detail->subjective_mark }}</td>
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