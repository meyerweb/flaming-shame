<?php

# $url = "http://area51/img2svg/test.png";
$url = "http://fray.com/images/i3c.gif";

$img = loadImage($url);
//var_dump( getimagesize($img));
generateSVG($img);


function generateSVG($img) {
	$svg = '<svg>';
	$w = imagesx($img); // image width
	$h = imagesy($img); // image height
	for ($x = 0; $x < $w; $x++) {
		for ($y = 0; $y < $h; $y++) {
			$col = imagecolorat($img, $x, $y);
			$rgb = imagecolorsforindex($img, $col);
			$color = "rgb($rgb[red],$rgb[green],$rgb[blue])";
			$svg .= "<rect x=\"$x\" y=\"$y\" width=\"1\" height=\"1\" fill=\"$color\" />\n";
		}
	}
	$svg .= '</svg>';
	echo $svg;
}

function loadImage($url) {

	$allowed = array('jpg','gif','png');
	$pos = strrpos($url, ".");
	$str = substr($url,($pos + 1));

	$ch = curl_init();
	$timeout = 0;
	curl_setopt ($ch, CURLOPT_URL, $url);
	curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);

	// Getting binary data
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_BINARYTRANSFER, 1);

	$image = curl_exec($ch);
	curl_close($ch);
	// output to browser

	$img = @imagecreatefromstring($image);

	return $img;

}

?>