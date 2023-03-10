<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->post('api/ProductsApi', [
            'name' => 'Product 1',
            'description' => 'This is a test product',
            'price' => '1000',
            'image' => 'img/noimage.png'
        ]);

        $response->assertStatus(200);
    }
}