<?php
/* File include access to database */

header('Content-type: text/html; charset=utf-8');

include_once("settings/url_parsing.php");
require("db/dbPDO.class.php");
require("db/dbClients.class.php");
require("db/dbProducts.class.php");
require("db/numbers.class.php");

dbPDO::init();
dbPDO::setCharSet();

if ($Page=="notebook" and $Module=="") { 

	$products = dbProducts::GetNotebooksByParams(NULL);
	$href="pages/catalog_notebook.php"; 

	$page['title'] = "Каталог | AnyComp.by";
	$page['keywords'] = "Каталог AnyComp.by";
	$page['description'] = "Каталог AnyComp.by - это удобный способ купить необходимый товар. Сравнение ценовых предложений, обзоры, фото, характеристики товаров и конечно доступные цены!";


}elseif($Page=="index" and $Module=="index"){

	$products = dbProducts::GetNotebooksByParams(NULL);
	$href="pages/catalog_notebook.php"; 

	$page['title'] = "Каталог | AnyComp.by";
	$page['keywords'] = "Каталог AnyComp.by";
	$page['description'] = "Каталог AnyComp.by - это удобный способ купить необходимый товар. Сравнение ценовых предложений, обзоры, фото, характеристики товаров и конечно доступные цены!";

}elseif($Page=="notebook"){

	$params = array();
	$params['brand'] = $Module;
	$params['config'] = $Params[0];
	$item = dbProducts::GetNotebooksByParams($params, "b+c");
	if($item){

		$item = $item[0];

		$params = array();
		$params['views'] = $item['views'] + 1;
		$id = $item['id'];
		dbProducts::updateProduct($params, $id);

		$title = "Ноутбук ".$item['producer']." ".$item['model']." (".$item['config'].")";

		$page['title'] = $title." - Каталог | AnyComp.by";
		$page['keywords'] = "Купить ".$item['producer']." ".$item['model']." (".$item['config'].")";
		$page['description'] = "Каталог AnyComp.by - это удобный способ купить ноутбук ".$item['producer']." ".$item['model']." (".$item['config']."). Характеристики, отзывы, выгодные предложения, низкие цены";

		$href="pages/notebook_view.php";
	}
	 
}

	include_once("pages/main_header.php");
	include_once($href);
	include_once("pages/main_footer.php");

?>