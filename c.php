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

function refresh()
{
	echo
	'
      <li id="img_03"><img src="/img/4c8c220d0886de1091fcdfe5582c34ea.jpg"></li>
      <li id="img_04"><img src="/img/58d9b8e7bd741b65d317562d8278715b.jpg"></li>
      <li id="img_05"><img src="/img/59873d6c69db71378a89fc8eb0430d1c.jpg"></li>
      <li id="img_06"><img src="/img/74b17ffa401659baee49c260056f7b7b.jpg"></li>
      <li id="img_07"><img src="/img/809476c2a8754f31331dc1a0d4405509.jpg"></li>
      <li id="img_08"><img src="/img/df8731966a4babba183e6cc77ee330d7.jpg"></li>
      <li id="img_09"><img src="/img/f59f502b4d388d2d9359a70885040cc8.jpg"></li>
	';
}