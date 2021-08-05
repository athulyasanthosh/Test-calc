<?php

namespace Athulyasanthosh\TestCalc\Commands;

use Illuminate\Console\Command;

class TestCalcCommand extends Command
{
    public $signature = 'test-calc';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
