<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Pet;
use App\Models\Preset;
use App\Models\User;
use App\Traits\SeederSetupTrait;
use Faker\Factory;
use Faker\Generator;
use Illuminate\Database\Eloquent\Collection as ElCollection;
use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;
use Xvladqt\Faker\LoremFlickrProvider;

class DogSeeder extends Seeder
{
    use SeederSetupTrait;

    public ElCollection $presets;

    public ElCollection $categories;

    public ElCollection $pets;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->setup();

        $this->presets = Preset::factory()
            ->count(count: 20)
            ->create();

        $this->categories = Category::factory()
            ->count(count: 5)
            ->make()
            ->each(callback: function (Category $category): void {
                $preset_number = $this->faker->numberBetween(3, 7);
                $presets = $this->presets
                    ->shuffle()
                    ->take(limit: $preset_number)
                    ->pluck(value: 'id');

                $category->setup = $presets;

                $category->save();
            });

        $this->pets = Pet::factory()
            ->count(count: 50)
            ->make()
            ->each(callback: function (Pet $pet): void {

                /** @var Category $category */
                $category = $this->categories
                    ->shuffle()
                    ->first();

                $pet->category()->associate(model: $category);

                $pet->fieldset = Collection::make();

                foreach ($category->setup as $preset) {
                    $pet->fieldset->add(item: [
                        $preset => $this->faker->randomElement(array: [
                            $this->faker->word,
                            $this->faker->randomLetter,
                            $this->faker->numberBetween()
                        ])
                    ]);
                }

                $pet->owner()->associate(model:
                    User::inRandomOrder()
                        ->first()
                );

                $pet->save();
            });
    }
}
