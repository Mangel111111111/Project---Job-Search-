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
    public function test_CheckIfCanCreateEntryInVacancyWithJson(){
        $response = $this->post(route('apistore'), [
            'jobOffer' => 'Intern',
            'jobVacancyStatus' => 'Close'
        ]);
        $response = $this->get(route('apiindex'));
        $response->assertStatus(200)
                ->assertJsonCount(1);
    }
    public function test_CheckIfCanUpdateEntryInVacancyWithJsonFile(){
        $response = $this->post(route('apistore'), [
            'jobOffer' => 'Intern',
            'jobVacancyStatus' => 'Close'
        ]);
        $data = ['jobOffer' => 'Intern'];
        $response = $this->get(route('apiindex'));
        $response->assertStatus(200)
                ->assertJsonCount(1)
                ->assertJsonFragment($data);

        $response = $this->put('/api/vacancies/1', [
            'jobOffer' => 'unemployed',
            'jobVacancyStatus' => 'Open'
        ]);
        $data = ['jobOffer' => 'unemployed'];
        $response = $this->get(route('apiindex'));
        $response->assertStatus(200)
                ->assertJsonCount(1)
                ->assertJsonFragment($data);
    }
    public function test_CheckIfReceiveOnlyOneEntryOfVacancyInJsonFile(){
        $vacancy = Vacancy::factory()->create();
        $response = $this->get(route('apishow', ['id' => $vacancy->id]));
        $response->assertStatus(200);
        $response->assertJson([
            'id' => $vacancy->id,
        ]);
    }
}

