<?php

use PHPUnit\Framework\TestCase;
use ThiagoLuna\GetZipcode\Search;

class SearchTest extends TestCase
{
    public function testNoZipcode()
    {
        $result = new Search;
        $result = $result->getAddressFromZipcode('');

        $expected = ["error" => "Zipcode is required"];

        $this->assertEquals($expected, $result);
    }

    public function testGetAddressFromZipcodeDefaultUsage()
    {
        $result = new Search;
        $result = $result->getAddressFromZipcode('21060060');

        $expected = [
            "cep" => "21060-060",
            "logradouro" => "Rua Juvenal Galeno",
            "complemento" => "",
            "bairro" => "Olaria",
            "localidade" => "Rio de Janeiro",
            "uf" => "RJ",
            "ibge" => "3304557",
            "gia" => "",
            "ddd" => "21",
            "siafi" => "6001"
        ];

        $this->assertEquals($expected, $result);
    }
}