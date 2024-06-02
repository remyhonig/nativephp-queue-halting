<?php

namespace App\Livewire;

use App\Models\Document;
use Illuminate\Support\Facades\Log;
use Livewire\Attributes\Computed;
use Livewire\Component;

class Main extends Component
{
    #[Computed]
    public function documents()
    {
        return Document::query()->get();
    }

    public function dispatchManyJobs()
    {
        Log::info('Dispatching many jobs');
        \App\Jobs\DispatchManyMoreJob::dispatch();
    }
}
