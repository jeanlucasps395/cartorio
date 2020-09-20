<link href="<?= base_url('style/css/painel/home.css'); ?>" rel="stylesheet">


<article class="backgroundHome">

	<section class="cadastro">

		<div class="row">
			
			<div class="col-md-12 d-xl-none d-lg-none d-md-block  p0">
				<div class=" bgBranco">
					<div class="row">
						<div class="col-2">
							<h1 class="dashboard__logo">WFCOLCHÕES</h1>
						</div>
						<div class="col-10 txR">
							<i class="fad fa-bars" onclick="abrirMenuMobile()"></i>
						</div>
					</div>				
				</div>
			</div>

			<?php include('menu.php'); ?>



			<div class="col-xl-10 col-lg-9 col-md-12">


				<div class="blocoSeguraCadastro">

					<form action="<?= base_url('painel/cadastro'); ?>" method="post" enctype="multipart/form-data">

						<div class="col-12">
							<div class="form-group">
								<label>Nome</label>
								<input type="" name="nome" class="form-control" placeholder="Nome do produto">
							</div>
						</div>

						<div class="row">
							<div class="col-sm-6 col-12">
								<div class="form-group">
									<label>Valor</label>
									<input type="" name="valor" class="form-control" placeholder="00.00">
								</div>
							</div>

							<div class="col-sm-6 col-12">
								<div class="form-group">
									<label>Estoque</label>
									<input type="" name="estoque" class="form-control" placeholder="Quantidade de itens">
								</div>
							</div>
						</div>


						<div class="row">
							<div class="col-sm-6 col-12">
								<div class="form-group">
									<label>Frete nas cidades proximas</label>
									<select type="" name="frete_grande_porte" class="form-control">
										<option value="0">Não</option>
										<option value="1">Sim</option>
									</select>
								</div>
							</div>

							<div class="col-sm-6 col-12">
								<div class="form-group">
									<label>Categoria</label>
									<select name="categoria" class="form-control">
										<?php foreach($categorias as $categoria){
										
										echo '<option value="'.$categoria['id_categoria'].'">'.$categoria['nome'].'</option>';

										} ?>

									</select>
								</div>
							</div>
						</div>
						


						<div class="col-12">
							<div class="form-group">
								<label>Descrição</label>
								<textarea name="descricao" class="form-control" placeholder="Descrição do produto"></textarea>
							</div> 
						</div>

						<div class="col-12 mgT10">
							<input type="file" name="arquivo" style="">
						</div>

						<div class="col-12 txC">
							<button type="submit" class="botao_cadastro">Cadastrar</button>
						</div>


					</form>
				</div>
				<div class="blocoSeguraCadastro__sombra1"></div>
				<div class="blocoSeguraCadastro__sombra2"></div>

			</div>
		</div>

	</section>
</article>


<style type="text/css">
	article{
		overflow-x: hidden;
	}
	.blocoSeguraCadastro{

		margin: 0 auto;
		width: 600px;
		padding: 30px;
		margin-top: 160px;
		background: #ccc;
		border-radius: 20px;
		background: #CC66EE;
		margin-bottom: -65px;
		position: relative;
		z-index: 3;
	}
	.blocoSeguraCadastro__sombra1{
		background: #D38FE5;
		width: 500px;
		padding: 45px 0;
		border-radius: 20px; 
		z-index: 2;
		margin: 0 auto;
		margin-bottom: -65px;
		position: relative;
		opacity: .80;
	}
	.blocoSeguraCadastro__sombra2{
		background: #D097E4;
		width: 400px;
		padding: 45px 0;
		border-radius: 20px; 
		z-index: 1;
		margin: 0 auto;
		opacity: .60;
		margin-bottom: 160px;
	}
	.botao_cadastro{
		color: #fff;
		background: #AA51FF;
		border: none;
		border-radius: 30px;
		color: #fff;
		font-size: 20px;
		font-weight: normal;
		width: 100%;
		padding: 12px 0; 
		box-shadow: 0px 4px 2px rgb(0,0,0,0.2);
		margin-top: 30px;
		cursor: pointer;
	}
	.mgT10{
		margin-top: 40px;
	}
	@media screen and (max-width: 700px){
		.blocoSeguraCadastro{
			width: 100%;
			padding: 20px;
			margin-top: 20px;
		}
		.blocoSeguraCadastro__sombra1{
			width: 80%;
		}
		.blocoSeguraCadastro__sombra2{
			width: 70%;
		}
	}
</style>