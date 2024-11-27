<?php

namespace Tests\Feature\Api;

use Tests\TestCase;
use App\Models\Vacancy;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class VacancyTest extends TestCase
{
    use RefreshDatabase;

    public function test_CheckIfReceiveAllEntryOfVacancyInJsonFile(){
        $vacancy = Vacancy::factory()->create();

        $response = $this->get(route('apiindex'));

        $response->assertStatus(200)
                ->assertJsonCount(1);

    }
    
    public function test_CheckIfCanDeleteEntryInVacancyWithApi(){
        $vacancy = Vacancy::factory(2)->create();

        $response = $this->delete(route('apidestroy', 1));
        $this->assertDatabaseCount('vacancies', 1);

        $response = $this->get(route('apiindex'));
        $response->assertJsonCount(1);
    }
    
}
