<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SaveProjectFeatureRequest extends FormRequest
{
    public function rules(): array
    {
        $title = Rule::unique('project_features');

        if ($feature = $this->route('project_feature')) {
            $title->ignore($feature);
        }

        return [
            'title' => ['required', 'string', 'max:255', $title],
            'category' => ['required', 'string', 'max:60'],
            'description' => ['required', 'string', 'max:5000'],
            'icon' => ['required', 'string', 'max:40', 'alpha_dash:ascii'],
            'sort_order' => ['required', 'integer', 'between:0,65535'],
        ];
    }

    public function attributes(): array
    {
        return [
            'title' => 'título',
            'category' => 'categoria',
            'description' => 'descrição',
            'icon' => 'ícone',
            'sort_order' => 'ordem',
        ];
    }
}
