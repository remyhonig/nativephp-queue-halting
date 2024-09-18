<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class DispatchManyMoreJob implements ShouldQueue
{
    use Queueable;

    public function handle(): void
    {
        for ($i = 0; $i < 1000; $i++) {
            SmallerJob::dispatch($i);
        }
    }
}
