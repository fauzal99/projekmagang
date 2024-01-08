<body class="stretched">

	<!-- Page Title ============================================= -->
	<section id="page-title">

		<div class="container clearfix">
			<h1>Album</h1>
			<span>Galeri Album Goto</span>
		</div>

	</section>
	<!-- #page-title end -->

	<!-- Content ============================================= -->
	<section id="content">
		<div class="content-wrap">
			<div class="container clearfix">
				<div class="row gutter-40 col-mb-80">
					<!-- Post Content ============================================= -->
					<div class="postcontent col-lg-12">

						<div class="container">
							<div class="heading-block border-bottom-0 center">
								<div class="badge badge-pill badge-default">Album Dokumentasi</div>
								<h3 class="nott ls0">Album Dokumentasi Terakhir</h3>
							</div>

							<div id="portfolio" class="portfolio row grid-container gutter-20">


								<?php foreach ($album as $alb) : ?>
									<div class="col-md-3.5 mb-5">
										<div class="card ml-2 mt-5" style="width: 16rem;">
											<img src="<?php echo base_url() . 'berkas/' . $alb->gambar_album ?>" class="card-img-top" alt="..." style="height: 200px;">
											<div class="card-body">
												<p class="card-text"><?php echo $alb->keterangan; ?></p>
												<!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
											</div>
										</div>
									</div>
								<?php endforeach; ?>





							</div>

						</div>

						<!-- Pager
							============================================= -->
						<ul class="pagination mt-5 pagination-circle justify-content-center">
							<!--  -->
						</ul>
						<!-- .pager end -->

					</div><!-- .postcontent end -->


				</div>

			</div>
		</div>
	</section>