<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cache;

class ClearCache extends Command
{

    protected $signature = 'ncfu:cache';

    public function handle()
    {

        $this->execShellWithPrettyPrint('composer dump-autoload');
        $this->execShellWithPrettyPrint('php artisan clear');
        $this->execShellWithPrettyPrint('php artisan config:clear');
        $this->execShellWithPrettyPrint('php artisan view:clear');
        $this->execShellWithPrettyPrint('php artisan route:clear');


        if (App::environment() == 'local') {

            $this->execShellWithPrettyPrint('php artisan clear-compiled');
            $this->execShellWithPrettyPrint('php artisan ide-helper:generate');
            $this->execShellWithPrettyPrint('php artisan ide-helper:models -W --reset');
        }

        Cache::flush();


        return "Кэш очищен.";
    }

    /**
     * Exec shell with pretty print.
     *
     * @param  string  $command
     *
     * @return mixed
     */
    public function execShellWithPrettyPrint($command)
    {
        $this->info('---');
        $this->info($command);
        $output = shell_exec($command);
        $this->info($output);
        $this->info('---');
    }
}
