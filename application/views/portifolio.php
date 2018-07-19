
 <style type="text/css">
	.w3-modal-content{
		width: 600px;
	}
	.w3-button{
		margin-top: 100px;
		
	}
</style>


			<div class="container">
				<div class="heading">
					<!-- <div>Our references</div> -->
						<?php foreach ($data as $content): ?>
						<h1><?php echo $content->titulo; ?></h1>
					

					
					<div class="divider"><span></span></div>
					<p><?php echo $content->descricao; ?></p>
				</div>
				
				<?php endforeach ?>
			</div>
			<div class="container">
				<div id="single-project"></div>
			</div>
		
			<div>
				<ul class="full-portfolio clearfix" id="Grid">
	
					<?php foreach ($images as $vimages): ?>
					<li class="mix col-xs-6 col-sm-4 col-md-3 col-lg-2 portfolio-item web-design">
						<a href="#">
							<img class="img_for_modal"  onclick="onClick(this)" src="/irineu/uploads/<?php echo $vimages->arquivo; ?>" class="img-responsive" alt="imagem" style="width: 210px;">
						</a>
					
							<!-- The Modal -->
<div id="modal01" class="w3-modal" onclick="this.style.display='none'">
  <span class="w3-button w3-hover-red w3-xlarge w3-display-topright" style="color: white;" >X</span>
  <div class="w3-modal-content w3-animate-zoom">
    <img id="img01" style="width:100%">
  </div>
</div>


	 
<script type="text/javascript">

function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
}


</script>
							<div>
								<h4><?php echo $vimages->titulo; ?> </h4>
							</div>
						
					</li>
					
					<?php endforeach ?>
				</ul>


			<br>

				<div class="video">
					<h4>Vídeo demonstrativo</h4>
					<iframe width="80%" height="365" src="https://www.youtube.com/embed/gEkIiaepFSQ" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
				</div>

			</div>

			
			<div class="container">
				<div class="heading">
					<?php foreach ($data as $content): ?>
						<h1><?php echo $content->sub_titulo; ?></h1>

					<p><?php echo $content->sub_descricao; ?></p>
					<?php endforeach ?>
				</div>
				<div style="text-align:center; margin-top: -80px;margin-bottom: 50px">
					<a href="contato" class="btn btn-primary">entre em contato</a>
				</div>
			</div>	
			<div class="branded-section numbers">
				<div class="masked">
					<div class="container">
						
							<div class="heading">
								<?php foreach ($numeros as $vnumeros): ?>	
									<h2><?php echo $vnumeros->titulo; ?></h2>
									<p><?php echo $vnumeros->descricao; ?></p>
								<?php endforeach ?>
							</div>

						<div class="row">
							<div class="col-md-3">
								<div class="number-item">
									<?php foreach ($numeros as $vnumeros): ?>
										<span class="number" id="clientsCounter" data-count="<?php echo $vnumeros->vitorias; ?>" data-duration="2">10</span>
										<span class="text">Vitórias</span>
									<?php endforeach ?>
								</div>
							</div>
							<div class="col-md-3">
								<div class="number-item">
									<?php foreach ($numeros as $vnumeros): ?>
										<span class="number" id="projectCounter" data-count="<?php echo $vnumeros->derrotas; ?>" data-duration="2">3</span>
										<span class="text">Derrotas</span>
									<?php endforeach ?>
								</div>
							</div>
							<div class="col-md-3">
								<div class="number-item">
									<?php foreach ($numeros as $vnumeros): ?>
										<span class="number" id="awardCounter" data-count="<?php echo $vnumeros->empates; ?>" data-ration="1.5">4</span>
										<span class="text">Empates</span>
									<?php endforeach ?>
								</div>
							</div>

							

							<div class="col-md-3">
								<div class="number-item">
									<?php foreach ($numeros as $vnumeros):
									
									$total = $vnumeros->vitorias + $vnumeros->derrotas + $vnumeros->empates;
									
							  		?>
									<span class="number" id="coffeeCounter" data-count="<?php echo $total?>" data-duration="3">17</span>
									<span class="text">Batalhas</span>
									<?php endforeach ?>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>


			<div class="branded-section skills">
				<div class="masked">
					<div class="container">
						<div class="heading">
							<?php foreach ($skills as $vskills): ?>
							<h2><?php echo $vskills->titulo; ?></h2>
							<p><?php echo $vskills->descricao; ?></p>
							<?php endforeach ?>
						</div>
						<div class="row">
							<?php foreach ($numeros as $vnumeros): ?>							
							<div class="col-sm-3">
								<div class="chart">
									<div class="skill" data-percent="<?php echo $vskills->ataque; ?>">
										<span class="percent"><?php echo $vskills->ataque; ?>%</span>
									</div>
									<h3>Ataque</h3>
								</div>
							</div>
							<div class="col-sm-3 ">
								<div class="chart">
									<div class="skill" data-percent="<?php echo $vskills->defesa; ?>">
										<span class="percent"><?php echo $vskills->defesa; ?>%</span>
									</div>
									<h3>Defesa</h3>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="chart">
									<div class="skill" data-percent="<?php echo $vskills->agilidade; ?>">
										<span class="percent"><?php echo $vskills->agilidade; ?>%</span>
									</div>
									<h3>Estrategia</h3>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="chart">
									<div class="skill" data-percent="<?php echo $vskills->forca; ?>">
										<span class="percent"><?php echo $vskills->forca; ?>%</span>
									</div>
									<h3>Forca</h3>
								</div>
							</div>
							<?php endforeach ?>
						</div>
					</div>
				</div>
			</div>
		</section>

