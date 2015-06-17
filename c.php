<?php

require_once __DIR__ . '/utils.php';

function upload()
{
	file_put_contents(__DIR__."/twitto.log", print_r($_FILES, true));
}

function reorder()
{
	print_r(array_flip($_POST['order']));
}

function portfolio()
{
	file_put_contents(__DIR__."/twitto.log", print_r($_POST, true));
	print_r($_POST);
}