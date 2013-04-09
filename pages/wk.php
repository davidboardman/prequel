<?php

require "../prequel.php";

$fn = $_GET["fn"];
$array = json_decode($_GET["array"], true);
$left = json_decode($_GET["left"], true);
$right = json_decode($_GET["right"], true);
$cols = $_GET["cols"];
$key = $_GET["key"];
$val = $_GET["val"];
$method = $_GET["met"];
$match = json_decode($_GET["mat"],true);

if ($fn == "select") {
	if ($cols == "all" || $cols == "") {
		print_r($prequel -> select(array(), $array));
	} else {
		print_r($prequel -> select((array) $cols, $array));
	}
} elseif ($fn == "where") {
	if ($cols == "all" || $cols == "") {
		print_r($prequel -> where(array(), $key, $val, $array));
	} else {
		print_r($prequel -> where((array) $cols, $key, $val, $array));
	}
} elseif ($fn == "in") {
	if ($cols == "all" || $cols == "") {
		print_r($prequel -> in(array(), $key, json_decode($val,true), $array));
	} else {
		print_r($prequel -> in((array) $cols, $key, json_decode($val,true), $array));
	}
} elseif ($fn == "li") {
	if ($cols == "all" || $cols == "") {
		print_r($prequel -> like(array(), $key, $val, $array));
	} else {
		print_r($prequel -> like((array) $cols, $key, $val, $array));
	}
} elseif ($fn == "un") {
	if ($cols == "all" || $cols == "") {
		print_r($prequel -> union(array(), $left, $right));
	} else {
		print_r($prequel -> union($cols, $left, $right));
	}
} elseif ($fn == "jn") {
	if ($cols == "all" || $cols == "") {
		print_r($prequel -> join($method, array(), $left, $right, $match));
	} else {
		print_r($prequel -> join($method, $left, $right, $match));
	}
}


?>