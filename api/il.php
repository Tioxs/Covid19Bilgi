<?php
header('Content-Type: text/json');

function remove_spaces($text) {
	return str_replace(' ', '', $text);
}

function format($text) {
	$tmp = str_replace(
		['İ', 'Ü', 'Ğ', 'Ş', 'Ç', 'Ö', 'ı', 'ü', 'ğ', 'ş', 'ç', 'ö'],
		['I', 'U', 'G', 'S', 'C', 'O', 'i', 'u', 'g', 's', 'c', 'o'],
		$text
	);
	return mb_strtoupper(remove_spaces($tmp));
}


$url = 'https://covid19.saglik.gov.tr';
$source = file_get_contents($url);
$source = explode('<tbody>', $source);
$source = explode('</tbody>', $source[1])[0];
preg_match_all('@<tr>(.*?)</tr>@si', $source, $tr);

$all = array();

for ($i = 0; $i < count($tr[1]); $i++) {
	preg_match_all('@<td>(.*?)</td>@si', $tr[1][$i], $td);
	$all[format($td[1][0])] = remove_spaces($td[1][1]);

}

print_r(json_encode($all, JSON_PRETTY_PRINT));