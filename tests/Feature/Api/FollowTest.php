<?php

namespace Tests\Feature\Api;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FollowTest extends TestCase
{
    use RefreshDatabase;

    public function test_StoreCreatesFollowsWhenVacancyExists()
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

        $response = $this->post('/vacancies/1/follows', [
            'news' => 'Recruiters have contacted me',
        ]);
        $data = ['news' => 'Recruiters have contacted me'];
        $response = $this->get(route('apiindex'));
        $response->assertStatus(200)
                ->assertJsonCount(1)
                ->assertJsonFragment($data);
    }
        public function test_StoreeeCreatesFollowsWhenVacancyExists()
    {
        // Crear una vacante
        $response = $this->post(route('apistore'), [
            'jobOffer' => 'Intern',
            'jobVacancyStatus' => 'Close'
        ]);

        // Asegúrate de que la vacante fue creada correctamente
        $vacancy = json_decode($response->getContent(), true);
        $vacancyId = $vacancy['id'];  // Obtener el ID de la vacante recién creada

        // Verificar que la vacante se ha creado correctamente
        $response = $this->get(route('apiindex'));
        $response->assertStatus(200)
                ->assertJsonFragment(['jobOffer' => 'Intern']);

        // Crear un follow para la vacante
        $response = $this->postJson("/vacancies/{$vacancyId}/follows", [
            'news' => 'Recruiters have contacted me',
        ]);

        // Verificar que el código de estado sea 201 (creado)
        $response->assertStatus(201)
                ->assertJsonFragment(['news' => 'Recruiters have contacted me']);
    }


}