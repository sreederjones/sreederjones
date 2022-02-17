<?php
    $url = "https://maps.googleapis.com/maps/api/place/details/json?place_id=[YOUR PLACE ID GOES HERE]=review&key=[YOUR API KEY GOES HERE]";
    $json = file_get_contents($url);
		$rev = json_decode($json, true); 
		$index = 0;
		
		
		for ($index = 0; $index < "5"; $index++){
			if($rev['result']['reviews'][$index]['rating'] = "5"){
				echo "&#11088;&#11088;&#11088;&#11088;&#11088;"; ?>
				
	
		 <?php echo "&#8220;" . $rev['result']['reviews'][$index]['text'] . "&#8221;"; ?> <br><br>
		
		<?php }} ?>