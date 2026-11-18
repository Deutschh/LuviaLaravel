<?php

namespace App\Http\Controllers;

use App\Models\ProjectFeature;
use Illuminate\View\View;

class ProjectPageController extends Controller
{
    public function welcome(): View
    {
        return view('welcome', $this->projectData());
    }

    public function dashboard(): View
    {
        return view('dashboard', $this->projectData());
    }

    /**
     * @return array<string, mixed>
     */
    private function projectData(): array
    {
        $features = ProjectFeature::query()->ordered()->get();

        return [
            'features' => $features,
            'featureCategories' => $features->groupBy('category'),
            'featureCount' => $features->count(),
        ];
    }
}
