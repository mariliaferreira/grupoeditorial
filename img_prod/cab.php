<? ob_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<? $include = "include/"; ?>
<? require("db.php"); ?>
<? require($include."sisdoc_data.php"); ?>
<? require($include."sisdoc_cookie.php"); ?>
<? require("mst_preco.php"); ?>
<? 
///////////////// Contator de visitas
$jid=1;
require("ic_count.php"); 
/////////////////////////////////////
?>
<? 
require("cab_php.php");

?>
<?// require($include."db.php"); ?>
<?
$ck_out_item = read_cookie("items");
$ck_out_total = read_cookie("total")/100;
$ck_out_quan = read_cookie("quan");

?>
<head>
<style>
#sombra_lateral_esquerda 
{
	background:url(img/table_body_left_bg.png);
	width: 15px;
	height: 2216px;
}
#sombra_lateral_direita 
{
	background:url(img/table_body_right_bg.png);
	width: 15px;
	height: 2216px;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>:: Editora Champagnat - PUCPR ::</title>
	<link href="estilo2.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery.js" type="text/javascript"></script>
<body>
<div id="sombra_lateral_esquerda" style="position:absolute; top: 0px; left: 85px;"><img src="img/table_body_left.png" width="15" height="1169" alt="" border="0" /></div>
<div id="sombra_lateral_direita" style="position:absolute; top: 0px; left: 1079px;"><img src="img/table_body_right.png" width="15" height="1169" alt="" border="0" /></div>
<div id="cabecalho" style="position:absolute; top: 0px; left: 100px;"><img src="img/cab_background.jpg" width="979" height="370" alt="" border="0" /></div>
<div id="carrinho" style="position:absolute; top: 0px; left: 100px;"><?require("main_basket.php");?></div>
<!----BANNERS--->
<div id="banner1" style="position:absolute; top: 117px; left: 316px;"><A HREF="banner.php?dd0=1"><img src="img_banner/banner_01_1.jpg" width="763" height="252" alt="" border="0" /></A></div>
<div id="banner2" style="position:absolute; top: 117px; left: 316px; display: none;"><A HREF="banner.php?dd0=2"><img src="img_banner/banner_01_2.jpg" width="763" height="252" alt="" border="0" /></A></div>
<div id="banner3" style="position:absolute; top: 117px; left: 316px; display: none;"><A HREF="banner.php?dd0=3"><img src="img_banner/banner_01_3.jpg" width="763" height="252" alt="" border="0" /></A></div>
<div id="banner4" style="position:absolute; top: 117px; left: 316px; display: none;"><A HREF="banner.php?dd0=4"><img src="img_banner/banner_01_4.jpg" width="763" height="252" alt="" border="0" /></A></div>
<div id="banner5" style="position:absolute; top: 117px; left: 316px; display: none;"><A HREF="banner.php?dd0=5"><img src="img_banner/banner_01_5.jpg" width="763" height="252" alt="" border="0" /></A></div>
<script>
$slide_a = 1; $slide_b = 2;
function slideshow()
	{
  	$('#banner'+$slide_a).fadeOut("slow");
	$('#banner'+$slide_b).fadeIn("slow");	
	$slide_a = $slide_a + 1;
	$slide_b = $slide_b + 1;
	if ($slide_a > 5) { $slide_a = 1; }
	if ($slide_b > 5) { $slide_b = 1; }
	}
setInterval( "slideshow();", 5000 );
</script>
<!---- CORPO--->
<img src="img/nada.gif" width="1" height="370" alt="" border="0" />
<?
///// Quanto solicitado impressão cancela cabecalho
if (strlen($nocab) == 0) { ?>
<div id="textos" style="position:absolute; left: 100px;">
<div id="geral">
 <div class="menu">
   <ul>
     <li><a href="#">Quem somos</a>
       <ul>
         <li><a href="historico.php">Histórico</a></li>
         <li><a href="estrutura.php">Estrutura</a></li>
         <li><a href="editorial.php">Conselho editorial</a></li>
       </ul>
     </li>
     <li><a href="lancamentos.php">Lan&ccedil;amentos</a></li>
     <li><a href="#">Cat&aacute;logo de publica&ccedil;&otilde;es</a>
       <ul>
         <li><a href="livros.php">Livros</a></li>
         <li><a href="colecoes.php">Cole&ccedil;&otilde;es</a></li>
         <li><a href="combos.php">Combos promocionais</a></li>
       </ul>
     </li>
     <li><a href="revistas.php">Revistas cient&iacute;ficas</a></li>
     <li><a href="comprar.php">Atendimento</a></li>
     <li><a href="publicar.php">Como publicar</a></li>
     <li><a href="contato.php">Contato</a></li>
   </ul>
 </div>
 <!--  <div id="data"><? //=$data_semana;?>, <? //=$data_dia;?> de <? //=$data_mes;?> de <? //=$data_ano;?>.</div> -->

  <?
  } ?>
