<?php

function hello_world()
{
	echo 'Hello there!';
}

function reorder()
{
	print_r(array_flip($_POST['order']));
}
