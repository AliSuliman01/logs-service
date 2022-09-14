<?php

namespace Database\Seeders;

use App\Domain\Competitions\CompetitionTypes\CompetitionTypes\Model\CompetitionType;
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
        $defaultData = json_decode(file_get_contents(__DIR__.'/defaultData.json'), true);

        foreach ($defaultData['competition_types'] as $defaultObjectArray) {
            $this->handleObject($defaultObjectArray);
        }
    }

    private function handleObject($defaultObjectArray)
    {
        $object = new CompetitionType();
        $object->save();
        $object->translations()->createMany($defaultObjectArray['translations']);
    }
}
