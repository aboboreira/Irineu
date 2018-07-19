

<section id="contact" class="gray">	
			<div class="branded-section">
				<div class="masked">
					<div class="container">
						<div class="heading">
                       
							<h1 class="light-font">Edite a home</h1>
							<p class="light-font">Preencha as informações a respeito da home</p>
						</div>
						
						<form class="form-horizontal" method="post" action="<?php echo base_url('admin/editahome/editaPag'); ?>">
							<div class="form-group">
								<?php foreach ($data as $content): ?>
											
								<div class="col-sm-12" style="position:relative; margin-bottom: 30px;">
									<input type="text" name="titulo"  value="<?php echo $content->titulo; ?>"  class="form-control label_better" placeholder="Digite o 1º título">
								</div>
									
								<div class="col-sm-12" style="position:relative; margin-bottom: 30px;">
									<input type="text" name="descricao" value="<?php echo $content->descricao; ?>"  class="form-control label_better" placeholder="Digite a 1ª descrição">
								</div>
								

								<div class="col-sm-12" style="position:relative; margin-bottom: 30px;">
									<input type="text" name="titulo2" value="<?php echo $content->titulo2; ?>"   class="form-control label_better" placeholder="Digite o 2º título">
								</div>
									
								<div class="col-sm-12" style="position:relative; margin-bottom: 30px;">
									<input type="text" name="descricao2" value="<?php echo $content->descricao2; ?>"  class="form-control label_better" placeholder="Digite a 2ª descrição">
								</div>
							 <input type="hidden" name="id" value="1">
							  <?php endforeach ?>	
															
							</div>
							<div class="form-group commands">
								<button class="btn btn-primary">enviar infos</button>
							</div>	
						</form>	


										
					</div>
				</div>
			</div>
</section>