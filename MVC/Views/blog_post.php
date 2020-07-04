<!-- Page Header -->
<div id="post-header" class="page-header">
	<div class="background-img" style="background-image: url('public/img/<?= $data_detail['thumbnail'] ?>');"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<div class="post-meta">
					<a class="post-category cat-<?= $data_detail['idcate'] ?>" href="?mod=category&id=<?= $data_detail['idcate'] ?>?>"><?= $data_detail['t'] ?></a>
					<span class="post-date"><?= $data_detail['created_at'] ?></span>
				</div>
				<h1><?= $data_detail['title'] ?></h1>
			</div>
		</div>
	</div>
</div>
<!-- /Page Header -->
<!-- section -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<!-- Post content -->
			<div class="col-md-8">
				<div class="section-row sticky-container">
					<div class="main-post">
						<h3><?= $data_detail['title'] ?></h3>
						<p><i><?= $data_detail['descripition'] ?></i></p>
						<figure class="figure-img">
							<img class="img-responsive" src="public/img/<?= $data_detail['thumbnail'] ?>" alt="" height="750px" width="450px">
						</figure>
						<p><?= $data_detail['contents'] ?></p>
						<p><strong>Đăng bởi: <?= $data_detail['n'] ?></strong></p>
					</div>
					<div class="post-shares sticky-shares">
						<a href="#" class="share-facebook"><i class="fa fa-facebook"></i></a>
						<a href="#" class="share-twitter"><i class="fa fa-twitter"></i></a>
						<a href="#" class="share-google-plus"><i class="fa fa-google-plus"></i></a>
						<a href="#" class="share-pinterest"><i class="fa fa-pinterest"></i></a>
						<a href="#" class="share-linkedin"><i class="fa fa-linkedin"></i></a>
						<a href="#"><i class="fa fa-envelope"></i></a>
					</div>
				</div>

				<!-- ad -->
				<div class="section-row text-center">
					<a href="#" style="display: inline-block;margin: auto;">
						<img class="img-responsive" src="./img/ad-2.jpg" alt="">
					</a>
				</div>
				<!-- ad -->

				<!-- author -->
				<div class="section-row">
					<div class="post-author">
						<div class="media">
							<div class="media-left">
								<img class="media-object" src="public/img/authors/<?=$data_detail['th']?>" alt="">
							</div>
							<div class="media-body">
								<div class="media-heading">
									<h3><?=$data_detail['n']?></h3>
								</div>
								<?=$data_detail['info']?>
								<ul class="author-social">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- /author -->

				<!-- comments -->
				<div class="section-row">
					<div class="post-comments">
						<!-- comment -->
						<div class="fb-comments" data-href="https://dxdbloger.000webhostapp.com/?mod=blog_post&id=<?=$data_detail['id']?>" data-numposts="5" data-width=""></div>
						<!-- /comment -->
					</div>
				</div>
				<!-- /comments -->

				<!-- reply -->
				<div class="section-row">
					<div class="section-title">
						<h2>HỌP THƯ GÓP Ý</h2>
					</div>
					<form class="post-reply">
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<span>Name *</span>
									<input class="input" type="text" name="name">
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<span>Email *</span>
									<input class="input" type="email" name="email">
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<span>Website</span>
									<input class="input" type="text" name="website">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<textarea class="input" name="message" placeholder="Message"></textarea>
								</div>
								<button class="primary-button">Submit</button>
							</div>
						</div>
					</form>
				</div>
				<!-- /reply -->
			</div>
			<!-- /Post content -->

			<!-- aside -->
			<div class="col-md-4">

				<!-- post widget -->
				<div class="aside-widget">
					<div class="section-title">
						<h2>Bài viết liên quan</h2>
					</div>
					<?php foreach ($data as $most) { ?>
						<div class="post post-widget">
							<a class="post-img" href="?mod=blog_post&id=<?= $most['id'] ?>"><img src=public/img/<?= $most['thumbnail']; ?> alt="" width="90px" height="90px"></a>
							<div class="post-body">
								<h3 class="post-title"><a href="?mod=blog_post&id=<?= $most['id'] ?>"><?php echo $most['title'] ?></a></h3>
							</div>
						</div>
					<?php } ?>
					<!-- /post widget -->

					<div class="aside-widget">
						<div class="section-title">
							<h2>Đọc nhiều nhất</h2>
						</div>
						<?php foreach ($data_view as $post) { ?>
							<div class="post post-widget">
								<a class="post-img" href="?mod=blog_post&id=<?= $post['id'] ?>"><img src=public/img/<?= $post['thumbnail']; ?> alt="" width="90px" height="90px"></a>
								<div class="post-body">
									<h3 class="post-title"><a href="?mod=blog_post&id=<?= $post['id'] ?>"><?php echo $post['title'] ?></a></h3>
								</div>
							</div>
						<?php } ?>
						<div class="section-title">
							<h2>Đọc ngẫu nhiên</h2>
						</div>
						<?php foreach ($data_random as $post) { ?>
							<div class="post post-thumb">
								<a class="post-img" href="?mod=blog_post&id=<?= $post['id'] ?>"><img src="public/img/<?= $post['thumbnail']; ?>" alt="" height="200px"></a>
								<div class="post-body">
									<div class="post-meta">
										<?php
										$kt = NULL;
										$i = 1;
										foreach ($data_cate as $cate) {
											if (strcasecmp($post['des'], $cate['descripition']) == 0) {
												$kt = 'post-category cat-' . $i;
											}
											if (strcasecmp($post['des'], $cate['descripition']) == 0) {
												$kt = 'post-category cat-' . $i;
											}
											if (strcasecmp($post['des'], $cate['descripition']) == 0) {
												$kt = 'post-category cat-' . $i;
											}
											if (strcasecmp($post['des'], $cate['descripition']) == 0) {
												$kt = 'post-category cat-' . $i;
											}
											$i++;
											if ($i == 4)
												$i = 1;
										}
										?>
										<a class="<?= $kt; ?>" href="?mod=category&id=<?= $post['idcate'] ?>"><?= $post['t']; ?></a>
										<span class="post-date"><?= $post['created_at']; ?></span>
									</div>
									<h3 class="post-title"><a href="?mod=blog_post&id=<?= $post['id'] ?>"><?= $post['title']; ?></a></h3>
								</div>
							</div>
						<?php } ?>
					</div>
					<!-- /post widget -->

					<!-- catagories -->
					<div class="aside-widget">
						<div class="section-title">
							<h2>Thể loại</h2>
						</div>
						<div class="category-widget">
							<ul>
								<?php
								$c = 1;
								foreach ($data_cate as $key => $cate) { ?>
									<li><a href="?mod=category&id=<?= $cate['id'] ?>" class="cat-<?= $c ?>"><?= $cate['title'] ?><span>
												<?php echo $count[$key]['count'] ?>
											</span></a></li>
								<?php
									$c = $c + 1;
									if ($c == 4) {
										$c = 1;
									}
								} ?>
							</ul>
						</div>
					</div>
				</div>
				<!-- /aside -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->
	<script>
		window.fbAsyncInit = function() {
			FB.init({
				appId: '2652621865018691',
				xfbml: true,
				version: 'v7.0'
			});
			FB.AppEvents.logPageView();
		};

		(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) {
				return;
			}
			js = d.createElement(s);
			js.id = id;
			js.src = "https://connect.facebook.net/en_US/sdk.js";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>