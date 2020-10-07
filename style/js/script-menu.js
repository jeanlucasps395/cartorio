$(function () {
	$(".nav-item").hover(function () {
		$(this).toggleClass("open");
	});
});

// pagina de Consultas de cartão
$(document).ready(function () {
	$("#cpf-input").hide();
	$("#rg-input").hide();

	$("input[name=document]").on("click", function () {
		console.log($(this).val());
		var oS = $(this).val();
		if (oS === "cpf") {
			$("#cpf-input").show();
			$("#rg-input").hide();
			$("#name-input").hide();
			$("#cnpj-input").hide();
		}
		if (oS === "rg") {
			$("#rg-input").show();
			$("#cpf-input").hide();
			$("#name-input").hide();
			$("#cnpj-input").hide();
		}
		if (oS === "name") {
			$("#rg-input").hide();
			$("#cpf-input").hide();
			$("#name-input").show();
		}
		if (oS === "cnpj") {
			$("#cnpj-input").show();
			$("#rg-input").hide();
			$("#cpf-input").hide();
		}
	});
});
// Fim

// Consulta autenticidade
$(document).ready(function () {
	$(".consulta__card").hide();

	$(".consulta__card--link").on("click", function () {
		$(".consulta__search").hide();
		$(".consulta__card").show();
	});
	$(".consulta__autentication").on("click", function () {
		$(".consulta__search").show();
		$(".consulta__card").hide();
	});
});
// fim
