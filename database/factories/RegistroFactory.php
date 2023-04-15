<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Registro>
 */
class RegistroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //


            'fecha' => $this -> faker -> date('Y_m_d'),
            'hora' => $this -> faker -> time('H_i_s'),

            //datos del cliente
            'cliente' => $this -> faker -> name(),
            'telefono' => $this -> faker -> phoneNumber(),
            'domicilio' => "calle example por 26 y 26",
            'correo' => "correo@example.com",

            //datos del dispositivo
            'marca' => $this -> faker -> word(),
            'modelo' => $this -> faker -> word(),
            'codigo_de_desbloqueo' => $this -> faker -> word(),
            'accesorios' => $this -> faker -> word(),

            //datos del servicio a realizar
            'servicio' => $this -> faker -> word(),
            'observaciones' => $this -> faker -> word(),
            'descripcion_de_la_falla' => $this -> faker -> sentence()


        ];
    }
}
