<?php

namespace Tests\Feature;

use App\Models\Feedback;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class FeedbackCrudTest extends TestCase
{
    use RefreshDatabase;

    public function test_authenticated_user_can_manage_feedbacks()
    {
        $this->actingAs(User::factory()->create());

        $data = [
            'nome' => 'Fernanda Souza',
            'localidade' => 'Vila Velha, ES',
            'nota' => '5.0',
            'comentario' => 'Atendimento excelente.',
        ];

        $this->post(route('feedback.store'), $data)
            ->assertRedirect(route('feedback.index'));

        $feedback = Feedback::firstOrFail();
        $this->assertDatabaseHas('feedbacks', $data);

        $updatedData = array_merge($data, [
            'localidade' => 'Vitória, ES',
            'nota' => '4.5',
        ]);

        $this->put(route('feedback.update', $feedback), $updatedData)
            ->assertRedirect(route('feedback.index'));

        $this->assertDatabaseHas('feedbacks', $updatedData);

        $this->delete(route('feedback.destroy', $feedback))
            ->assertRedirect(route('feedback.index'));

        $this->assertDatabaseMissing('feedbacks', ['id' => $feedback->id]);
    }

    public function test_feedback_note_must_be_between_zero_and_five_with_one_decimal_place()
    {
        $this->actingAs(User::factory()->create());

        $this->from(route('feedback.create'))
            ->post(route('feedback.store'), [
                'nome' => 'Cliente',
                'localidade' => 'Vitória, ES',
                'nota' => '5.55',
                'comentario' => 'Comentário de teste.',
            ])
            ->assertRedirect(route('feedback.create'))
            ->assertSessionHasErrors('nota');

        $this->assertDatabaseCount('feedbacks', 0);
    }
}
