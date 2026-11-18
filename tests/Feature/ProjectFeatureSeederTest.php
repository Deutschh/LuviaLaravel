<?php

namespace Tests\Feature;

use App\Models\ProjectFeature;
use Database\Seeders\ProjectFeatureSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

class ProjectFeatureSeederTest extends TestCase
{
    use RefreshDatabase;

    public function test_migration_creates_the_informational_schema(): void
    {
        $this->assertTrue(Schema::hasColumns('project_features', [
            'id',
            'title',
            'category',
            'description',
            'icon',
            'sort_order',
            'created_at',
            'updated_at',
        ]));
    }

    public function test_seeder_is_idempotent_and_creates_sixteen_ordered_records(): void
    {
        $this->seed(ProjectFeatureSeeder::class);
        $this->seed(ProjectFeatureSeeder::class);

        $this->assertDatabaseCount('project_features', 16);
        $this->assertSame('ESP32-S3', ProjectFeature::query()->ordered()->firstOrFail()->title);
        $this->assertSame('Autenticação JWT', ProjectFeature::query()->ordered()->get()->last()->title);
        $this->assertDatabaseHas('project_features', [
            'title' => 'Bluetooth Low Energy',
            'category' => 'Conectividade',
        ]);
    }
}
