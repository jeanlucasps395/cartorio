<div class="menu__mobile" id="menu__mobile">
	<h5 class="dashboard__titulos-menu">Administrativo</h5>
	<p> <a  class="dashboard__itens" href="<?= base_url('painel/dashboard'); ?>"> <i class="fad fa-home-lg-alt"></i> Inicio </a></p>
	<!-- <p class="dashboard__itens"><i class="fad fa-cash-register"></i> Transações</p> -->
	<p><a  class="dashboard__itens" href="<?= base_url('painel/pedidos'); ?>"><i class="fad fa-list-ul"></i> Pedidos</a></p>

	<h5 class="dashboard__titulos-menu">Produtos</h5>
	<p><a  class="dashboard__itens" href="<?= base_url('painel/editar_produto'); ?>"> <i class="fad fa-edit"></i> Editar Produtos</a></p>
	<p class="dashboard__itens"> <a  class="dashboard__itens" href="<?= base_url('painel/cadastrarProduto'); ?>"> <i class="fad fa-plus"></i> Cadastrar produto </a> </p>
	<p><a  class="dashboard__itens" href="<?= base_url('painel/apagar_produto'); ?>"><i class="fad fa-trash-alt"></i> Apagar produto</a>
	<p><a  class="dashboard__itens" href="<?= base_url('painel/index'); ?>"><button class="dashboardheader__button">Sair</button> </a></p>
</div>


<!-- menu esquerda -->
<div class="col-xl-2 col-lg-3 d-lg-block d-none p0">
	<div class=" bgBranco">
		<h1 class="dashboard__logo">WFCOLCHÕES</h1>
		
		<h5 class="dashboard__titulos-menu">Administrativo</h5>
		<p><a  class="dashboard__itens" href="<?= base_url('painel/dashboard'); ?>"><i class="fad fa-home-lg-alt"></i> Inicio</a></p>
			<!-- <p class="dashboard__itens"><i class="fad fa-cash-register"></i> Transações</p> -->
		<p><a  class="dashboard__itens" href="<?= base_url('painel/pedidos'); ?>"><i class="fad fa-list-ul"></i> Pedidos</a></p>

		<h5 class="dashboard__titulos-menu">Produtos</h5>
		<p><a  class="dashboard__itens" href="<?= base_url('painel/editar_produto'); ?>"> <i class="fad fa-edit"></i> Editar Produtos</a></p>
		<p><a  class="dashboard__itens" href="<?= base_url('painel/cadastrarProduto'); ?>"><i class="fad fa-plus"></i> Cadastrar produto</a></p>
		<p><a  class="dashboard__itens" href="<?= base_url('painel/apagar_produto'); ?>"><i class="fad fa-trash-alt"></i> Apagar produto</a></p>
	</div>
</div>


<script type="">
	var open = 0;
	function abrirMenuMobile(){
		if(open == 0){
			$('#menu__mobile').css('display','block');
			open = 1;
		}
		else{
			$('#menu__mobile').css('display','none');
			open = 0;
		}
	}
</script>