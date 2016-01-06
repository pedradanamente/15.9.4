
  <div class="boxtop-subpage">
      <img alt="Blog" title="Blog" class="subpage-image fl" src="<?php echo $caminho; ?>images/produtos.png" width="50" height="50"/>
      <h3 class="box-subpage fl">Cadastrar Vaga</h3>
      <div style="clear:both;"></div>
  </div>

	<div class="row linhasuperior">
    <div class="col-sm-6">
      <div class="formgrup">
        <label style="font-weight:300;text-align:left;float:left;" for="empregador">Nome do empregador:</label>
			  <input class="formInput fr" type="text" name="empregador" id="empregador" maxlength="50" required/>
      </div>
      <div style="clear:both;"></div>
        <div class="formgrup">
          <label class="formLabel" for="email">E-mail do empregador:</label>
  			  <input class="formInput fr" type="email" name="email" id="email" maxlength="50" required/>
        </div>
        <div style="clear:both;"></div>
        <div class="formgrup">
          <label style="font-weight:300;text-align:left;float:left;" for="vaga">Nome da vaga:</label>
  			  <input class="formInput fr" type="text" name="vaga" id="vaga" maxlength="50" required/>
        </div>
        <div style="clear:both;"></div>
        <div class="formgrup">
          <label style="font-weight:300;text-align:left;float:left;" for="y">Decrição da vaga:</label>
  			  <input class="formInput fr" type="text" name="descricao" id="descricao" maxlength="50" required/>
        </div>
		</div>
    <div class="col-sm-6">
			<div style="text-align:left;">
        <button type="submit">Cadastrar Vaga</button>
			</div>
		</div>
	</div>
