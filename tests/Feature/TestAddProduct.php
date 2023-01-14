<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TestAddProduct extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {

        /*$response = $this->post('api/productsApi', [
            'name' => 'Product 1',
            'description' => 'This is a test product',
            'price' => '1000',
            'image' => 'img/noimage.png'
        ]);*/

        $response = $this->get('/');
        $response->assertStatus(200);
    }
}