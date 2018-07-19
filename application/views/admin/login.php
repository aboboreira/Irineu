
  
<section id="contact" class="gray">
	<div class="branded-section">		
				<div class="masked">
					<div class="container">
						<div class="heading">								
							<h1 class="light-font">Autenticação!</h1>
                			<img src="/assets/img/autenticacao.jpg" alt="bemvindo" width="250px">
                			<p class="light-font" style="margin-top: 10px; margin-bottom: -30px">Por favor, para acessar a área administrativa informe seu usuário e sua senha.</p>
                       	</div>

						<form class="form-horizontal" method="post" action="<?php echo base_url('admin/login/logar'); ?>">
							<div class="form-group">
								<div class="col-sm-6" style="position:relative">
									<input type="text" name="usuario"  class="form-control label_better" placeholder="Digite seu Login">
								</div>
								<div class="col-sm-6" style="position:relative">
									<input type="text" name="senha" class="form-control label_better" placeholder="Digite sua Senha">
								</div>								 								
							</div>
							<div class="form-group commands">
								<button class="btn btn-primary btn-lg">Acessar</button>
							</div>
						</form>							
					<!-- <?php //echo '<div class="alert alert-error">'.validation_errors().'</div>'; ?> -->
				</div>
			</div>
		</div>
		</div>
</section>
