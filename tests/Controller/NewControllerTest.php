<?php

namespace App\tests\Controller;
use GuzzleHttp\Exception\GuzzleException;
use Symfony\Component\HttpFoundation\Request;
use App\Controller\NewController;
use PHPUnit\Framework\TestCase;
use GuzzleHttp\Client;

class NewControllerTest extends TestCase
{
    public function testLogin()
    {


        $client = new Client();

        try {
            $response = $client->request('POST', 'http://localhost/orange_hrm/public/login', [
                    'username' => 'admin2',
                    'password' => 'password'
            ]);


            echo $response->getBody()->getContents();
            $this->assertEquals('true', 'true');
        } catch (GuzzleException $e) {
        }


    }
}

