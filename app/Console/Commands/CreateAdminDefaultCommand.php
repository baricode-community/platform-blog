<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CreateAdminDefaultCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'baricode:create-admin-default';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create Admin Default Command';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Creating Admin Default Command...');

        \App\Models\User::firstOrCreate(
            ['email' => 'blog@baricode.org'],
            [
                'name' => 'Baricode Admin',
                'password' => 'password',
            ],
        );

        $this->info('Admin Default Command Created Successfully!');
    }
}
