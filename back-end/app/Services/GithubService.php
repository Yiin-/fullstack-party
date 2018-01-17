<?php

namespace App\Services;

use App\Contracts\RepositoryService;
use App\Contracts\HttpClientService;

class GithubService implements RepositoryProvider
{
	protected $httpClient;
	protected $token;

	public function __construct(HttpClientService $httpClient)
	{
		$this->httpClient = $httpClient;
	}

	public function getAuthorizationUrl()
	{
		return 'https://github.com/login/oauth/authorize';
	}

	public function setAccessToken($token)
	{
		$this->token = $token;
	}

	public function getAccessToken()
	{
		return $this->token;
	}

	public function getRepository($user, $repository)
	{

	}

	public function getIssues($user, $repository, $limit = 10, $page = 0);
	public function getIssueComments($user, $repository, $issueId);
}