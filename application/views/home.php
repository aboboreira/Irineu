 	<style type="text/css">
 		
 		img[src*="https://cdn.rawgit.com/000webhost/logo/e9bd13f7/footer-powered-by-000webhost-white2.png"]

{    display: none;}

 	</style>
		<section id="home" class="home home-fullscreen">
			<div class="slide text-slider-wrapper">
				<div class="container">
					<ul class="text-slider clearfix">
					<?php foreach ($data as $content): ?>
						<li class="clearfix">
							<span class="lead">
								<?php echo $content->descricao; ?>
							</span>
						<a href="<?php echo $content->url; ?>" class="btn btn-primary outline-outward"><?php echo $content->url; ?></a>
						</li>
					<?php endforeach ?>
						</ul>
				</div>
			</div>
			<a href="#services" class="go-to godown">
				<span>
					<span class="fa fa-angle-double-down fa-2x"></span>
					<span class="fa fa-angle-double-down fa-2x"></span>
					<span class="fa fa-angle-double-down fa-2x"></span>
					<span class="fa fa-angle-double-down fa-2x"></span>
					<span class="fa fa-angle-double-down fa-2x"></span>
				</span>
			</a>
		</section>
<section id="services" class="gray">
			<div class="container pad-bot-50">
				<div class="heading">
					<!-- <div>Our services</div> -->
					
					<?php foreach ($conteudo as $vconteudo):?>
						<h1><?php echo $vconteudo->titulo; ?></h1>
						<div class="divider"><span></span></div>
						<p><?php echo $vconteudo->descricao; ?></p>
					<?php endforeach ?>	

					<div class="row">
					<?php foreach ($icones as $vicones):  ?>
						<?php if ($vicones->id <= '5'): ?>
							<div class="col-sm-3">
								<div class="service-item">
									<div class="circle circle-l"><i class="<?php echo $vicones->icon; ?> fa-3x"></i></div>
									<h3><?php echo $vicones->tit_icon; ?></h3>
									<p class="font-m"><?php echo $vicones->desc_icon; ?></p>
								</div>
							</div>
						<?php endif ?>
					<?php endforeach ?>	
					</div>
					<!-- Fim row -->

				</div>
			</div>
	



				
			<div class="branded-section process">
				<div class="masked">
					<div class="container">
						<div class="heading">
							<h2 class="primary-color"><?php echo $vconteudo->titulo2; ?></h2>
							<p><?php echo $vconteudo->descricao2; ?></p>
						</div>
						<div class="row">
							<?php foreach ($icones as $vicones):  ?>
								<?php if ($vicones->id >= '6'): ?>
									<div class="col-sm-2">
										<div class="process-item ">
											<i class="<?php echo $vicones->icon; ?> fa-3x"></i>
											<h3><?php echo $vicones->tit_icon; ?></h3>
											<p class="font-m"><?php echo $vicones->desc_icon; ?></p>
										</div>
									</div>
								<?php endif ?>
							<?php endforeach ?>	
						</div>
					</div>
				</div>
			</div>

		</section>

		
		
	</div>