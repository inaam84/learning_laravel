<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Str;

class UserCreateCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:create {count}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creates a new user in the system';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $count = $this->argument('count');
        $bar = $this->output->createProgressBar($count);

        for($i = 1; $i <= $count; $i++)
        {
            $name = Str::random(8);
            $email = $name . '@gmail.com';
            $password = Str::random(8);
            User::create([
                'email' => $email,
                'name' => $name,
                'password' => bcrypt($password),
            ]);
            $bar->advance();
        }
        $bar->finish();

        $this->info('Successfully created ' . $count . ' users.');
    }
}
