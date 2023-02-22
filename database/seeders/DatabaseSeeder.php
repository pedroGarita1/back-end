<?php

namespace Database\Seeders;

use Database\Factories\DescriptionPeopleFactory;
use Database\Factories\EmailPeopleFactory;
use Database\Factories\PeopleFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        PeopleFactory::factoryForModel('People')->count(100)->create();
        EmailPeopleFactory::factoryForModel('EmailPeople')->count(100)->create();
        DescriptionPeopleFactory::factoryForModel('DescriptionPeople')->count(100)->create();
    }
}
