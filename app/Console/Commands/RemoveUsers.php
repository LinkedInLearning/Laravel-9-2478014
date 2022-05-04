<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;

class RemoveUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'remove:user {user}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Remove a user';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $user = User::find($this->argument('user'));
        if (!empty($user)) {
            $user->delete();
        }

        return 0;
    }
}
