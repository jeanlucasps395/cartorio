<link href="<?= base_url('style/css/painel/home.css'); ?>" rel="stylesheet">

<article class="backgroundHome">

	<section class="dashboard">
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



			<div class="col-xl-8 col-lg-9 col-md-12 dashboard__centerBlock">
				
				<header class="dashboard__centerBlock--header d-none d-md-block">
					<div class="row">
						<div class="col-6"><h3 class="dashboardheader__titulo">Painel administrativo</h3></div>
						<div class="col-6 txR"><a  class="dashboard__itens" href="<?= base_url('painel/index'); ?>"><button class="dashboardheader__button">Sair</button></a></div>
					</div>
				</header>


				<!-- Ultima transações -->
				<section class="dashboard__ultimaTransasao">
					<div class="row">
						<div class="col-12"><h3 class="dashboardheader__titulo">Ultima transação</h3></div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="dashboard__ultimaTransasao-bloco">
								<div class="row">
									<div class="col-sm-2 col-6">
										<div class="dashboard__iconPedido">
											<i class="fad fa-comments-alt-dollar"></i>
										</div>
									</div>
									<div class="col-sm-4 col-6">
										<p class="dashboard__pedidoTitulo">Pedido: #<?= $ultimo['id_pedido']; ?></p>
										<p class="dashboard__pedidoText--ultimoPedido">Status do pedido: <?= $ultimo['nome_status']; ?></p>
										<p class="dashboard__pedidoText--ultimoPedido">Data do pedido: <?= $ultimo['data']; ?></p>
									</div>
									<div class="col-sm-4">
										<p class="dashboard__pedidoTitulo nXS">&nbsp;</p>
										<p class="dashboard__pedidoText--ultimoPedido txCXS">Email: <?= $ultimo['email']; ?></p>
										<p class="dashboard__pedidoText--ultimoPedido txCXS">Telefone: <?= $ultimo['telefone']; ?></p>
									</div>
									<div class="col-sm-2 p0">
										<div class="dashboard__pedidoValorBLock txC">
											<p class="dashboard__ultimaTransasao--valor"><span class="dashboard__ultimaTransasao--cifrao">R$</span> <?= $ultimo['valorFinal']; ?></p>
											<a target="_blank" href="<?= base_url(); ?>home/meusPedidos?pedido=<?= $ultimo['code_pedido_loc']; ?>">
												<button class="dashboard__ultimaTransasao--buttonAbrir">Abrir</button>
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="dashboard__ultimaTransasao-bloco--sombra1"></div>
							<div class="dashboard__ultimaTransasao-bloco--sombra2"></div>
						</div>
					</div>
				</section>

				
				<!-- Pedidos -->
				<section class="dashboard__ultimaTransasao">
					<div class="row">
						<div class="col-12"><h3 class="dashboardheader__titulo">Pedidos</h3></div>
					</div>
					<div class="row">
						<div class="col-12">

							

							 <?php
							 	foreach ($pedidos as $pedido) {
							 ?>
							 

							<!-- Item 1 -->
							<div class="dashboard__ultimaTransasao-bloco dashboard__ultimaTransasao-bloco--pedidos">
								<div class="row">
									<div class="col-sm-2 col-6">
										<div class="dashboard__iconPedido">
											<i class="fad fa-money-check-edit">
											</i>
										</div>
									</div>
									<div class="col-sm-4 col-6">
										<p class="dashboard__pedidoTitulo ">Pedido: #<?= $pedido['id_pedido']; ?></p>
										<p class="dashboard__pedidoText">Status do pedido: <span class="<?php 
										if($pedido['status_pedido'] == 1 || $pedido['status_pedido'] == 2 ){
											echo 'analise';
										}
										else if($pedido['status_pedido'] == 4 || $pedido['status_pedido'] == 5 || $pedido['status_pedido'] == 3 ){
											echo 'aprovado';
										}
										else{
											echo 'cancelado';	
										}
										?>"><?= $pedido['nome_status']; ?></span></p>
										<p class="dashboard__pedidoText">Data do pedido: <?= $pedido['data']; ?></p>
									</div>
									<div class="col-sm-4">
										<p class="dashboard__pedidoTitulo nXS">&nbsp;</p>
										<p class="dashboard__pedidoText txCXS">Email: <?= $pedido['email']; ?></p>
										<p class="dashboard__pedidoText txCXS">Telefone: <?= $pedido['telefone']; ?> </p>
									</div>
									<div class="col-sm-2 p0">
										<div class="dashboard__pedidoValorBLock txC">
											<p class="dashboard__ultimaTransasao--valor"><span class="dashboard__ultimaTransasao--cifrao">R$</span> <?= $pedido['valorFinal']; ?> </p>
											<a target="_blank" href="<?= base_url(); ?>home/meusPedidos?pedido=<?= $pedido['code_pedido_loc']; ?>">
												<button class="dashboard__ultimaTransasao--buttonAbrir">Abrir</button>
											</a>
										</div>
									</div>
								</div>
							</div>

							<?php	} ?>
							
							<!-- 
							item 2
							<div class="dashboard__ultimaTransasao-bloco dashboard__ultimaTransasao-bloco--pedidos">
								<div class="row">
									<div class="col-sm-2 col-6">
										<div class="dashboard__iconPedido">
											<i class="fad fa-money-check-edit"></i>
										</div>
									</div>
									<div class="col-sm-4 col-6">
										<p class="dashboard__pedidoTitulo">Pedido: #5</p>
										<p class="dashboard__pedidoText">Status do pedido: <span class="analise">Análise</span></p>
										<p class="dashboard__pedidoText">Data do pedido: 25/05/2020</p>
									</div>
									<div class="col-sm-4">
										<p class="dashboard__pedidoTitulo nXS">&nbsp;</p>
										<p class="dashboard__pedidoText txCXS">Email: jean.lucas395@gmail.com</p>
										<p class="dashboard__pedidoText txCXS">Telefone: (11) 94912-7316 </p>
									</div>
									<div class="col-sm-2 p0">
										<div class="dashboard__pedidoValorBLock txC">
											<p class="dashboard__ultimaTransasao--valor">1.067,35</p>
											<button class="dashboard__ultimaTransasao--buttonAbrir">Abrir</button>
										</div>
									</div>
								</div>
							</div>


							item 3
							<div class="dashboard__ultimaTransasao-bloco dashboard__ultimaTransasao-bloco--pedidos">
								<div class="row">
									<div class="col-sm-2 col-6">
										<div class="dashboard__iconPedido">
											<i class="fad fa-money-check-edit"></i>
										</div>
									</div>
									<div class="col-sm-4 col-6">
										<p class="dashboard__pedidoTitulo">Pedido: #5</p>
										<p class="dashboard__pedidoText">Status do pedido: <span class="cancelado">Cancelado</span></p>
										<p class="dashboard__pedidoText">Data do pedido: 25/05/2020</p>
									</div>
									<div class="col-sm-4">
										<p class="dashboard__pedidoTitulo nXS">&nbsp;</p>
										<p class="dashboard__pedidoText txCXS">Email: jean.lucas395@gmail.com</p>
										<p class="dashboard__pedidoText txCXS">Telefone: (11) 94912-7316 </p>
									</div>
									<div class="col-sm-2 p0">
										<div class="dashboard__pedidoValorBLock txC">
											<p class="dashboard__ultimaTransasao--valor">1.067,35</p>
											<button class="dashboard__ultimaTransasao--buttonAbrir">Abrir</button>
										</div>
									</div>
								</div>
							</div> -->


						</div>
					</div>
				</section>


			</div>


			<div class="col-xl-2 d-lg-block d-none">
				<header class="dashboard__centerBlock--header">
					<div class="row">
						<div class="col-12"><h3 class="dashboardheader__titulo">Transações Pagas</h3></div>
					</div>
				</header>


				<section>

					<?php foreach ($entradas as $entrada) { ?>
						<!-- item 1 -->
						<div class="blocoValor__bloco">+ <?= $entrada['valorFinal']; ?></div>
						<p class="blocoValor__data"><?= $entrada['data']; ?></p>						
					<?php	} ?>

					<!-- item 1 -->
					<!-- <div class="blocoValor__bloco">+ 1.067,65</div>
					<p class="blocoValor__data">25/05/2020</p>
 -->



				</section>

			</div>
		</div>
	</section>
	
</article>




