@extends('layouts.default')

@section('content')
    <section class="page-title page-title-xlarge">
        <div class="overlay">
            <div class="overlay-wrapper">
                <div class="overlay-inner parallax-background" style="background-image: url('images/mb-index.jpg');"></div>
                <div class="overlay-inner background-dark-5 opacity-30"></div>
            </div>
        </div>
        <div class="container">
            <div class="col-md-10 col-md-offset-1 text-center">
                <h3 class="text-white no-top-margin">肠道菌群</h3>
                <p class="nobottommargin text-white">肠道菌群约占全身菌群总数的<strong>80%</strong>肠道是人体最重要的营养消化和吸收的场所基于二代测序技术的肠道健康检测产品</p>
            </div>
        </div>
    </section><!-- .page-title end -->

    <section class="section">
        <div class="container text-center">
            <h3>想要携手开拓肠道微生物的新领域？<br>或许我们可以帮助</h3>
            <a href="#" class="button button-rounded nobottommargin">联系我们</a>
        </div>
    </section>


    <section class="section paddingtop-130 paddingbottom-130 sm-pt-90 sm-nobottompadding">
        <div class="container">
            <div class="row">
                <div class="col-md-5 text-left sm-text-center sm-mb-90">
                    <h3>粑粑说</h3>
                    <div class="divider divider-left divider-dark"></div>
                    <p>通过获取少量粪便，让肠道微生物来告诉你的健康状态</p>
                    <a href="/baba" class="button button-blue button-link icon-right">快去看看<i class="fa fa-angle-right"></i></a>

                </div>
            </div>
        </div>
        <div class="container-fluid container-overlay">
            <div class="row">
                <div class="col-md-6 col-md-offset-6 col-background cover-background" style="background-image:url('/images/mb-baba.jpeg');">
                    <img class="img-responsive mobile-image" src="/images/mb-baba.jpeg" alt="" />
                </div>
            </div>
        </div>
    </section>

    <section class="section paddingtop-130 paddingbottom-130 sm-pt-90 sm-nobottompadding">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-md-offset-7 text-left sm-text-center sm-mb-90">
                    <h3>母婴产品</h3>
                    <div class="divider divider-left divider-dark"></div>
                    <p>精准分析孕妇及婴儿的肠道菌群状态，解析肠道微生态功能与健康，并结合个人基因、饮食、行为、生活、情绪、药物等多方位信息，全面解读母婴营养、生长发育和疾病，提供“优孕、优育、优养”的基石。</p>
                    <span>
                        <div>
                        <i  class="text-primary">婴幼儿营养代谢肠道微生态检测</i>
                            <a href="/baby" class="button button-blue button-link icon-right">
                                婴fen说
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>
                        <div>
                                <i  class="text-primary">孕期营养与妊娠疾病风险检测</i>
                            <a href="/mum" class="button button-blue button-link icon-right">
                                孕fen
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>
                    </span>





                </div>
            </div>
        </div>
        <div class="container-fluid container-overlay">
            <div class="row">
                <div class="col-md-6 col-background cover-background" style="background-image:url('/images/mb-mum-baby.jpg');">
                    <img class="img-responsive mobile-image" src="/images/mb-mum-baby.jpg" alt="" />
                </div>
            </div>
        </div>
    </section>

    <section class="section paddingtop-130 paddingbottom-130 sm-pt-90 sm-nobottompadding">
        <div class="container">
            <div class="row">
                <div class="col-md-5 text-left sm-text-center sm-mb-90">
                    <h3>白领健康</h3>
                    <div class="divider divider-left divider-dark"></div>
                    <p>心血管健康、血糖状况、肥胖是现代人士健康的头类杀手，造成各类慢性疾病隐患，通过解析肠道微生态功能，并综合评估个人基因、饮食、行为、生活、情绪、药物等多方位信息，帮助管理、预防慢病。</p>
                    <span class="text-left"">
                    <div>
                        <i  class="text-primary">体重管理解决方案</i>
                        <a href="/obesity" class="button button-blue button-link icon-right">
                            减肥
                            <i class="fa fa-angle-right"></i>

                        </a>
                    </div>
                    <div>
                        <i  class="text-primary">糖尿病的早期预防及干预管理</i>
                        <a href="/diabetes" class="button button-blue button-link icon-right">
                            控制血糖
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>

                    <div>
                        <i  class="text-primary">心血管健康危险因子检测</i>
                        <a href="/cardio" class="button button-blue button-link icon-right">
                            心血管健康
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>

                    </span>

                </div>
            </div>
        </div>
        <div class="container-fluid container-overlay">
            <div class="row">
                <div class="col-md-6 col-md-offset-6 col-background cover-background" style="background-image:url('/images/mb-work.jpeg');">
                    <img class="img-responsive mobile-image" src="/images/mb-work.jpeg" alt="" />
                </div>
            </div>
        </div>
    </section>

@endsection
