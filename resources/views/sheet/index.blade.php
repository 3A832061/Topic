@extends('layouts.partials.type')
@section('title','管樂社')
@section('index.con')
    <main class="flex-shrink-0">
        @include('layouts.nav')
        <div>
        <!-- Testimonial section-->
            <div class="py-3 bg-transparent">
            </div>
            <div class="py-5 bg-light">
                <div class="container px-9 my-5">
                    <div class="row gx-3 justify-content-center">
                        <div class="col-lg-10 col-xl-7">
                            <div class="text-center">

                                    <h1 class="fw-bolder">社內樂譜清單一覽</h1>
                                    <p class="lead fw-normal text-muted mb-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque fugit ratione dicta mollitia. Officiis ad.</p>

                                <!--div class="fs-4 mb-4 fst-italic">~</div>
                                <div class="d-flex align-items-center justify-content-center">
                                    <img class="rounded-circle me-3" src="https://images.plurk.com/24qO3V0ymvX3lzLiZufBqL.gif" alt="..." />
                                    <div class="fw-bold">
                                        A
                                        <span class="fw-bold text-primary mx-1">/</span>
                                    </div>
                                </div-->
                            </div>
                        </div>
                    </div>
                    <section class="py-5 bg-white" >
                        <div class="container px-5 my-5">
                            <div class="row gx-5 justify-content-center">
                                <div class="col-lg-8 col-xl-6">

                                </div>
                            </div>

                            <table class="table">
                                <thead class="thead-dark">
                                <tr>
                                    <th scope="col">編號</th>
                                    <th scope="col">曲目名稱</th>
                                    <th scope="col">中文譯名</th>
                                    <th scope="col">作曲者</th>
                                    <th scope="col">編曲者</th>
                                    <th scope="col">存譜缺少聲部</th>
                                    <th scope="col">存放形式</th>
                                    <th scope="col">授權方式</th>
                                    <th scope="col">年份</th>
                                    <th scope="col">購譜價格</th>
                                    <th scope="col">能否換譜</th>
                                    <th scope="col">10年間已演奏</th>
                                    <th scope="col">備註</th>
                                    <th scope="col">負責人</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                                </tbody>
                            </table>
                            <table class="table">
                                <thead class="thead-light">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- Call to action-->
                        <div class="container px-5 my-5">
                            <div class="row gx-5 justify-content-center">
                                <div class="col-lg-8 col-xl-6">
                                    <div class="text-center">
                                        <h2 class="fw-bolder">From our blog</h2>
                                        <p class="lead fw-normal text-muted mb-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque fugit ratione dicta mollitia. Officiis ad.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

            </div>
            <!-- Blog preview section-->

        </div>
    </main>
    @include('layouts.footer')
@endsection