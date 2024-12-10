<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Vacancy;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class VacancyTest extends TestCase
{
    use RefreshDatabase;
    
    public function test_viewIndex() 
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function test_viewShow()
    {
        $vacancy = Vacancy::factory()->create();

        $response = $this->get(route('show', $vacancy->id));

        $response->assertStatus(200);
    }

}