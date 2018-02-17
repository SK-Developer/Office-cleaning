<?php
	/*
		This file will be included when a module with the name 'footer' is found by ACFListener.
		All the modules fields will be available in 'get_sub_field'
		
	*/
	require_once('ACF_footer.php');

	$example = new ACF_footer();

	$example->foo = get_field('foo');
	$example->bar = get_field('bar');


	$example->printHTML();