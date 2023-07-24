<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Models\Employee;
use Faker\Factory as Faker;

class EmployeeController extends Controller
{
    public function addOneEmployee(): JsonResponse
    {
        $faker = Faker::create();

        // Agregar un registro a la tabla de empleados usando faker para generar los datos.
        // tabla -> users, modelo -> user. tabla-> products, modelo -> product.
        $employee = new Employee();
        $employee->first_name = $faker->firstName;
        $employee->second_name = $faker->firstName; // Puedes usar firstName para generar otro nombre ficticio
        $employee->surname = $faker->lastName;
        $employee->second_surname = $faker->lastName;
        $employee->curp = strtoupper($faker->bothify('????######??????##')); // Genera un número de CURP ficticio
        $employee->email = $faker->email;
        $employee->phone = $faker->phoneNumber;
        $employee->enterprise_name = $faker->company;
        $employee->gender = $faker->randomElement(['M', 'F']); // Genera un género aleatorio ('M' o 'F')
        $employee->bank_name = $faker->word . ' Bank'; // Agrega una palabra aleatoria seguida de ' Bank'
        $employee->bank_account_number = $faker->bankAccountNumber; // Genera un número de cuenta ficticio
        $employee->save();

        return response()->json([
            'employee' => $employee
        ]);
    }

    public function addCountEmployees( $count ): JsonResponse
    { 
        $count = intval( $count );

        $faker = Faker::create();
        // hacer un ciclo que registre en la BD '$count' elementos.
        for ($i=0; $i < $count; $i++) 
        { 
            // Agregar un registro a la tabla de empleados usando faker para generar los datos.
            // tabla -> users, modelo -> user. tabla-> products, modelo -> product.
            $employee = new Employee();
            $employee->first_name = $faker->firstName;
            $employee->second_name = $faker->firstName; // Puedes usar firstName para generar otro nombre ficticio
            $employee->surname = $faker->lastName;
            $employee->second_surname = $faker->lastName;
            $employee->curp = strtoupper($faker->bothify('????######??????##')); // Genera un número de CURP ficticio
            $employee->email = $faker->email;
            $employee->phone = $faker->phoneNumber;
            $employee->enterprise_name = $faker->company;
            $employee->gender = $faker->randomElement(['M', 'F']); // Genera un género aleatorio ('M' o 'F')
            $employee->bank_name = $faker->word . ' Bank'; // Agrega una palabra aleatoria seguida de ' Bank'
            $employee->bank_account_number = $faker->bankAccountNumber; // Genera un número de cuenta ficticio
            $employee->save();
        }

        return response()->json([
            'count' => $count
        ]);
    }
}
