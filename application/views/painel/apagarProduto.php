<link href="<?= base_url('style/css/produtos.css'); ?>" rel="stylesheet">
<link href="<?= base_url('style/css/painel/home.css'); ?>" rel="stylesheet">

<style type="text/css">
	.backgroundHome{
		background: #fff;
	}
</style>



<div class="modalApagar">
	
	<!-- Modal -->
	<div class="modal-apagar" id="modal-name">
	  <div class="modal-sandbox"></div>
	  <div class="modal-box">
	    <div class="modal-header">
	      <h1>Apagar produto</h1>
	    </div>
	    <div class="modal-body txC">
	    	
	      <button class="close-modal button-modal button-modal--cancelar" onclick="closeApagarProduto()">Cancelar</button>
	      <a href="" id="apagarLink"><button class="close-modal button-modal">Apagar</button></a>
	    </div>
	  </div>
	</div>

</div>




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
				<h1 class="dashboardheader__titulo">Lista de produtos</h1>

				   <!-- Busca -->
				    <script type="text/javascript">
				      
				            var settings = {
				                "async": true,
				                "crossDomain": true,
				                "url": "<?php echo base_url('home/buscaCategoria'); ?>",
				                "method": "GET",
				                "headers": {
				                    "cache-control": "no-cache",
				                }
				              }
				            $.ajax(settings).done(function (response) {

				            	var filter = <?php if(isset($_GET['id'])){echo $_GET['id'];}else{echo 0;} ?>

				                  $('.blocoFiltros').html('');
				                  	
				              	  $('.blocoFiltros').append(''+
				                 '<div class="item flex-item-1 "><a class="blocoFiltros__filtros-item  filter0" href="<?= base_url(); ?>painel/apagar_produto"><span">Todos</span></a></div>'+
				                 '');

				                   for(const i in response){
				                     console.log(response[i]);
				                     $('.blocoFiltros').append(''+
				                     	'<div class="item flex-item-1 "><a class="blocoFiltros__filtros-item filter'+response[i].id_categoria+'" href="<?= base_url(); ?>painel/apagar_produto?id='+response[i].id_categoria+'"><span>'+response[i].nome+'</span></a></div>'+
				                     	'');

				                   }

				                  $('.filter'+filter).addClass('blocoFiltros__filtros-item--active');
				            });


					    </script>

					    <script type="text/javascript">
					    	var cont = 1;
					    	function openFilterSM(){
					    		if(cont == 1){
					    			$('.blocoFiltros').css('display','block');
					    			$('.blocoDestaque_blocoSm').css('border-radius','10px');
					    			$('.blocoDestaque_angle--sm .fa-angle-down').css('transform','rotate(180deg)');

					    			cont++;
					    		}
					    		else{
					    			$('.blocoFiltros').css('display','none');
					    			$('.blocoDestaque_blocoSm').css('border-radius','50px');	
					    			$('.blocoDestaque_angle--sm .fa-angle-down').css('transform','rotate(0deg)');
					    			cont = 1;
					    		}
					    	}
					    </script>



					<!-- filtros -->
					<section class="blocoDestaque widthPadrao">
						<h2 class="blocoDestaque__titulo blocoDestaque__titulo--left">Filtros</h2>

						<div class="d-sm-block d-md-none">
							<div class="row blocoDestaque_blocoSm" onclick="openFilterSM()">
								<div class="col-6 blocoDestaque_text--sm"> Filtros </div>
								<div class="col-6 blocoDestaque_angle--sm"> <i class="fad fa-angle-down"></i></div>
							</div>
						</div>

						<div class="blocoFiltros flex">
							<!-- aki vem preenchido pelo js -->
						</div>
					</section>



















					<?php foreach ($categorias as $categoria) { ?>
						
						<?php foreach ($produtos as $produto) { ?>	
							<?php if($produto['categoria'] == $categoria['id_categoria']){ ?>
								<h2 class="blocoDestaque__titulo blocoDestaque__titulo--marginT"><?= $categoria['nome']; ?></h2>
							<?php  break;  } ?>
						<?php } ?>

						<div class="row blocoDestaque__itens">
						<?php foreach ($produtos as $produto) { ?>

							<?php if($produto['categoria'] == $categoria['id_categoria']){ ?>
							

								<div class="linhaProd">
									<div class="row">
										<div class="col-sm-2 col-2 p0XS">
											<div class="imagemProduto" 
											style="background: url('<?= base_url(); ?>style/img/produtos/produto<?= $produto['pasta'] ?>/imagem.png') center center no-repeat;background-size: cover " 
											></div>
										</div>
										<div class="col-sm-5 col-4 p0XS">
											<h3 class="nomeProduto"><?= $produto['nome']; ?></h3>
										</div>
										<div class="col-sm-3 col-4">
											<p class="valorProduto"> R$ <?= $produto['valor']; ?></p>
										</div>
										<div class="col-sm-2 col-2 p0XS">
											<button onclick="apagarProduto(<?= $produto['id_produto']; ?>)" class="botao_cadastro">Apagar</button>
										</div>
									</div>
								</div>

							<?php } ?>

						<?php } ?>
						</div>

					<?php } ?>




				<!-- <?php print_r($dados); ?> -->
			</div>
		</div>
	</section>
