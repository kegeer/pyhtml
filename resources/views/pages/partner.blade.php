@extends('layouts.default')


@section('content')

	<section class="page-title page-title-xlarge">
		<div class="overlay">
			<div class="overlay-wrapper">
				<div class="overlay-inner parallax-background" style="background-image: url('images/banner-6.jpg');"></div>
				<div class="overlay-inner background-dark-5 opacity-30"></div>
			</div>
		</div>
		<div class="container">
			<div class="col-md-10 col-md-offset-1 text-center">
				<h3 class="heading-uppercase text-white no-top-margin">合作</h3>
				<p class="nobottommargin text-white">Everything you need to know about our Company.</p>
			</div>
		</div>
	</section><!-- .page-title end -->
	<section class="section paddingtop-30 paddingbottom-30">
		<div class="container paddingleft-30 paddingright-30">
			<div class="row feature-box-container">
				<div class="col-md-4 sm-mb-30">
					<div class="feature-box text-left" style="height: 340px;">
						<div class="overlay">
							<div class="overlay-wrapper">
								<div class="overlay-inner cover-background" style="background-image: url('demo/images/image-3.jpg');"></div>
								<div class="overlay-inner background-dark opacity-40"></div>
							</div>
						</div>
						<div class="box-content">
							<h3 class="margintop-20 marginbottom-30 text-white">科学研究</h3>
							<p class="lead marginbottom-30 text-white">谱元科技专注于微生物检测领域，公司骨干成员在《自然》、《科学》、《新英格兰医学杂志》等知名刊物上发表过数十篇高水平的SCI论文，并拥有数项国内外技术发明专利。</p>
							<a href="#" class="button button-border button-rounded button-white nomargin">取得联系</a>
						</div>
					</div>
				</div>
				<div class="col-md-4 sm-mb-30">
					<div class="feature-box text-left" style="height: 340px;">
						<div class="overlay">
							<div class="overlay-wrapper">
								<div class="overlay-inner cover-background" style="background-image: url('demo/images/image-5.jpg');"></div>
								<div class="overlay-inner background-dark opacity-40"></div>
							</div>
						</div>
						<div class="box-content">
							<h3 class="margintop-20 marginbottom-30 text-white">产品定制</h3>
							<p class="lead marginbottom-30 text-white">如果您有现成的健康产品线，或许想给用户更加详实的管理，我们提供标准的肠道菌群研究结果，并且提供多方位的个性化定制，以供您可以无缝的嵌入到现有的产品线</p>
							<a href="#" class="button button-border button-rounded button-white nomargin">取得联系</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="feature-box text-left" style="height: 340px;">
						<div class="overlay">
							<div class="overlay-wrapper">
								<div class="overlay-inner cover-background" style="background-image: url('demo/images/image-6.jpg');"></div>
								<div class="overlay-inner background-dark opacity-40"></div>
							</div>
						</div>
						<div class="box-content">
							<h3 class="margintop-20 marginbottom-30 text-white">需求开发</h3>
							<p class="lead marginbottom-30 text-white">想要在人体“第二基因组”和人体代谢组学方面开拓更多，或许您可以借助我们数十年行业经验来携手创造。</p>
							<a href="#" class="button button-border button-rounded button-white nomargin">取得联系</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section text-center paddingtop-160 paddingbottom-160">

		<div class="container">
			<h2>我们想告诉你的还有更多</h2>
			<h5 class="marginbottom-30">你可以在此留下你的邮件地址，随时方便获取我们及时的产品更新</h5>
			<div class="form">
				<div class="form-container">
					<div class="page-section" id="signup">
						<form class="subscription-form mailchimp-form nobottommargin" method="post" id="mc-form" novalidate="true">
							<div class="row">
								<div class="col-md-4 col-md-offset-4">
									<input type="email" id="email" class="form-control input-border-bottom" name="EMAIL" placeholder="留下您的电子邮件">
								</div>
								<div class="col-md-12 text-center">
									<button type="submit" id="subscribebtn" class="button button-border button-rounded notopmargin nobottommargin">确定</button>
								</div>
							</div>
						</form>
						<p class="error-message"></p>
						<p class="success-message"></p>
					</div><!--end page section -->
				</div><!-- end form container -->
			</div>
		</div>
	</section>

@endsection
