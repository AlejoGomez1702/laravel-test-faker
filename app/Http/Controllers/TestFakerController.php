<?php

namespace App\Http\Controllers;

use Faker\Factory as Faker;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class TestFakerController extends Controller
{
    public function testFaker(): JsonResponse
    {
        $faker = Faker::create();

        // Nombre
        $name = $faker->name;

        // Dirección 
        $address = $faker->address;

        // Números de telefono
        $phoneNumber = $faker->phoneNumber;

        // Correos Electrónicos
        $email = $faker->email;

        // Fechas
        $date = $faker->date;

        // Parrafos
        $paragraph = $faker->paragraph;

        // URLs de imagenes
        $imageUrl = $faker->imageUrl;

        // CURP Mexicano
        $curp = strtoupper($faker->bothify('????######??????##'));

        return response()->json([
            'name' => $name,
            'address' => $address,
            'phoneNumber' => $phoneNumber,
            'email' => $email,
            'date' => $date,
            'paragraph' => $paragraph,
            'imageUrl' => $imageUrl,
            'curp' => $curp
        ]);
    }

    public function testFakerUser(): JsonResponse
    {
        $faker = Faker::create();

        // Usuario con: nombre, apellido, número de cuenta bancario, correo, telefono, empresa, cargo, CURP
        $name = $faker->firstName;
        $lastName = $faker->lastName;
        $accountNumber = $faker->bankAccountNumber;
        $email = $faker->email;
        $cellphone = $faker->phoneNumber;
        $enterprise = $faker->company;
        $position = $faker->jobTitle;
        $curp = strtoupper($faker->bothify('????######??????##'));

        $user = [
            'nombres' => $name,
            'apellidos' => $lastName,
            'numero_cuenta_bancario' => $accountNumber,
            'correo' => $email,
            'telefono' => $cellphone,
            'empresa' => $enterprise,
            'cargo' => $position,
            'CURP' => $curp,
        ];

        return response()->json( $user );

    }
}
