<?php
use Faker\Generator;
use TeachMe\Entities\Test;


class TestTableSeeder extends BaseSeeder
{
    protected $total = 100;

    public function getModel()
    {
        return new Test();
    }

    public function getDummyData(Generator $faker, array $customValues = array())
    {
        return [
            'name'    => $faker->word,
            'size'    => $faker->randomElement(['s', 'm', 'l', 'xl']),
            'user_id' => $this->getRandom('User')->id
        ];
    }
}