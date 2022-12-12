<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\TestCase as TestingTestCase;
use Illuminate\Foundation\Testing\WithFaker;
// use PHPUnit\Framework\TestCase;

use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {


        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
