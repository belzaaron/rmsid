<?php

namespace Belz\RmsId\Commands;

use Illuminate\Console\Command;

class RmsIdCommand extends Command
{
    public $signature = 'rmsid';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
