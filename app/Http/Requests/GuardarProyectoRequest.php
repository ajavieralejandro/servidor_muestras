<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuardarProyectoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nombre_proyecto'       => ['required','string','max:200'],

            // Puede venir como string ("Ciclo básico - 2do 6ta") o como array
            'especialidad_trayecto' => ['nullable'],

            // Puede venir como string ("Alumno 1, Alumno 2") o como array
            'participantes'         => ['nullable'],

            'descripcion_breve'     => ['nullable','string','max:2000'],
        ];
    }

    protected function prepareForValidation(): void
    {
        // Normalizar especialidad_trayecto: string → array
        $e = $this->input('especialidad_trayecto');
        if (is_string($e)) {
            $arr = collect(preg_split('/[,;|-]+/u', $e))
                ->map(fn ($s) => trim($s))
                ->filter()
                ->values()
                ->all();
            $this->merge(['especialidad_trayecto' => $arr]);
        }

        // Normalizar participantes: string → array
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
