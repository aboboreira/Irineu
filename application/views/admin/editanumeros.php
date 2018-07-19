

<section id="contact" class="gray">	
			<div class="branded-section">
				<div class="masked">
					<div class="container">
						<div class="heading">
                       
							<h1 class="light-font">Edite os numeros</h1>
							<p class="light-font">Preencha as informações a respeito do portifolio</p>
						</div>
						
						<form class="form-horizontal" method="post" action="<?php echo base_url('admin/editanumeros/editaPag'); ?>">

								<?php foreach ($data as $content): ?>
							<div class="form-group">
									
								<div class="col-sm-12" style="position:relative;margin-bottom: 30px">
									<input type="text" name="titulo" value="<?php echo $content->titulo; ?>"  class="form-control label_better" placeholder="Escolha o titulo">
								</div>
									
								<div class="col-sm-12" style="position:relative;margin-bottom: 30px">
									<input type="text" name="descricao" value="<?php echo $content->descricao; ?>" class="form-control label_better" placeholder="Escolha a descricao">
								</div>
								

								<div class="col-sm-12" style="position:relative;margin-bottom: 30px">
									<input type="number" name="vitorias" value="<?php echo $content->vitorias; ?>" class="form-control label_better" placeholder="Escolha o icon">
								</div>

								<div class="col-sm-12" style="position:relative;margin-bottom: 30px">
									<input type="number" name="derrotas" value="<?php echo $content->derrotas; ?>" class="form-control label_better" placeholder="Escolha o titulo do ico">
								</div>

								<div class="col-sm-12" style="position:relative;margin-bottom: 30px">
									<input type="number" name="empates" value="<?php echo $content->empates; ?>" class="form-control label_better" placeholder="Escolha o titulo do ico">
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