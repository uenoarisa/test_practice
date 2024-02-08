<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IndexTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    
     
    public function testExample()
    {
        $bigQuestion = factory(BigQuestion::class)->create();
        $response = $this->get('/');
        $response->assertStatus(200);
        $response->assertSee($bigQuestion->name);
    }
}
