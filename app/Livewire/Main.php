<?php

namespace App\Livewire;

use App\Models\Document;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class Main extends Component
{
    public function dispatchManyJobs()
    {
        Log::info('Dispatching many jobs');
        \App\Jobs\DispatchManyMoreJob::dispatch();
    }
}
