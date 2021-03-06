<?php

namespace ThiagoLuna\GetZipcode;

class Search 
{
    private $url = "https://viacep.com.br/ws/";

    public function getAddressFromZipcode (string $zipCode): array 
    {
        if (empty($zipCode)) {
            $emptyMsg = [
                "error" => "Zipcode is required"
            ];

            return $emptyMsg;
        }
        
        $zipCode = preg_replace('/[^0-9]/im', '', $zipCode);

        $get = file_get_contents($this->url . $zipCode . "/json");

        return (array) json_decode($get);        
    }
}