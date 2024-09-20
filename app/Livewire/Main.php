<?php

namespace App\Livewire;

use App\Jobs\SmallerJob;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class Main extends Component
{
    public function dispatchManyJobs()
    {
        Log::info('Dispatching many jobs');
        for ($i = 0; $i < 1000; $i++) {
            SmallerJob::dispatch($i);
        }
    }
}
