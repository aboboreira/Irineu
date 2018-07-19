

<section id="contact" class="gray">	
			<div class="branded-section">
				<div class="masked">
					<div class="container">
						<div class="heading">
                       
							<h1 class="light-font">Edite a Galeria</h1>
							<p class="light-font">Preencha as informações a respeito da galeria</p>
						</div>
						
						<form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?php echo base_url('admin/editagaleria/editaPag'); ?>">
							<div class="form-group">
									
								<div class="col-sm-12" style="position:relative;margin-bottom: 30px">
									<input type="text" name="titulo"  class="form-control label_better" placeholder="Escolha o titulo">
								</div>
									
								<div class="col-sm-12" style="position:relative;margin-bottom: 30px">
									<input type="file" name="arquivo" class="form-control label_better" placeholder="Imagem">
								</div>

								

								<!-- <input type="hidden" name="id" value="1">	 -->								
							</div>
							<div class="form-group commands">
								<button class="btn btn-primary">enviar infos</button>
							</div>	
						</form>	


										
					</div>
				</div>
			</div>
</section>



<style type="text/css">	
	.table{
width: 80%;
text-align: center;
	margin: 0 auto;
	}

table tr td{
text-align: center;
	}
</style>

<section id="contact" class="gray"> 
      <div class="branded-section">
        <div class="masked">
          <div class="container">
            <!-- <div class="heading">
                       <h1>Administração da Loja</h1>
            </div> -->

            <div class="alert alert-success alert-save" style="display: none;">Imagem atualizado com sucesso.</div>


            <div class="alert alert-danger alert-delete" style="display: none;">Imagem excluído  com sucesso.</div>


            <table class="table">
             

              <tr>
                <td><b>Nome</b></td>
                <td><b>Imagem</b></td>
                <td><b>Botão para Alterar</b></td>
                <td><b>Botão para Excluir</b></td>
              </tr>
              
                <?php foreach ($data as $content): ?>
                  <form>
                   <tr>
                   	<td style="display:none;"><?php echo $content->id; ?></td>
                      <td><input type="text" name="titulo" placeholder="<?php echo $content->titulo; ?>" value="<?php echo $content->titulo; ?>"></td>
                   
                      <td><img src="/uploads/<?php echo $content->arquivo; ?>" style="width: 210px;"></td>


                      <td><button class="btn btn-default btn-xs btn-success btn-alterar" value="<?php echo $content->id; ?>">Alterar</td>

                      <td><button class="btn btn-default btn-danger btn-xs btn-deletar" value="<?php echo $content->id; ?>">Excluir</button></td>
                   </tr>
                   </form>
  
                
                  <!-- $data = array('$content->id',$content->codigo'); 

                        <pre><?php print_r($data);  ?></pre>--> 


                <?php endforeach ?>
                </table>

    </div>
    </div>
  </div>
</section>