<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        factory(\App\Models\Role::class, 5)->create()->each(function ($role) use ($faker) {
            if (($user_count = $faker->numberBetween(0, 3)) > 0)
                factory(App\Models\User::class, $user_count)->create(['role_id' => $role->id]);
        });
    }
}
