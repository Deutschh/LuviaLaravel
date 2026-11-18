<?php

namespace Tests\Feature;

use App\Models\User;
use Database\Seeders\ProjectFeatureSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProjectPagesTest extends TestCase
{
    use RefreshDatabase;

    public function test_landing_page_displays_database_content_and_separates_both_products(): void
    {
        $this->seed(ProjectFeatureSeeder::class);

        $response = $this->get('/');

        $response
            ->assertOk()
            ->assertSeeText('Aplicativo e ecossistema Luvia')
            ->assertSeeText('Site de apresentação do TCC')
            ->assertSeeText('ESP32-S3')
            ->assertSeeText('Backend/API Node.js')
            ->assertSeeText('16 registros');
    }

    public function test_guest_is_redirected_from_dashboard(): void
    {
        $this->get('/dashboard')->assertRedirect(route('login'));
    }

    public function test_authenticated_user_can_view_database_content_on_dashboard(): void
    {
        $this->seed(ProjectFeatureSeeder::class);
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/dashboard');

        $response
            ->assertOk()
            ->assertSeeText('Visão técnica da Luvia')
            ->assertSeeText('16 registros carregados')
            ->assertSeeText('PostgreSQL/Neon')
            ->assertSee('project_features');
    }

    public function test_unknown_page_uses_the_custom_fallback(): void
    {
        $this->get('/pagina-inexistente')->assertNotFound()->assertSeeText('Página não encontrada');
    }
}
