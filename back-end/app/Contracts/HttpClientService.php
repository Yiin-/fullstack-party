<?php

namespace App\Contracts;

interface HttpClientService
{
	public function get($url);
	public function post($url, $body = []);
}