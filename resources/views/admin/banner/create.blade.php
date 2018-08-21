@extends('layouts.admin')
@section('content')
    <script>
        $(function () {
            $('input[type=checkbox]').iCheck({
                checkboxClass: 'icheckbox_square-blue',
            });
            $('input[type=file]').on('change', function (event) {
                if ($(this).val()) {
                    var file = event.target.files[0];
                    var reader = new FileReader();
                    reader.readAsDataURL(file);
                    reader.onload = function (e) {
                        var result = e.target.result;
                        $('#img').attr('src', result);
                    };
                    console.log($(this).val());
                } else {
                    console.log($('input[type=file]').val());
                }
            });
        });
    </script>
    <style>
        .table th  {
            text-align: center;
        }
        .table input {
            max-width: 800px;
        }
        .table span{
            color: red;
        }
    </style>
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">添加轮播图 </h3>
                        <div class="box-tools">
                            <div class="btn-group pull-right" style="margin-right: 10px">
                                <a href="{{route('admin.banner')}}" class="btn btn-sm btn-default form-history-back"><i
                                            class="fa fa-arrow-left"></i>&nbsp;返回</a>
                            </div>
                        </div>
                    </div>
                    <div class="box-body">
                        <form action="{{route('admin.banner.store')}}" method="post" enctype="multipart/form-data" pjax-container
                              accept-charset="UTF-8">
                            @csrf
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>标题</th>
                                    <td>
                                        <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                                        @if ($errors->any())
                                            <span>{!! $errors->first('title') !!}</span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>描述</th>
                                    <td>
                                        <input type="text" class="form-control" name="desc" value="{{ old('desc') }}">
                                        @if ($errors->any())
                                            <span>{!! $errors->first('desc') !!}</span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>图片</th>
                                    <td>
                                        <input type="file" class="form-control" name="imgUrl">
                                        @if ($errors->any())
                                            <span>{!! $errors->first('imgUrl') !!}</span>
                                        @endif

                                        @if(Session::has('toastr'))
                                            @php
                                                $toastr     = Session::get('toastr');
                                                $message    = array_get($toastr->get('message'), 0, '');
                                            @endphp
                                            <span>{{$message}}</span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>链接</th>
                                    <td>
                                        <input type="text" class="form-control" name="url" value="{{old('url')}}">
                                        @if ($errors->any())
                                            <span>{!! $errors->first('url') !!}</span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>是否显示</th>
                                    <td>
                                        <input type="checkbox" name="isShow" checked>
                                    </td>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="text-center" colspan="2">
                                        <input type="submit" class="btn btn-info" value="提交"/>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
                <div >
                    <img src="" id="img" width="400">
                </div>
            </div>
        </div>

    </div>
@endsection