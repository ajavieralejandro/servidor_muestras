<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActualizarProyectoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nombre_proyecto'       => ['required','string','max:200'],
            'especialidad_trayecto' => ['nullable'],
            'participantes'         => ['nullable'],
            'descripcion_breve'     => ['nullable','string','max:2000'],
        ];
    }

    protected function prepareForValidation(): void
    {
        $e = $this->input('especialidad_trayecto');
        if (is_string($e)) {
            $arr = collect(preg_split('/[,;|-]+/u', $e))
                ->map(fn ($s) => trim($s))
                ->filter()
                ->values()
                ->all();
            $this->merge(['especialidad_trayecto' => $arr]);
        }

        $p = $this->input('participantes');
        if (is_string($p)) {
            $arr = collect(preg_split('/[,;|-]+/u', $p))
                ->map(fn ($s) => trim($s))
                ->filter()
                ->values()
                ->all();
            $this->merge(['participantes' => $arr]);
        }
    }
}
