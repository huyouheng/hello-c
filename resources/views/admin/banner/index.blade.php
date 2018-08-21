@extends('layouts.admin')
@section('content')
    <script>
        $(function(){
            $('#fuck-refresh').click(function () {
                $.pjax.reload('#pjax-container');
                toastr.success('刷新成功');
            });
        });
    </script>
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <a class="btn btn-sm btn-primary grid-refresh" id="fuck-refresh"><i class="fa fa-refresh"></i>
                            刷新</a>
                        <a href="{{route('admin.banner.create')}}" class="btn btn-sm btn-success">
                            <i class="fa fa-save"></i>&nbsp;&nbsp;新增
                        </a>
                    </div>

                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection