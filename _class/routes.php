<?php

class routes
{


	public static function index()
	{

		header('location:/');
	}
	public static function login()
	{

		header('location:/login.view.php');
	}

	public static function administration()
	{

		header('location:/administration.view.php');
	}
}