</article>



<script type="text/javascript">
	function apagarProduto(id){
		$('.modal-apagar').css("display","block");
		$('#apagarLink').attr("href", "<?= base_url(); ?>painel/apagar_produto_prod?id="+id);
	}
	function closeApagarProduto(){
		$('.modal-apagar').css("display","none");
	}
</script>






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

	.blocoFiltros__filtros-item {
	    cursor: pointer;
	    text-decoration: none;
	    color: #666;
	    font-size: 14px;
	}

	
	.dashboardheader__titulo{
		margin-top: 45px;
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
		font-size: 20px;
		color: #666;
		margin-top: 20px;
	}

	



	.botao_cadastro{
		color: #fff;
		background: #F64F49;
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
		.valorProduto{
			font-size: 14px;
			color: #666;
			margin-top: 22px;
		}
		.botao_cadastro{
			color: #F64F49;
			background: #fff;
			border: none;
			border-radius: 30px;
			font-size: 15px;
			font-weight: normal;
			width: 100%;
			padding: 8px 0; 
			box-shadow: none;
			margin-top: 12px;
			cursor: pointer;
		}

	}

</style>







<style type="text/css">
.modalApagar{
	/*width: 500px;
	height: 20*/
}
	
.modal-box {
  z-index: 900;
}

.modal-sandbox {
  position: fixed;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  background: transparent;
}

.modal-apagar {
  display: none; 
  position: fixed;
  width: 100%;
  height: 100%;
  left: 0;
  top: 0;
  background: rgb(0,0,0);
  background: rgba(0,0,0,.8);
  overflow: auto;
  z-index: 999;
}

.modal-box {
  position: relative;
  max-width: 400px;
  margin: 100px auto;
  animation-name: modalbox;
  animation-duration: .4s;
  animation-timing-function: cubic-bezier(0,0,.3,1.6);
}

.modal-header {
  padding: 20px 40px;
  background: #F64F49;
  color: #ffffff;
}
.modal-header h1{
  font-size: 25px;
}

.modal-body {
  background: #ECEFF1;
  padding: 30px 40px;
}

/* Close Button */
.close-modal {
  text-align: right;
  cursor: pointer;
}

/* Animation */
@-webkit-keyframes modalbox {
  0% {
    top: -250px; 
    opacity: 0;
  }
  100% {
    top: 0; 
    opacity: 1;
  }
}

@keyframes modalbox {
  0% {
    top: -250px; 
    opacity: 0;
  }
  100% {
    top: 0; 
    opacity: 1;
  }
}


.modal-trigger, button {
  top: 50%;
  left: 50%;
  padding: 20px 40px;
  background: transparent;
  color: #ffffff;
  border: 1px solid #ffffff;
  text-decoration: none;
}

.modal-trigger {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  -o-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  transition: ease .2s;
}

.button-modal {
  border: none;
  border-radius: 50px;
  outline: none;
  color: #333333;
  background: #F64F49;
  color: #fff;
}

.button-modal--cancelar {
  border-radius: 50px;
  outline: none;
  background: none;
  outline: none;
  color: #292929;
  margin-right:  15px;
}

.modal-trigger:hover {
  padding: 20px 60px;
}
@media screen and (max-width: 450px){
	.modal-box {
	    max-width: 290px;
	}
	.button-modal--cancelar {
	  margin-right:  0px;
	}
}
</style>
