<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveProjectFeatureRequest;
use App\Models\ProjectFeature;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ProjectFeatureController extends Controller
{
    public function index(): View
    {
        return view('project-features.index', [
            'features' => ProjectFeature::query()->ordered()->get(),
        ]);
    }

    public function create(): View
    {
        return view('project-features.form', ['feature' => new ProjectFeature]);
    }

    public function store(SaveProjectFeatureRequest $request): RedirectResponse
    {
        ProjectFeature::query()->create($request->validated());

        return to_route('project-features.index')->with('status', 'Registro criado.');
    }

    public function edit(ProjectFeature $projectFeature): View
    {
        return view('project-features.form', ['feature' => $projectFeature]);
    }

    public function update(SaveProjectFeatureRequest $request, ProjectFeature $projectFeature): RedirectResponse
    {
        $projectFeature->update($request->validated());

        return to_route('project-features.index')->with('status', 'Registro atualizado.');
    }

    public function destroy(ProjectFeature $projectFeature): RedirectResponse
    {
        $projectFeature->delete();

        return to_route('project-features.index')->with('status', 'Registro excluído.');
    }
}
