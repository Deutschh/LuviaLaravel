<?php

namespace Tests\Feature;

use App\Models\ProjectFeature;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProjectFeatureCrudTest extends TestCase
{
    use RefreshDatabase;

    public function test_catalog_editor_can_create_read_update_and_delete_a_feature(): void
    {
        $editor = User::factory()->create(['can_manage_catalog' => true]);
        $this->actingAs($editor);
        $data = [
            'title' => 'Validação em bancada',
            'category' => 'Pesquisa',
            'description' => 'Registro usado para verificar a atualização das páginas do TCC.',
            'icon' => 'chip',
            'sort_order' => 5,
        ];

        $this->get(route('project-features.create'))->assertOk();
        $this->post(route('project-features.store'), $data)->assertRedirect(route('project-features.index'));
        $feature = ProjectFeature::query()->sole();
        $this->assertDatabaseHas('project_features', $data);
        $this->get(route('project-features.index'))->assertSeeText($data['title']);
        $this->get(route('home'))->assertSeeText($data['description']);
        $this->get(route('dashboard'))->assertSeeText($data['description']);

        $this->post(route('project-features.store'), $data)->assertSessionHasErrors('title');
        $this->get(route('project-features.edit', $feature))->assertOk();
        $data['description'] = 'Descrição revisada.';
        $this->put(route('project-features.update', $feature), $data)->assertRedirect(route('project-features.index'));
        $this->assertDatabaseHas('project_features', $data);

        $this->delete(route('project-features.destroy', $feature))->assertRedirect(route('project-features.index'));
        $this->assertModelMissing($feature);
        $this->get(route('home'))->assertDontSeeText($data['title']);
    }

    public function test_catalog_management_requires_an_authorized_account(): void
    {
        $feature = ProjectFeature::query()->create([
            'title' => 'Luva',
            'category' => 'Hardware',
            'description' => 'Item do catálogo.',
            'icon' => 'glove',
        ]);

        $this->get(route('project-features.index'))->assertRedirect(route('login'));

        $this->actingAs(User::factory()->create());
        $this->get(route('project-features.index'))->assertForbidden();
        $this->post(route('project-features.store'))->assertForbidden();
        $this->put(route('project-features.update', $feature))->assertForbidden();
        $this->delete(route('project-features.destroy', $feature))->assertForbidden();
        $this->assertModelExists($feature);
    }
}
