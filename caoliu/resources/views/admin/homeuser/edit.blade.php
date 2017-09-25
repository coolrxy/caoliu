@extends('admin.layout')
@section('title','修改管理员')
@section('header')
    @parent
@endsection
@section('sidebar')
    @parent
@endsection
@if(session()->get('user_level')==0 || session()->get('user_status')==3)
@section('content')
    <div class="content-wrapper">

        <section class="content-header">


        </section>

        <section class="content">
            <div class="row">


                <div class="col-md-offset-3 col-md-6">

                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">前台用户基本资料修改</h3>
                        </div>


                        <form id="art_form" class="form-horizontal" action="/admin/homeuser_doedit/{{ $data->users_id }}" method="post" enctype="multipart/form-data">

                            {{ csrf_field() }}

                            <div class="box-body">

                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">用户名</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputEmail3" name="users_name" value="{{ $data->users_name }}">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">用户昵称</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputEmail3" name="users_nickname" value="{{ $data->users_nickname }}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">用户头像</label>
                                    <div class="col-sm-10">

                                        <input  id="file_upload" name="file_upload" type="file" multiple="true" />

                                        <p><img src="{{ $data->users_pic }}" id="img1" alt="您的头像"  width="300px" /></p>

                                        <input  id="art_thumb" name="users_pic" type="hidden" />

                                    </div>
                                </div>

                            </div>

                            <div class="box-footer">

                                <button type="submit" class="btn btn-info pull-right">修改</button>

                            </div>

                        </form>
                    </div>

                </div>

            </div>

        </section>

    </div>

@endsection
@else
    <div class="alertError alert alert-danger">
        <span>你没有这个权限</span>
    </div>
@endif
@section('footer')
    @parent
@endsection
@section('aside')
    @parent
@endsection
@section('js')
    <script type="text/javascript">
        $('.alertError').fadeOut(3000);
    </script>



<!--    Ajax图片上传    -->

<script type="text/javascript">
    $(function () {
        $("#file_upload").change(function () {
            uploadImage();
        })
    })
    function uploadImage() {
        //  获取
        var imgPath = $("#file_upload").val();

        if (imgPath == "") {
            alert("请选择上传图片！");
            return;
        }

        //判断上传文件的后缀名
        var strExtension = imgPath.substr(imgPath.lastIndexOf('.') + 1);


        if (strExtension != 'jpg' && strExtension != 'gif'
            && strExtension != 'png' && strExtension != 'bmp') {
            alert("请选择图片文件");
            return;
        }

        var formData = new FormData($('#art_form')[0]);


        $.ajax({
            type: "POST",
            url: "/admin/homeuser_users_edit_pic",
            data: formData,
            contentType: false,
            processData: false,
            success: function(data) {
                $('#img1').attr('src',data);
                $('#art_thumb').val(data);

            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                alert("上传失败，请检查网络后重试");
            }
        });
    }




</script>




@stop