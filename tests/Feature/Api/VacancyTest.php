<?php

namespace Tests\Feature\Api;

use Tests\TestCase;
use App\Models\Vacancy;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class VacancyTest extends TestCase
{
    use RefreshDatabase;

    public function test_CheckIfReceiveAllEntryOfJournalInJsonFile(){
        $vacancy = Vacancy::factory()->create();

        $response = $this->get(route('apiindex'));

        $response->assertStatus(200)
                ->assertJsonCount(1);
    }
}
