<?php

namespace App\Services;

use App\Contracts\HttpClientService;
use GuzzleHttp\Client;

class GuzzleHttpClientService implements HttpClientService
{
	public function __construct()
	{
		$this->httpClient = new Client();
	}

	public function get($url)
	{
		$response = $this->httpClient->request('GET', $url);

		return (string)$response->getBody();
	}

	public function post($url, $body = [])
	{
		$response = $this->httpClient->request('POST', $url, [
			'form_params' => $body
		]);

		return (string)$response->getBody();
	}
}