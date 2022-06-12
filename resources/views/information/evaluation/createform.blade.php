@extends('layouts.partials.type')
@section('form.css')
    <link href="{{asset('css/clean-blog.min.css')}}" rel="stylesheet">

    <style>
        .row
        {padding-left:5% !important;}
        .mt-4
        {padding-left: 5%;}
        /*--*/
        .form-control-itemname
        {
            display: inline;
            width: 60%;
            height: 34px;
            padding: 6px 12px;
            font-size: 14px;
            line-height: 1.42857143;
            color: #555;
            background-color: #fff;
            background-image: none;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .form-group
        {
            margin-bottom: 15px !important;
        }
        #layoutSidenav_content
        {
            margin-left:200px !important;
            margin-bottom:100px !important;
        }
    </style>
    <script>
        function success(){
            var content = $("#form1 textarea").val();
            content = content.replace(/\n|\r\n/g,"<br>");
            window.alert("提交成功，感謝填寫");
        }
    </script>
@endsection
@section('index.con')
    @include('layouts.nav')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <!-- 公告-->
    <main class="flex-shrink-0">
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4" id="customerz1">新增活動</h1>
                </div>
                <!-- /.row -->
                <p>
                <div class="row">
                    <div class="col-lg-8">
                        <form id="form1" action="{{route('evaluation.store')}}" method="POST" role="form" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="title" class="inline">學年：*</label>
                                <input name="title" class="form-control-itemname" placeholder="請輸入學年" value="{{ old('title') }}" required onsubmit="return success();">
                            </div>

                            <div class="form-group">
                                <label for="remark" class="inline">連結：*</label>
                                <input id="remark" name="remark" class="form-control" rows="10" style="overflow: auto;overflow-y: auto; white-space: pre;" placeholder="請輸入社團評鑑的連結" required value={{ old('remark') }}>
                            </div>

                            <div class="form-group">
                                <label for="content" class="inline">注意事項：（換行就是一項注意事項）</label>
                                <textarea id="content" name="content" class="form-control" rows="10" style="overflow: auto;overflow-y: auto; white-space: pre;">{{ old('content') }}</textarea>
                            </div>

                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">提交</button>
                            </div>
                        </form>
                    </div>
                </div>
            </main>
        </div>
    </main>
    @include('layouts.footer')
@endsection