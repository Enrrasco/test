<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class QuestionTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testQuestion1()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }

    public function testQuestion2()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    public function testQuestion3()
    {
        $response = $this->get('/about');

        $response->assertStatus(200);
    }

    public function testQuestion4()
    {
        $response = $this->get('/contact');

        $response->assertStatus(200);
    }

}