<section id="services" class="gray">
			<div class="container pad-bot-50">
				<div class="heading">
					<!-- <div>Our services</div> -->
					
					<?php foreach ($data as $conteudo):?>
						<h1><?php echo $conteudo->titulo; ?></h1>
						<div class="divider"><span></span></div>
						<p><?php echo $conteudo->descricao; ?></p>
					<?php endforeach ?>	

					<div class="row">
					<?php foreach ($icones as $vicones):  ?>
						<?php if ($vicones->id <= '4'): ?>
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
							<h2 class="primary-color"><?php echo $conteudo->titulo2; ?></h2>
							<p><?php echo $conteudo->descricao2; ?></p>
						</div>
						<div class="row">
							<?php foreach ($icones as $vicones):  ?>
								<?php if ($vicones->id >= '5'): ?>
									<div class="col-sm-2">
										<div class="process-item ">
											<i class="fa fa-flask fa-3x"></i>
											<h3>Análise</h3>
											<p class="font-m">Analisamos....</p>
										</div>
									</div>
								<?php endif ?>
							<?php endforeach ?>	
						</div>
					</div>
				</div>
			</div>

		</section>