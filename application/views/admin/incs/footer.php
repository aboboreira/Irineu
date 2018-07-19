<footer>
		<div class="container">
			<p>Endereço da Loja: Rua da Alegria, 1000 - Jardim Felicidade</p>
			<p><?php
						setlocale(LC_ALL, "pt_BR", "pt_BR.iso-8859-1", "pt_BR.utf-8", "portuguese");
	date_default_timezone_set('America/Sao_Paulo'); 
$dataHora = date("d/m/Y - H:i:s");
echo  $dataHora;
?></p>
			
			<a href="#home" class="square-l goup" style="position: relative">
				<span>
					<span class="fa fa-angle-double-up fa-2x"></span>
					<span class="fa fa-angle-double-up fa-2x"></span>
					<span class="fa fa-angle-double-up fa-2x"></span>
					<span class="fa fa-angle-double-up fa-2x"></span>
					<span class="fa fa-angle-double-up fa-2x"></span>
				</span>
			</a>
		</div>
	</footer>
	
	<!-- Load all jsavascrip files -->
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.bxslider.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.label_better.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.mixitup.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.easypiechart.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.inview.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/countUp.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/main.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/script.js"></script>
	<script src="<?php echo base_url();?>assets/js/grid.js"></script>
	<script>
	$(function() {
		Grid.init();
	});
	</script>
</body>
</html>