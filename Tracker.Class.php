<?php 
/**
* CLASS TO TRACK IP CREATED BY ME
*/
class Tracker
{
	// @ Variables
	public $city;
	public $country;
	public $provider;
	public $lat;
	public $lon;
	public $timezone;

	// @ Connect to API and get information 
	public function track($ip){
		$curl = curl_init("http://ip-api.com/json/" . $ip);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
		$response = curl_exec($curl);

		// @ Decoding JSON response
		$responsedecoded = json_decode($response, true);
		$this->city = $responsedecoded["city"];
		$this->country = $responsedecoded["country"];
		$this->provider = $responsedecoded["isp"];
		$this->lat = $responsedecoded["lat"];
		$this->lon = $responsedecoded["lon"];
		$this->timezone = $responsedecoded["timezone"];

	}
}
 ?>