<section id="contact" class="gray"> 
      <div class="branded-section">
        <div class="masked">
          <div class="container">
            <div class="heading">
                      <h1 class="light-font">Exibição das mensagens</h1>
              <p class="light-font">fique por dentro</p>
            </div>

            <div class="alert alert-success alert-save" style="display: none;">Imagem atualizado com sucesso.</div>


            <div class="alert alert-danger alert-delete" style="display: none;">Imagem excluído  com sucesso.</div>


            <table class="table">
             

              <tr>
                <td><b>Nome</b></td>
                <td><b>Email</b></td>
                <td><b>Telefone</b></td>
                <td><b>Mensagem</b></td>
                
              </tr>
              
                <?php foreach ($data as $content): ?>
                  <form>
                   <tr>
                   	<td style="display:none;"><?php echo $content->id; ?></td>
                      <td><input type="text" name="nome" placeholder="<?php echo $content->nome; ?>" value="<?php echo $content->nome; ?>"></td>

                      <td><input type="text" name="email" placeholder="<?php echo $content->email; ?>" value="<?php echo $content->email; ?>"></td>

                      <td><input type="text" name="telefone" placeholder="<?php echo $content->telefone; ?>" value="<?php echo $content->telefone; ?>"></td>
                   
                      <td><input type="text" name="mensagem" placeholder="<?php echo $content->mensagem; ?>" value="<?php echo $content->mensagem; ?>"></td>


                      
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