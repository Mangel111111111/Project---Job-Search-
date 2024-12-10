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

    /* public function test_StoreCreatesFollowsWhenVacancyExists()
    {
        $response = $this->post(route('apistore'), [
            'jobOffer' => 'Intern',
            'jobVacancyStatus' => 'Close'
        ]);
        $data = ['jobOffer' => 'Intern'];
        $response = $this->get(route('apiindex'));
        $response->assertStatus(200)
                ->assertJsonCount(1)
                ->assertJsonFragment($data);

        $response = $this->postJson(route('followstore', 1),[
            'news' => 'Recruiters have contacted me',
            'vacancy_id' => 1, 
        ]);
        $data = ['news' => 'Recruiters have contacted me'];
        $response = $this->get(route('apiindex'));
        $response->assertStatus (200)
                ->assertJsonFragment(['jobOffer' => 'Intern'])
                ->assertJsonFragment(['news' => 'Recruiters have contacted me']);
    } */

    public function test_IfAFollowBelongsToAnVacancy()
    {
        $vacancy = Vacancy::factory()->create();

        $follow = Follow::factory()->create(['vacancy_id' => $vacancy->id]);

        $this->assertEquals($vacancy->id, $follow->vacancy->id);
    }
    /* public function test_IfCanCreateFollowsForAnEmployment()
    {
        $vacancy = Vacancy::factory()->create();

        $follows = ['Primera novedad', 'Segunda novedad'];

        $response = $this->postJson(route('followstore', ['vacancy_id' => $vacancy->id]), [
            'news' => $follows,
        ]);

        $response->assertStatus(200)
                 ->assertJson([
                     'message' => 'Novedades añadidas correctamente',
                     'vacancy' => [
                         'id' => $vacancy->id,
                         'follows' => [
                             ['news' => 'Primera novedad'],
                             ['news' => 'Segunda novedad'],
                         ],
                     ],
                 ]);

        $this->assertDatabaseCount('follows', 2);
        foreach ($follows as $follow) {
            $this->assertDatabaseHas('follows', [
                'vacancy_id' => $vacancy->id,
                'news' => $follow,
            ]);
        }
    } */

}