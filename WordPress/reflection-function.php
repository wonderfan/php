<?php

$reflect = new ReflectionFunction('is_page_template');
echo $reflect->getFileName();

$lines = file($reflect->getFileName());
for($l = $reflect->getStartLine(); $l < $reflect->getEndLine(); $l++) {
	$str .= $lines[$l];
}
