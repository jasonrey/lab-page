<?php
!defined('SERVER_EXEC') && die('No access.');

class TwitterHelper extends Helper
{
	public $accesstoken;
	public $base = 'https://api.twitter.com/1.1/';

	public function authenticate()
	{
		$ch = curl_init();

		$apikey = TWITTER_API_KEY;
		$apisecret = TWITTER_API_SECRET;
		$api = base64_encode($apikey . ':' . $apisecret);

		$headers = array(
			'Content-Type: application/x-www-form-urlencoded;charset=UTF-8',
			'Authorization: Basic ' . $api,
			'Content-Length: 29'
		);

		$postdata = 'grant_type=client_credentials';

		curl_setopt($ch, CURLOPT_URL, 'https://api.twitter.com/oauth2/token');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);

		$output = curl_exec($ch);
		curl_close($ch);

		if ($output === false) {
			echo 'CURL error: ' . curl_error($ch);
			exit;
		}

		$response = json_decode($output);

		if (isset($response->errors)) {
			var_dump($response->errors);
			exit;
		}

		if (!isset($response->token_type) || $response->token_type !== 'bearer') {
			echo 'Unknown error: Unexpected response.';
			exit;
		}

		$this->accesstoken = $response->access_token;
	}

	public function getLatestTweet($username)
	{
		$this->authenticate();

		$options = array(
			'screen_name' => $username,
			'count' => 1
		);

		$ch = curl_init();

		$headers = array(
			'Content-Type: application/x-www-form-urlencoded;charset=UTF-8',
			'Authorization: Bearer ' . $this->accesstoken
		);

		$apiurl = $this->base . '/statuses/user_timeline.json';

		curl_setopt($ch, CURLOPT_URL, $apiurl . '?' . http_build_query($options));
		curl_setopt($ch, CURLOPT_HTTPGET, true);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

		$output = curl_exec($ch);
		curl_close($ch);

		if ($output === false) {
			echo 'CURL error: ' . curl_error($ch);
			exit;
		}

		$response = json_decode($output);

		if (empty($response)) {
			echo 'Unknown error: Unexpected response.';
			exit;
		}

		return $response[0];
	}
}
