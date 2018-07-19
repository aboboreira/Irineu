

<section id="contact" class="gray">	
			<div class="branded-section">
				<div class="masked">
					<div class="container">
						<div class="heading">
                       
							<h1 class="light-font">Edite as skills</h1>
							<p class="light-font">Preencha as informações a respeito das skills</p>
						</div>
						
						<form class="form-horizontal" method="post" action="<?php echo base_url('admin/editaskills/editaPag'); ?>">
							<?php foreach ($data as $content): ?>
							<div class="form-group">
									
								<div class="col-sm-12" style="position:relative;margin-bottom: 30px">
									<input type="text" name="titulo" value="<?php echo $content->titulo; ?>" class="form-control label_better" placeholder="Escolha o titulo">
								</div>
									
								<div class="col-sm-12" style="position:relative;margin-bottom: 30px">
									<input type="text" name="descricao" value="<?php echo $content->descricao; ?>" class="form-control label_better" placeholder="Escolha a descricao">
								</div>
								

								<div class="col-sm-12" style="position:relative;margin-bottom: 30px">
									<input type="number" name="ataque" value="<?php echo $content->ataque; ?>"  class="form-control label_better" placeholder="Escolha o icon">
								</div>

								<div class="col-sm-12" style="position:relative;margin-bottom: 30px">
									<input type="number" name="defesa" value="<?php echo $content->defesa; ?>"  class="form-control label_better" placeholder="Escolha o titulo do ico">
								</div>

								<div class="col-sm-12" style="position:relative;margin-bottom: 30px">
									<input type="number" name="agilidade" value="<?php echo $content->agilidade; ?>"  class="form-control label_better" placeholder="Escolha o titulo do ico">
								</div>

								<div class="col-sm-12" style="position:relative;margin-bottom: 30px">
									<input type="number" name="forca" value="<?php echo $content->forca; ?>"  class="form-control label_better" placeholder="Escolha o titulo do ico">
								</div>

								

								 <input type="hidden" name="id" value="1">	 							
							</div>
							<?php endforeach ?>
							<div class="form-group commands">
								<button class="btn btn-primary">enviar infos</button>
							</div>	
						</form>	


										
					</div>
				</div>
			</div>
</section>