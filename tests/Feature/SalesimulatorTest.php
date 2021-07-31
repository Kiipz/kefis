<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SalesimulatorTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_salesimulator()
    {
        $this->withoutExceptionHandling();
        $response = $this->post('/products/decrement/{id}'[
            // data here for test
        ]);
        $response->assertStatus(201);
        $this->assertTrue(count(Task::all()) > 1);
    }
}
