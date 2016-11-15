@extends('layouts.default')


@section('content')

		<!-- Page Title -->
<section class="page-title page-title-xlarge">
	<div class="overlay">
		<div class="overlay-wrapper">
			<div class="overlay-inner parallax-background" style="background-image: url('images/banner-4.jpg');"></div>
			<div class="overlay-inner background-dark-5 opacity-30"></div>
		</div>
	</div>
	<div class="container">
		<div class="col-md-10 col-md-offset-1 text-center">
			<h3 class="heading-uppercase text-white no-top-margin">了解谱元</h3>
			<p class="nobottommargin text-white">深圳谱元科技有限公司成立于2014年7月，专注于微生物检测，是由一群热衷技术的极客创立的高科技公司。2016年2月公司估值近2亿，已完成首轮融资。公司技术团队主攻微生物基因测序、深度分析超过十年，在国际上率先建立了肠道菌群宏基因组分析的方法学。</p>
		</div>
	</div>
</section><!-- .page-title end -->

<section class="section text-center">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h4 class="subtitle text-center">我们的核心技术</h4>
				<h3 class="text-center marginbottom-50">数据说话</h3>
			</div>
		</div>

		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<!-- Nav tabs - Icon -->
				<ul class="nav nav-tabs ico">
					<li class="active">
						<a href="#1-tab-ico" data-toggle="tab">
							<i class="ion-ios-clock-outline"></i><span>10</span>
						</a>
					</li>
					<li>
						<a href="#2-tab-ico" data-toggle="tab">
							<i class="ion-ios-clock-outline"></i><span>1000</span>
						</a>
					</li>
					<li>
						<a href="#3-tab-ico" data-toggle="tab">
							<i class="ion-ios-clock-outline"></i><span>10000</span>
						</a>
					</li>

					<li>
						<a href="#4-tab-ico" data-toggle="tab">
							<i class="ion-ios-clock-outline"></i><span>100000</span>
						</a>
					</li>
				</ul>
				<!-- Tab panes - Icon -->
				<div class="tab-content ico">
					<div class="tab-pane text-center active" id="1-tab-ico">
						<p>
							核心团队拥有
							十年的微生物（宏）
							基因组研究经验</p>
					</div>
					<div class="tab-pane text-center" id="2-tab-ico">
						<p>
							1000㎡P2+级别
							高规格超净
							生物实验室</p>
					</div>
					<div class="tab-pane text-center" id="3-tab-ico">
						<p>
							10000份的微生物
							样品实验室
							处理经验
						</p>
					</div>
					<div class="tab-pane text-center" id="4-tab-ico">
						<p>
							100000份的微生物
							基因数据的
							分析经验
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section text-center background-grey">
	<div class="overlay">
		<div class="overlay-wrapper">
			<div class="overlay-inner cover-background" style="background-image: url('/images/index-20161008-19.jpg');"></div>
			<div class="overlay-inner background-dark opacity-40"></div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<h1 class="text-white marginbottom-45">"愿景"</h1>
				<h3 class="text-white">打造一个微生物检测与数据分析平台 <br/><span style="font-size:18px;">建立并保持国际领先的微生物基因大数据采集及数据挖掘、深度分析能力</span></h3>
				<a href="#" class="button button-rounded nobottommargin">联系我们</a>
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
					深圳市罗湖总医院
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
					深圳市罗湖总医院
				</p>
			</div>
		</div>
		<div class="row clients-row">
			<div class="col-md-3 col-sm-6 client border-right">
				<img src="/images/pt-5.jpg" alt="" width="90" height="78" />
				<p>
					深圳市罗湖总医院
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



@endsection
