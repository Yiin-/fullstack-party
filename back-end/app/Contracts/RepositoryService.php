<?php

namespace App\Contracts;

interface RepositoryService
{
	public function getAuthorizationUrl();
	public function setAccessToken($token);
	public function getAccessToken();
	public function getRepository($user, $repository);
	public function getIssues($user, $repository, $limit = 10, $page = 0);
	public function getIssueComments($user, $repository, $issueId);
}