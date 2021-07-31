<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DispatchTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_dispatch()
    {
        $this->withoutExceptionHandling();
        $response = $this->put('/warehouse/orders/{id}'[
            // data here for test
        ]);
        $response->assertStatus(201);
        $this->assertTrue(count(Task::all()) > 1);
    }
}
