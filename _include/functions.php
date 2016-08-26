<?php
function pre($data){
	echo "<pre>";
	print_r($data);
	echo "</pre>";
};
function procesApi(){
	//CREDENCIALES PARA EL SSL
	$arrContextOptions=array(
	    "ssl"=>array(
	        "verify_peer"=>false,
	        "verify_peer_name"=>false,
	    ),
	);  
	$service_url = file_get_contents("https://experienciasxcaret.github.io/Developers/api/front.json", false, stream_context_create($arrContextOptions));
	$result = json_decode($service_url, true);
	$node = $result[0];
	return $node;
}
function clearYoutube($link){
	$no_feature = strpos($link, '&', 0);
	$vide_id = strpos($link, 'v=', 0);
	$vide_id = $vide_id + 2;
	$leng = $no_feature - $vide_id;
	$rest = substr($link, $vide_id, $leng);
	return $rest;
}
?>