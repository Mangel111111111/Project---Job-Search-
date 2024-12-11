<?php

namespace Tests\Feature\Api;

use Tests\TestCase;
use App\Models\Follow;
use App\Models\Vacancy;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class FollowTest extends TestCase
{
    use RefreshDatabase;

    public function test_StoreCreatesFollowsWhenVacancyExists()
    {
        $vacancy = Vacancy::factory()->create();

    
        $response = $this->post(route('followstore', $vacancy -> id),[
            'news' => ['Recruiters have contacted me']
        ]);
        $data = ['news' => 'Recruiters have contacted me'];
        $response->assertStatus (200)
                ->assertJsonCount(2)
                ->assertJsonFragment(['news' => 'Recruiters have contacted me']);
    }

    public function test_IfAFollowBelongsToAnVacancy()
    {
        $vacancy = Vacancy::factory()->create();

        $follow = Follow::factory()->create(['vacancy_id' => $vacancy->id]);

        $this->assertEquals($vacancy->id, $follow->vacancy->id);
    }
}