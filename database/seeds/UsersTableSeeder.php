<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
          'name' => 'Administrator',
          'email' => 'administrator@gmail.com',
          'password' => bcrypt('secret'),
          'email_verified_at' => now(),
          'remember_token' => str_random(10),
        ]);
        $user->image()->save(factory(App\Image::class)->make());
        
        $stores = factory(App\Store::class, 10)->make();
        $user->stores()->saveMany($stores);

        $stores->each(function ($store) {
            $store->image()->save(factory(App\Image::class)->make());
            $items = factory(App\Item::class, 10)->make();
            $store->items()->saveMany($items);
            $items->each(function ($item) {
                $item->image()->save(factory(App\Image::class)->make());
            });
        });
    }
}
