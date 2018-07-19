<section id="contact" class="gray">
			<div class="container">
				<div class="heading">
					<!-- <div>Contact Us</div> -->
					<?php foreach ($info as $vinfo):  ?>
					<h1><?php echo $vinfo->titulo1; ?> </h1>
					<div class="divider">
						<span></span>
					</div>
					<p><?php echo $vinfo->descricao1; ?></p>
					<?php endforeach ?>	
				</div>
				<div class="row">
					<?php foreach ($data as $content):  ?>
					<div class="col-md-4 adress-element ">
						<i class="<?php echo $content->icon; ?> fa-2x"></i>
						<h3><?php echo $content->tit_icon; ?></h3>
						<span class="font-l"><?php echo $content->desc_icon; ?></span>
					</div>
					<?php endforeach ?>						
				</div>
			</div>
			<div class="branded-section contact-form">
				<div class="masked">
					<div class="container">
						<div class="heading">
							<?php foreach ($info as $vinfo):  ?>
							<h1 class="light-font"><?php echo $vinfo->titulo2; ?></h1>
							<p class="light-font"><?php echo $vinfo->descricao2; ?></p>

						</div>
						<form class="form-horizontal" method="post" action="<?php echo base_url('/contato/enviarmensagem'); ?>">
							<div class="form-group">
								<div class="col-sm-4" style="position:relative">
									<input required type="text" id="nome" name="nome"  class="form-control label_better" placeholder="<?php echo $vinfo->input1; ?>">
								</div>
								<div class="col-sm-4">
									<input required type="text" id="email"  name="email" class="form-control label_better" placeholder="<?php echo $vinfo->input2; ?>">
								</div>
								<div class="col-sm-4">
									<input required type="text" id="telefone"  name="telefone" class="form-control label_better" placeholder="<?php echo $vinfo->input3; ?>">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<textarea required class="form-control label_better"  id="mensagem"  name="mensagem" placeholder="<?php echo $vinfo->input4; ?>" rows="7"></textarea>
								</div>
							</div>
							<div class="form-group commands">
								<button class="btn btn-primary"  onclick="myFunction()"><?php echo $vinfo->botao; ?></button>
							</div>
						</form>
						<?php endforeach ?>	
					</div>
				</div>
			</div>
		</section>

	
               <script>
function myFunction() {
	if((document.getElementById("nome").value == "")||(document.getElementById("email").value == "")||(document.getElementById("telefone").value == "")||(document.getElementById("mensagem").value == "")){
		alert("Preencha todos os campos");
	}else{
		alert("Mensagem enviada com suacesso!");
	}
   
}
</script>
                
		