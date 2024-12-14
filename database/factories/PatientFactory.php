<?php

namespace Database\Factories;

use App\Models\Patient;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Testing\Fakes\Fake;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patient>
 */
class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $firstname = fake()->firstName();
        $lastname = fake()->lastName();

        // Static Counter ব্যবহার
        static $counter = null;

        // যদি Counter null হয়, তাহলে Patient Table থেকে সর্বোচ্চ ID নিয়ে সেট করা হবে
        if ($counter === null) {
            $counter = Patient::max('patient_id') ?? 0;
        }

        // Serial Number তৈরি
        $patientSerialNumber = 'ADP-' . str_pad(++$counter, 5, '0', STR_PAD_LEFT);

        return [
            'patient_first_name' => $firstname,
            'patient_last_name' =>  $lastname,
            'patient_username' => fake()->userName(),
            'patient_email' => fake()->unique()->safeEmail(),
            'patient_password' => Hash::make('11'),
            'patient_date_of_birth' => fake()->dateTimeBetween('-70 years', '-18 years')->format('d/m/Y'),
            'patient_serial_number' => $patientSerialNumber,
            'patient_gender' => fake()->randomElement(['Male', 'Female', 'Others']),
            'patient_department' => fake()->randomElement(['Psychiatrists', 'Gastroenterology', 'Rheumatology', 'Surgeon', 'Dental', 'Cardiology', 'Orthopedist', 'Dermatology', 'Emergency Medicine']),
            'patient_blood_group' => fake()->bloodGroup(),
            'patient_disease' => fake()->sentence(3),
            'patient_address' => fake()->address(),
            'patient_city' => fake()->city(),
            'patient_phone' => fake()->randomNumber(),
            'patient_photo' => 'default.jpg',
            'patient_status' => fake()->randomElement(['Urgent: not life threatening', 'Emergency: could become life threatening', 'Immediate: life threatening']),
            'patient_slug' => Str::slug(uniqid('ADP ').'-'.$firstname . '-' . $lastname . time()),
            'patient_creator' => fake()->name(),
            'created_at' => now(),
        ];
    }
}
