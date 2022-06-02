@extends('layouts.partials.type')
@section('form.css')
    <link href="{{asset('css/clean-blog.min.css')}}" rel="stylesheet">
    <style>
        .row
        {padding-left:50px !important;}
        .mt-4
        {padding-left: 35px;}
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
@endsection
@section('index.con')
    @include('layouts.nav')
    <!-- 公告-->
    <main class="flex-shrink-0">
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4" id="customerz1">樂譜缺頁申請單</h1>
                    <!--a class="btn btn-success flex-shrink-0" href={{route('apply.show')}}>查看審核狀態</a-->
                </div>
                <!-- /.row -->
                <p>
                <div class="row">
                    <div class="col-lg-8">
                        <iframe name="hidden_iframe" style="display: none;"></iframe>
                        <form action="#" target="hidden_iframe" method="POST" role="form">
                            @csrf
                            <?php
                            echo "<div class='form-group'>";
                            echo "<label for='sheet' class='inline'>曲目名稱：</label>";
                            echo "<input id='sheet' name='sheet'  class='form-control-itemname' placeholder='請輸入曲目原文名稱' value='' >";
                            echo "</div>";
                            echo "<div class='form-group'>";
                                echo "<label for='state' class='inline'>曲目類型：</label>";
                                    echo "<select id='state' name='play' class='form-control'>";
                                        echo "<option value='外文譜' >合奏譜－外文譜</option>";
                            ?>
                                        <option value='日文譜' >合奏譜－日文譜</option>

                                    <option value="日文譜" >合奏譜－中文譜</option>
                                    <option value="重奏譜" >重奏譜</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="part" class="inline">中文譯名：</label>
                                <input id="part" name="part" class="form-control-itemname" placeholder="若為外文曲目可輸入中譯名稱" value="" >
                            </div>
                            <div class="form-group">
                                <label for="page" class="inline">作曲者：</label>
                                <input name="page" class="form-control-itemname" placeholder="請輸入作曲者姓名" value="" id="page">
                            </div>
                            <div class="form-group">
                                <label for="numpage" class="inline">編曲者：</label>
                                <input name="numpage" class="form-control-itemname" placeholder="請輸入編曲者姓名" value="" id="numpage">
                            </div>
                            <div class="form-group">
                                <label for="quan" class="inline">存譜缺少聲部：</label>
                                <textarea name="quan" class="form-control-itemname" placeholder="若存譜有聲部缺少請在此處詳細註明" value="" id="quan"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="state" class="inline">存放形式：</label>
                                <select id="state" name="play" class="form-control">
                                    <option value="電子譜" >純電子譜</option>
                                    <option value="紙本譜" >純紙本譜</option>
                                    <option value="電子譜/紙本譜" >電子譜+紙本譜</option>
                                </select>
                            </div>
                            <!--譜的授權方式補充-->
                            <div class="form-group">
                                <label for="state" class="inline">授權方式：</label>
                                <select id="state" name="play" class="form-control">
                                    <option value="租賃譜" >租賃譜</option>
                                    <option value="授權書模式">授權書模式</option>
                                    <option value="授權指揮模式">授權指揮模式</option>
                                    <option value="原版譜模式">原版譜模式</option>
                                    <option value="福利譜">福利譜</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="remark" class="inline">年份：</label>
                                <input name="remark" class="form-control-itemname" type='year' placeholder="" value="" id="remark">
                            </div>
                            <div class="form-group">
                                <label for="remark" class="inline">購譜價格：</label>
                                <input name="remark" class="form-control-itemname" placeholder="如果有其他事項請在此處填寫" value="" id="remark">
                            </div>
                            <div class="form-group">
                                <label for="state" class="inline">能否換譜（※若不確定則默認不可換譜）：</label>
                                <select id="state" name="play" class="form-control">
                                    <option value="可以換譜" >可以換譜</option>
                                    <option value="不可換譜" selected>不可換譜</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="state" class="inline">10年間已演奏</label>
                                <select id="state" name="play" class="form-control">
                                    <option value="v" >是</option>
                                    <option value="" selected>否</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="remark" class="inline">備註：</label>
                                <input name="remark" class="form-control-itemname" placeholder="如果有其他備註或重奏聲部類別請在此處填寫" value="" id="remark">
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary" onclick="success()">儲存</button>
                            </div>
                    </form>

                    </div>
            </main>
        </div>
    </main>
    @include('layouts.footer')
    <script>


        function success(){
            window.alert("已送出申請");
            document.getElementById('index').click();
        }
    </script>
@endsection
