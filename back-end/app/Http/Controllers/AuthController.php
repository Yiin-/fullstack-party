<?php

namespace App\Http\Controllers;

class AuthController extends Controller
{
	public function login(RepositoryProvider $repositoryProvider)
	{
		return redirect($repositoryProvider->getAuthorizationUrl());
	}

	public function logout()
	{

	}

	public function callback(RepositoryProvider $repositoryProvider)
	{
		$accessToken = request()->get('access_token');

		$repositoryProvider->setAccessToken($accessToken);

		return redirect()->route('home');
	}
}