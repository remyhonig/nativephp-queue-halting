<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class SmallerJob implements ShouldQueue
{
    use Queueable;

    protected $number;

    public function __construct(int $number)
    {
        $this->number = $number;
    }

    public function handle(): void
    {
        Log::info('SmallerJob: ' . $this->number);
    }
}
