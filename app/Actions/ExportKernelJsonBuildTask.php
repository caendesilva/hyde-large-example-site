<?php

namespace App\Actions;

use Hyde\Hyde;
use Hyde\Foundation\HydeKernel;
use Hyde\Framework\Features\BuildTasks\PostBuildTask;
use function json_encode;
use function file_put_contents;

class ExportKernelJsonBuildTask extends PostBuildTask
{
    public function handle(): void
    {
        file_put_contents(Hyde::sitePath('hyde.json'), json_encode(HydeKernel::getInstance(), JSON_PRETTY_PRINT));
    }
}
