<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class sendEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-emails';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send email to the users';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
    }
}
