

<section id="contact" class="gray">	
			<div class="branded-section">
				<div class="masked">
					<div class="container">
						<div class="heading">
                       
							<h1 class="light-font">Edite as informações da página contato</h1>
							<p class="light-font">Preencha as informações a respeito da página contato</p>
						</div>
						
						<form class="form-horizontal" method="post" action="<?php echo base_url('admin/editacontato/editaPag'); ?>">
							<?php foreach ($data as $content): ?>
							<div class="form-group">
									
								<div class="col-sm-12" style="position:relative;margin-bottom: 30px">
									<input type="text" name="titulo1" value="<?php echo $content->titulo1; ?>" class="form-control label_better" placeholder="Escolha o titulo1">
								</div>
									
								<div class="col-sm-12" style="position:relative;margin-bottom: 30px">
									<input type="text" name="descricao1" value="<?php echo $content->descricao1; ?>" class="form-control label_better" placeholder="Escolha a descricao1">
								</div>
								

								<div class="col-sm-12" style="position:relative;margin-bottom: 30px">
									<input type="text" name="titulo2" value="<?php echo $content->titulo2; ?>"  class="form-control label_better" placeholder="Escolha o icon">
								</div>

								<div class="col-sm-12" style="position:relative;margin-bottom: 30px">
									<input type="text" name="descricao2" value="<?php echo $content->descricao2; ?>"  class="form-control label_better" placeholder="Escolha o titulo do ico">
								</div>

								<div class="col-sm-12" style="position:relative;margin-bottom: 30px">
									<input type="text" name="input1" value="<?php echo $content->input1; ?>"  class="form-control label_better" placeholder="Escolha o titulo do ico">
								</div>

								<div class="col-sm-12" style="position:relative;margin-bottom: 30px">
									<input type="text" name="input2" value="<?php echo $content->input2; ?>"  class="form-control label_better" placeholder="Escolha o titulo do ico">
								</div>

								<div class="col-sm-12" style="position:relative;margin-bottom: 30px">
									<input type="text" name="input3" value="<?php echo $content->input3; ?>"  class="form-control label_better" placeholder="Escolha o titulo do ico">
								</div>

								<div class="col-sm-12" style="position:relative;margin-bottom: 30px">
									<input type="text" name="input4" value="<?php echo $content->input4; ?>"  class="form-control label_better" placeholder="Escolha o titulo do ico">
								</div>

								<div class="col-sm-12" style="position:relative;margin-bottom: 30px">
									<input type="text" name="botao" value="<?php echo $content->botao; ?>"  class="form-control label_better" placeholder="Escolha o titulo do ico">
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