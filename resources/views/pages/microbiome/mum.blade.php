@extends('layouts.default')


@section('content')
    <section class="page-title page-title-xlarge">
        <div class="overlay">
            <div class="overlay-wrapper">
                <div class="overlay-inner parallax-background" style="background-image: url('images/mum-index.png');"></div>
                <div class="overlay-inner background-dark-5 opacity-30"></div>
            </div>
        </div>
        <div class="container">
            <div class="col-md-6 text-left">
                <h3 class="heading-uppercase text-white no-top-margin">孕fen说</h3>
                <h5 class="text-primary">孕期营养与妊娠疾病风险检测</h5>
                <p class="nobottommargin text-white">孕期营养影响孕妇及胎儿的健康，营养失衡、能量摄入不足或过多等不仅会增加孕妇妊娠期疾病风险、生产危险、母乳营养不足，还会引起胎儿发育不平衡及生产后婴幼儿的疾病风险。</p>
            </div>
        </div>
    </section><!-- .page-title end -->

    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="subtitle text-center">孩子怎样才能健康成长</h4>
                    <h3 class="text-center marginbottom-50">母亲的健康才是源泉</h3>
                </div>
            </div>

            <div class="row marginbottom-30">

                <div class="col-md-3">
                    <div class="icon-box bordered animate-divider sm-mb-30">
                        <div class="box-container">
                            <div class="icon-box-icon circle">
                                <div class="icon-container">
                                    <i class="ion-ios-book-outline"></i>
                                </div>
                            </div>
                            <h3>无创取粑粑</h3>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="icon-box bordered animate-divider sm-mb-30">
                        <div class="box-container">
                            <div class="icon-box-icon circle">
                                <div class="icon-container">
                                    <i class="ion-ios-speedometer-outline"></i>
                                </div>
                            </div>
                            <h3>常温保存寄送</h3>

                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="icon-box bordered animate-divider">
                        <div class="box-container">
                            <div class="icon-box-icon circle">
                                <div class="icon-container">
                                    <i class="ion-ios-settings"></i>
                                </div>
                            </div>
                            <h3>获取肠道菌群数据</h3>

                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="icon-box bordered animate-divider">
                        <div class="box-container">
                            <div class="icon-box-icon circle">
                                <div class="icon-container">
                                    <i class="ion-ios-settings"></i>
                                </div>
                            </div>
                            <h3>个体化的健康管理方案</h3>

                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>

     {{--<section class="section">--}}
        {{--<div class="container">--}}
            {{--<div class="paddingbottom-50 text-center">--}}
                {{--<h4 class="heading-uppercase">Centered Icons</h4>--}}
            {{--</div>--}}

            {{--<div class="row marginbottom-30">--}}

                {{--<div class="col-md-4">--}}
                    {{--<div class="icon-box animate-divider sm-mb-30">--}}
                        {{--<div class="box-container">--}}
                            {{--<div class="icon-box-icon">--}}
                                {{--<i class="ion-ios-book-outline"></i>--}}
                            {{--</div>--}}
                            {{--<h3>Well Documented</h3>--}}
                            {{--<div class="divider divider-center divider-dark"></div>--}}
                            {{--<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<div class="col-md-4">--}}
                    {{--<div class="icon-box animate-divider sm-mb-30">--}}
                        {{--<div class="box-container">--}}
                            {{--<div class="icon-box-icon">--}}
                                {{--<i class="ion-ios-speedometer-outline"></i>--}}
                            {{--</div>--}}
                            {{--<h3>Fast &amp; Easy</h3>--}}
                            {{--<div class="divider divider-center divider-dark"></div>--}}
                            {{--<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<div class="col-md-4">--}}
                    {{--<div class="icon-box animate-divider sm-mb-30">--}}
                        {{--<div class="box-container">--}}
                            {{--<div class="icon-box-icon">--}}
                                {{--<i class="ion-ios-settings"></i>--}}
                            {{--</div>--}}
                            {{--<h3>Fully Customizable</h3>--}}
                            {{--<div class="divider divider-center divider-dark"></div>--}}
                            {{--<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}

    {{--<section class="section nopadding">--}}
        {{--<div class="container-fluid">--}}
            {{--<div class="row feature-box-container">--}}
                {{--<div class="col-md-3 feature-box text-left overlay-fade animate-divider" style="height: 200px;">--}}
                    {{--<div class="overlay">--}}
                        {{--<div class="overlay-wrapper">--}}
                            {{--<div class="overlay-inner background-blue opacity-100 fade-90"></div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="box-container paddingtop-30 paddingbottom-30">--}}
                        {{--<div class="table-container">--}}
                            {{--<div class="table-content">--}}
                                {{--<div class="box-content center">--}}
                                    {{--<div class="icon-box no-background">--}}
                                        {{--<div class="block-container">--}}
                                            {{--<div class="icon-box-icon pb15 text-white text-center">--}}
                                                {{--<i class="ion-ios-book"></i>--}}
                                            {{--</div>--}}
                                            {{--<h5 class="heading-uppercase text-white text-center">Planning</h5>--}}
                                            {{--<div class="divider divider-center divider-light"></div>--}}
                                            {{--<p class="text-white text-center">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-3 feature-box text-left overlay-fade animate-divider" style="height: 200px;">--}}
                    {{--<div class="overlay">--}}
                        {{--<div class="overlay-wrapper">--}}
                            {{--<div class="overlay-inner background-blue opacity-80 fade-70"></div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="box-container paddingtop-30 paddingbottom-30">--}}
                        {{--<div class="table-container">--}}
                            {{--<div class="table-content">--}}
                                {{--<div class="box-content center">--}}
                                    {{--<div class="icon-box no-background">--}}
                                        {{--<div class="block-container">--}}
                                            {{--<div class="icon-box-icon pb15 text-white text-center">--}}
                                                {{--<i class="ion-edit"></i>--}}
                                            {{--</div>--}}
                                            {{--<h5 class="heading-uppercase text-white text-center">Design &amp; Development</h5>--}}
                                            {{--<div class="divider divider-center divider-light"></div>--}}
                                            {{--<p class="text-center text-white">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-3 feature-box text-left overlay-fade animate-divider" style="height: 200px;">--}}
                    {{--<div class="overlay">--}}
                        {{--<div class="overlay-wrapper">--}}
                            {{--<div class="overlay-inner background-blue opacity-60 fade-50"></div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="box-container paddingtop-30 paddingbottom-30">--}}
                        {{--<div class="table-container">--}}
                            {{--<div class="table-content">--}}
                                {{--<div class="box-content center">--}}
                                    {{--<div class="icon-box no-background">--}}
                                        {{--<div class="block-container">--}}
                                            {{--<div class="icon-box-icon pb15 text-white text-center">--}}
                                                {{--<i class="ion-earth"></i>--}}
                                            {{--</div>--}}
                                            {{--<h5 class="heading-uppercase text-white text-center">Launch</h5>--}}
                                            {{--<div class="divider divider-center divider-light"></div>--}}
                                            {{--<p class="text-center text-white">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<div class="col-md-3 feature-box text-left overlay-fade animate-divider" style="height: 200px;">--}}
                    {{--<div class="overlay">--}}
                        {{--<div class="overlay-wrapper">--}}
                            {{--<div class="overlay-inner background-blue opacity-60 fade-50"></div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="box-container paddingtop-30 paddingbottom-30">--}}
                        {{--<div class="table-container">--}}
                            {{--<div class="table-content">--}}
                                {{--<div class="box-content center">--}}
                                    {{--<div class="icon-box no-background">--}}
                                        {{--<div class="block-container">--}}
                                            {{--<div class="icon-box-icon pb15 text-white text-center">--}}
                                                {{--<i class="ion-earth"></i>--}}
                                            {{--</div>--}}
                                            {{--<h5 class="heading-uppercase text-white text-center">Launch</h5>--}}
                                            {{--<div class="divider divider-center divider-light"></div>--}}
                                            {{--<p class="text-center text-white">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section> --}}
@stop
