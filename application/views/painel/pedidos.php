<link href="<?= base_url('style/css/produtos.css'); ?>" rel="stylesheet">
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
				<h1 class="dashboardheader__titulo">Lista de pedidos</h1>


				<!-- <?php
					print_r($pedidos);
				 ?> -->
				 <?php foreach ($pedidos as $pedido) { ?>


						<div class="linhaProd">
							<div class="row">
								<div class="col-sm-1 col-2 p0XS">
									<div class="imagemProduto" 
										style="background: url('<?= base_url(); ?>style/img/produtos/produto<?= $pedido['pasta'] ?>/imagem.png') center center no-repeat;background-size: cover " 
										></div>
								</div>
								<div class="col-sm-1 col-2 p0XS">
									<h3 class="nomeProduto">#<?= $pedido['id_pedido']; ?></h3>
								</div>
								<div class="col-sm-2 col-8">
									<p class="valorProduto mt21"><?= $pedido['nome']; ?></p>
								</div>
								<div class="col-sm-3 col-12 p0">
									<p class="valorProduto"><?= $pedido['nome_titular']; ?></p>
								</div>
								<div class="col-sm-2 col-4 p0">
									<h3 class="valorProduto txC">R$ <?= $pedido['valorFinal']; ?></h3>
								</div>
								<div class="col-sm-2 col-4 txC">
									<p class="valorProduto <?php 
										if($pedido['status_pedido'] == 1 || $pedido['status_pedido'] == 2 ){
											echo 'class__analise';
										}
										else if($pedido['status_pedido'] == 4 || $pedido['status_pedido'] == 5 || $pedido['status_pedido'] == 3 ){
											echo 'class__aprovado';
										}
										else{
											echo 'class__cancelado';	
										}
										?>"> 

										<?= $pedido['nome_status']; ?>
											
										</p>
								</div>
								<div class="col-sm-1 col-4 p0">
									<a target="_blank" href="<?= base_url(); ?>home/meusPedidos?pedido=<?= $pedido['code_pedido_loc']; ?>">
										<button class="botao_cadastro">Ver</button>
									</a>
								</div>
							</div>
						</div>


				<?php
					}
				 ?>
















					




				<!-- <?php print_r($dados); ?> -->
			</div>
		</div>
	</section>
</article>



<style type="text/css">
	article{
		overflow-x: hidden;
	}

	.widthPadrao {
	    width: 100%;
	    margin: 0 auto;
	}
	.flex-item-1 {
	    flex: 1;
	    text-align: center;
	}



	.class__analise{
		color: #EEC40E !important;
	}
	.class__aprovado{
		color: #3F9120 !important;
	}
	.class__cancelado{
		color: #F64F49 !important;
	}



	.blocoFiltros__filtros-item {
	    cursor: pointer;
	    text-decoration: none;
	    color: #666;
	    font-size: 14px;
	}

	.backgroundHome{
		background: #fff;
	}
	.dashboardheader__titulo{
		margin-top: 45px;
		margin-bottom: 30px;
	}
	.linhaProd{
		/*margin-top: 20px;*/
		/*box-shadow: 0px 4px 2px rgb(0,0,0,0.2);*/
		border-bottom: 1px solid #ddd;
		width: 100%;
		padding: 10px 0 !important;
	}

	.imagemProduto{
		width: 60px;
		height: 60px;
		border-radius: 50%;
	}
	.nomeProduto{
		font-size: 20px;
		color: #292929;
		margin-top: 20px;
	}
	.valorProduto{
		font-size: 15px;
		color: #666;
		margin-top: 20px;
	}

	



	.botao_cadastro{
		color: #fff;
		background: #AA51FF;
		border: none;
		border-radius: 30px;
		color: #fff;
		font-size: 16px;
		font-weight: normal;
		width: 100%;
		padding: 10px 0; 
		box-shadow: 0px 4px 2px rgb(0,0,0,0.2);
		margin-top: 10px;
		cursor: pointer;
	}


	.blocoDestaque__titulo{
		font-size: 25px;
		margin-top: 40px;
	}

	@media screen and (max-width: 600px) {
		.p0XS{
			padding: 0 !important;
		}
		.imagemProduto{
			width: 40px;
			height: 40px;
			border-radius: 50%;
			margin-top: 10px;
		}
		.nomeProduto{
			font-size: 14px;
			color: #292929;
			margin-top: 22px;

		  display: block;
		  width: 115px;
		  white-space: nowrap;
		  overflow: hidden;
		  text-overflow: ellipsis;
		}
		.valorProduto {
		    font-size: 14px;
		    color: #666;
		    margin-top: 2px;
		    text-align: left;
		}
		.botao_cadastro{
			margin-top: -6px;
			border: none;
			border-radius: 30px;
			font-size: 15px;
			font-weight: normal;
			width: 100%;
			padding: 8px 0; 
			box-shadow: none;
			cursor: pointer;
		}
		.mt21{
		   margin-top: 21px;
		}
	}

</style>