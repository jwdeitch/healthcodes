<?php
namespace Services;

class nycClient {
    private $apiUrl = 'https://data.cityofnewyork.us/resource/xx67-kt59.json';

    public function __construct() {

    }

    public function send( $q )
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $this->apiUrl . '?$q=' . $q .'&$limit=10',
        ));

        $resp = curl_exec($curl);

        curl_close($curl);

        return $resp;

    }

}
