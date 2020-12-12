<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(50)->create();
        $threads = \App\Models\Thread::factory(50)->create();

        foreach ($threads as $thread) {
            \App\Models\Reply::factory(10)->create([
                'thread_id' => $thread->id,
                'user_id' => $thread->user_id
            ]);
        }
    }
}
