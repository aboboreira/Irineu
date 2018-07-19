

<section id="contact" class="gray">	
			<div class="branded-section">
				<div class="masked">
					<div class="container">

					 <div class="alert alert-danger alert-delete" style="display: none;">Imagem excluído  com sucesso.</div>

						<div class="heading">
                       
							<h1 class="light-font">Edite a página de contato (ícones)</h1>
							<p class="light-font">Preencha as informações a respeito da página de contato (ícones)</p>
						</div>
						<?php foreach ($data as $content): ?>
						<form class="form-horizontal" method="post" action="<?php echo base_url('admin/editacontatoicon/editaPag'); ?>">
								
							<div class="form-group">
											
								<div class="col-sm-3" style="position:relative; margin-bottom: 30px">
									<input type="text" name="icon"  value="<?php echo $content->icon; ?>"  class="form-control label_better" placeholder="Escolha a imagem ícone(vide tabela Awesome)">
								</div>


								<div class="col-sm-3" style="position:relative; margin-bottom: 30px">
									<input type="text" name="tit_icon" value="<?php echo $content->tit_icon; ?>"  class="form-control label_better" placeholder="Escolha o título do ícone">
								</div>
								

								<div class="col-sm-3" style="position:relative">
									<input type="text" name="desc_icon" value="<?php echo $content->desc_icon; ?>"   class="form-control label_better" placeholder="Escolha a descrição do ícone">
								</div>
									
								<button class="btn btn-default btn-danger btn-xs btn-apagar col-sm-3" value="<?php echo $content->id; ?>">Excluir</button>
								
							    <input type="hidden" name="id" value="<?php echo $content->id;?>"> 
															
							</div>
							<div class="form-group commands">
								<button class="btn btn-primary"  name="id" value="<?php echo $content->id;?>">alterar infos</button>
							</div>
							 	
								
						</form>	
						 <?php endforeach ?>


						<form class="form-horizontal" method="post" action="<?php echo base_url('admin/editacontatoicon/editaPag'); ?>">
								
							<div class="form-group">
											
								<div class="col-sm-4" style="position:relative;margin: 50px 0px 30px 0px">
									<input type="text" name="icon"   class="form-control label_better" placeholder="Escolha a imagem ícone(vide tabela Awesome)">
								</div>
									
								<div class="col-sm-4" style="position:relative;margin:50px 0px 30px 0px">
									<input type="text" name="tit_icon"   class="form-control label_better" placeholder="Escolha o título do ícone">
								</div>
								

								<div class="col-sm-4" style="position:relative;margin:50px 0px 30px 0px">
									<input type="text" name="desc_icon"   class="form-control label_better" placeholder="Escolha a descrição do ícones">
								</div>
									
								
							 <input type="hidden" name="id" value="">
															
							</div>
							 
							<div class="form-group commands">
								<button class="btn btn-primary">inserir infos</button>
							</div>	
						</form>	


										
					</div>
				</div>
			</div>
</section>