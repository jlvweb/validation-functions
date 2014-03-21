<?
/* =============================================================
 * Various validation functions
 * https://github.com/jlvweb/validation-functions
 * =============================================================
 * Copyright 2014 Johan Lingvall
 * ============================================================= */
function isValidEmail($address, $strict=false) {
	$regex = ($strict) ? '/^([.0-9a-z_-]+)@(([0-9a-z-]+\.)+[0-9a-z]{2,4})$/i' 
					   : '/^([*+!.&#$¦\'\\%\/0-9a-z^_`{}=?~:-]+)@(([0-9a-z-]+\.)+[0-9a-z]{2,4})$/i'; 
	return preg_match($regex, trim($address), $matches);
}
function isValidAlpha($str,$additionalChars="") {
	return preg_match('/^[a-zA-Z'.$additionalChars.']+$/', $str);
}
function isValidAlphaNum($str,$additionalChars="") {
	return preg_match('/^[a-zA-Z0-9'.$additionalChars.']+$/', $str);
}
function isValidDigits($str,$additionalChars="") {
	return preg_match('/^[0-9'.$additionalChars.']+$/', $str);
}
function isValidColor($color) {
	return preg_match('/^#[abcdef0-9]{3,6}$/i', $color);
}
function isUpperCase($str) { 
    return $str == strtoupper($str);
}
function isLowerCase($str) { 
    return $str == strtolower($str);
}
?>