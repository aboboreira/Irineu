

<section id="contact" class="gray">	
			<div class="branded-section">
				<div class="masked">
					<div class="container">
						<div class="heading">
                       
							<h1 class="light-font">Edite o slider</h1>
							<p class="light-font">Preencha as informações a respeito do Slider</p>
						</div>
						
						<form class="form-horizontal" method="post" action="<?php echo base_url('admin/editaslider/slider'); ?>">
							<div class="form-group">
									<?php foreach ($data as $content): ?>
										<?php if ($content->id == '1'): ?>
										<div class="col-sm-6" style="position:relative">
											<input type="text" name="descricao" value="<?php echo $content->descricao; ?>" class="form-control label_better" placeholder="Escolha a descricao do 1 º slide">
										</div>
										<div class="col-sm-6">
											<input type="text" name="url"  value="<?php echo $content->url; ?>" class="form-control label_better" placeholder="Escolha o nome do botao do 1 º slide">
										</div>
										<input type="hidden" name="id" value="1">
										<?php endif ?>	
									<?php endforeach ?>									
							</div>
							<div class="form-group commands">
								<button class="btn btn-primary">enviar infos slide 1</button>
							</div>	
						</form>	


						<form class="form-horizontal" method="post" action="<?php echo base_url('admin/editaslider/slider'); ?>">
							<div class="form-group">
								<?php foreach ($data as $content): ?>
										<?php if ($content->id == '2'): ?>
								<div class="col-sm-6" style="position:relative">
									<input type="text" name="descricao" value="<?php echo $content->descricao; ?>" class="form-control label_better" placeholder="Escolha a descricao do 2 º slide">
								</div>
								<div class="col-sm-6">
									<input type="text" name="url"  value="<?php echo $content->url; ?>" class="form-control label_better" placeholder="Escolha o nome do botao do 2 º slide">
								</div>
								<input type="hidden" name="id" value="2">	
								<?php endif ?>	
							<?php endforeach ?>									
							</div>
							<div class="form-group commands">
								<button class="btn btn-primary">enviar infos slide 2</button>
							</div>
						</form>	

						<form class="form-horizontal" method="post" action="<?php echo base_url('admin/editaslider/slider'); ?>">
							<div class="form-group">
								<?php foreach ($data as $content): ?>
										<?php if ($content->id == '3'): ?>
								<div class="col-sm-6" style="position:relative">
									<input type="text" name="descricao" value="<?php echo $content->descricao; ?>" class="form-control label_better" placeholder="Escolha a descricao do 1 º slide">
								</div>
								<div class="col-sm-6">
									<input type="text" name="url"  value="<?php echo $content->url; ?>" class="form-control label_better" placeholder="Escolha o nome do botao do 2 º slide">
								</div>
								<input type="hidden" name="id" value="3">	
								<?php endif ?>	
							<?php endforeach ?>									
							</div>
							<div class="form-group commands">
								<button class="btn btn-primary">enviar infos slide 3</button>
							</div>
						</form>							
					</div>
				</div>
			</div>
</section>