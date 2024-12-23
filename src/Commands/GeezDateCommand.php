<?php

namespace GeezDate\GeezDate\Commands;

use Illuminate\Console\Command;

class GeezDateCommand extends Command
{
    public $signature = 'geezdate';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
