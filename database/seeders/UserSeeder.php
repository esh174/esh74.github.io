<?php

namespace Database\Seeders;

use App\Models\User;
use App\Traits\SeederSetupTrait;
use Illuminate\Database\Eloquent\Collection as ElCollection;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    use SeederSetupTrait;

    public ElCollection $users;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->setup();

        $this->users = User::factory()
            ->count(count: 5)
            ->create();
    }
}
