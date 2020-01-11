<?php

use App\Customer;
use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $customers = [];
        $status = collect(array_keys(Customer::STATUS_SELECT));

        foreach(range(1,100) as $id)
        {
            array_push($customers, [
                'id' => $id,
                'name' => $faker->name,
                'status' => $status->random()
            ]);
        }

        Customer::insert($customers);
    }
}
