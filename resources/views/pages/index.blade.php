@extends('layouts.default')

@section('content')


<section class="section nopadding">

    <!-- Swiper -->
    <div class="swiper-slider fullwidth">
        <div class="swiper-container swiper-container-horizontal" data-slidesperview="1" data-autoplay="5000" data-loop="false" data-keyboardcontrol="true">
            <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">

                <div class="swiper-slide paddingtop-80 paddingbottom-80 swiper-slide-active" style="width: 1903px;">
                    <div class="overlay">
                        <div class="overlay-wrapper">
                            <div class="overlay-inner cover-background" style="background-image: url('/images/index-1.jpg');"></div>
                            <div class="overlay-inner background-dark opacity-40"></div>
                        </div>
                    </div>
                    <div class="slide-container">
                        <div class="table-container">
                            <div class="table-content">
                                <div class="container text-center">
                                    <div class="row">
                                        <div class="col-md-6 col-md-push-6 text-right">
                                            <h1 class="text-white font-large font-extralight animated" data-animation="fadeInUp">中国数字微生态领域引领者</h1>
                                            {{--<p class="lead text-white animated" data-animation="fadeInUp" data-animation-delay="300">这里是测试文字</p>--}}
                                            {{--<div class="buttons-group animated fadeInUp visible" data-animation="fadeInUp" data-animation-delay="900">--}}
                                                {{--<a href="#" class="button button-border button-rounded button-white">了解</a>--}}
                                                {{--<a href="#about" class="button button-white button-link icon-right scrollto">查看 <i class="fa fa-angle-right"></i></a>--}}
                                            {{--</div>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide paddingtop-80 paddingbottom-80 swiper-slide-next" style="width: 1903px;">
                    <div class="overlay">
                        <div class="overlay-wrapper">
                            <div class="overlay-inner cover-background" style="background-image: url('/images/index-2.jpg');"></div>
                            <div class="overlay-inner background-dark opacity-40"></div>
                        </div>
                    </div>
                    <div class="slide-container">
                        <div class="table-container">
                            <div class="table-content">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 text-left">
                                            <h1 class="text-white font-large font-extralight animated" data-animation="fadeInUp">测试标题</h1>
                                            <p class="lead text-white animated" data-animation="fadeInUp" data-animation-delay="300">这里是测试文字</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide paddingtop-80 paddingbottom-80" style="width: 1903px;">
                    <div class="overlay">
                        <div class="overlay-wrapper">
                            <div class="overlay-inner cover-background" style="background-image: url('/images/index-3.jpg');"></div>
                            <div class="overlay-inner background-dark opacity-40"></div>
                        </div>
                    </div>
                    <div class="slide-container">
                        <div class="table-container">
                            <div class="table-content">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 col-md-push-6 text-right">
                                            <h1 class="text-white font-large font-extralight animated" data-animation="fadeInUp">测试标题</h1>
                                            <p class="lead text-white animated" data-animation="fadeInUp" data-animation-delay="300">这里是测试文字</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span></div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"><i class="fa fa-angle-right"></i></div>
            <div class="swiper-button-prev swiper-button-disabled"><i class="fa fa-angle-left"></i></div>
        </div>
    </div>

</section>

<section class="section text-center">
    <div class="container">
        <div class="row">

            <div class="col-sm-6 col-md-3">
                <div class="count-block">
                    <span class="count-to number" data-from="0" data-to="10"></span>
                    <span class="text">十年的微生物（宏）基因组研究经验</span>
                </div>
            </div>

            <div class="col-sm-6 col-md-3">
                <div class="count-block">
                    <span class="count-to number" data-from="0" data-to="1000"></span>
                    <span class="text">1000㎡P2+级别高规格生物实验室</span>
                </div>
            </div>

            <div class="col-sm-6 col-md-3">
                <div class="count-block">
                    <span class="count-to number" data-from="0" data-to="10000"></span>
                    <span class="text">10000份微生物样品处理经验</span>
                </div>
            </div>

            <div class="col-sm-6 col-md-3">
                <div class="count-block">
                    <span class="count-to number" data-from="0" data-to="100000"></span>
                    <span class="text">100000份微生物基因数据分析经验</span>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="section paddingtop-130 paddingbottom-130 sm-pt-90 sm-nobottompadding background-grey">
    <div class="container">
        <div class="row">
            <div class="col-md-5 text-left sm-text-center">
                <h4 class="subtitle">关于谱元</h4>
                <h3 class="marginbottom-50">中国微生态研究的引领者</h3>
                <p>谱元始建于2014年，在建立之初就是为了填补中国微生态研究领域的空白，谱元科技专注于微生物检测领域，公司骨干成员在《自然》、《科学》、《新英格兰医学杂志》等知名刊物上发表过数十篇高水平的SCI论文，并拥有数项国内外技术发明专利。</p>
            </div>
        </div>
    </div>
    <div class="container-fluid container-overlay">
        <div class="row">
            <div class="col-md-6 col-md-offset-6 col-background full-background bg-bottom-right" style="background-image:url('/images/index-1.jpg');">
                <img class="img-responsive mobile-image" src="/images/index-1.jpg" alt="" />
            </div>
        </div>
    </div>
</section>





<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="subtitle text-center">我们的核心技术</h4>
                <h3 class="text-center marginbottom-50">肠道菌群检测</h3>
            </div>
        </div>
        <div class="row marginbottom-30">
            <div class="col-md-1"></div>
			<div class="col-md-2">
				<div class="icon-box animate-divider sm-mb-30">
					<div class="box-container">
						<div class="icon-box-icon">
							<i class="ion-ios-book-outline"></i>
						</div>
						<h3>样品采集</h3>
						<div class="divider divider-center divider-dark"></div>
						<p>专利型采样管，保证样品采集与运输稳定可靠</p>
					</div>
				</div>
			</div>

			<div class="col-md-2">
				<div class="icon-box animate-divider sm-mb-30">
					<div class="box-container">
						<div class="icon-box-icon">
							<i class="ion-ios-speedometer-outline"></i>
						</div>
						<h3>样品寄送</h3>
						<div class="divider divider-center divider-dark"></div>
						<p>专业的第三方生物冷链运输</p>
					</div>
				</div>
			</div>

			<div class="col-md-2">
				<div class="icon-box animate-divider sm-mb-30">
					<div class="box-container">
						<div class="icon-box-icon">
							<i class="ion-ios-settings"></i>
						</div>
						<h3>实验处理</h3>
						<div class="divider divider-center divider-dark"></div>
						<p>富有经验的团队和专业的高通量测序仪</p>
					</div>
				</div>
			</div>
            <div class="col-md-2">
				<div class="icon-box animate-divider sm-mb-30">
					<div class="box-container">
						<div class="icon-box-icon">
							<i class="ion-ios-speedometer-outline"></i>
						</div>
						<h3>分析解读</h3>
						<div class="divider divider-center divider-dark"></div>
						<p>数万份数据分析经验，挖掘你想要的任何信息</p>
					</div>
				</div>
			</div>

			<div class="col-md-2">
				<div class="icon-box animate-divider sm-mb-30">
					<div class="box-container">
						<div class="icon-box-icon">
							<i class="ion-ios-settings"></i>
						</div>
						<h3>肠道健康管理</h3>
						<div class="divider divider-center divider-dark"></div>
						<p>专业的营养师团队随时为您服务</p>
					</div>
				</div>
			</div>
            <div class="col-md-1"></div>

		</div>
    </div>
</section>


<section class="section text-center">
    <!-- Overlay -->
    <div class="overlay">
        <div class="overlay-wrapper">
            <div class="overlay-inner cover-background-" style="background-image: url('/images/banner-4.jpg');"></div>
            <div class="overlay-inner opacity-85" style="background-color:#4baa82"></div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="subtitle text-cente" style="color: #eee">我们的热门产品</h4>
                <h3 class="text-center marginbottom-50 text-white">病原微生物检测</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-md-2 marginbottom-100">
                <div class="bx-container">
                    <div class="icon-bx marginbottom-30">
                        <img src="/images/by-index-1.png"></img>
                    </div>
                    <h3>核苷酸提取</h3>
                </div>
            </div>
            <div class="col-md-2 marginbottom-100">
                <div class="bx-container">
                    <div class="icon-bx marginbottom-30">
                        <img src="/images/by-index-2.png"></img>
                    </div>
                    <h3>测序文件构建</h3>
                </div>
            </div>
            <div class="col-md-2 marginbottom-100">
                <div class="bx-container">
                    <div class="icon-bx marginbottom-30">
                        <img src="/images/by-index-3.png"></img>
                    </div>
                    <h3>序列测定</h3>
                </div>
            </div>
            <div class="col-md-2 marginbottom-100">
                <div class="bx-container">
                    <div class="icon-bx marginbottom-30">
                        <img src="/images/by-index-6.png"></img>
                    </div>
                    <h3>序列分析</h3>
                </div>
            </div>
            <div class="col-md-2 marginbottom-100">
                <div class="bx-container">
                    <div class="icon-bx marginbottom-30">
                        <img src="/images/by-index-5.png"></img>
                    </div>
                    <h3>信息解读</h3>
                </div>
            </div>
            <div class="col-md-2 marginbottom-100">
                <div class="bx-container">
                    <div class="icon-bx marginbottom-30">
                        <img src="/images/by-index-4.png"></img>
                    </div>
                    <h3>报告撰写</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section text-center">
    <div class="container">
        <h4 class="subtitle text-center">Our happy</h4>
        <h3 class="text-center marginbottom-50">合作伙伴</h3>
        <div class="row clients-row">
            <div class="col-md-3 col-sm-6 client border-bottom border-right">
                <img src="/images/pt-1.jpg" alt="" width="90" height="78" />
                <p>
                    深圳市罗湖总医院
                </p>
            </div>
            <div class="col-md-3 col-sm-6 client border-bottom border-right">
                <img src="/images/pt-2.jpg" alt="" width="90" height="78" />
                <p>
                    深圳市儿童医院
                </p>
            </div>
            <div class="col-md-3 col-sm-6 client border-bottom border-right">
                <img src="/images/pt-3.jpg" alt="" width="90" height="78" />
                <p>
                    深圳市罗湖总医院
                </p>
            </div>
            <div class="col-md-3 col-sm-6 client border-bottom">
                <img src="/images/pt-4.jpg" alt="" width="90" height="78" />
                <p>
                    深圳市第二人民医院
                </p>
            </div>
        </div>
        <div class="row clients-row">
            <div class="col-md-3 col-sm-6 client border-right">
                <img src="/images/pt-5.jpg" alt="" width="90" height="78" />
                <p>
                    中国人民解放军总医院
                </p>
            </div>
            <div class="col-md-3 col-sm-6 client border-right">
                <img src="/images/pt-6.jpg" alt="" width="90" height="78" />
                <p>
                    深圳市罗湖总医院
                </p>
            </div>
            <div class="col-md-3 col-sm-6 client border-right">
                <img src="/images/pt-7.jpg" alt="" width="90" height="78" />
                <p>
                    深圳市罗湖总医院
                </p>
            </div>
            <div class="col-md-3 col-sm-6 client">
                <img src="/images/pt-8.jpg" alt="" width="90" height="78" />
                <p>
                    深圳市罗湖总医院
                </p>
            </div>
        </div>
    </div>
</section>




@stop
