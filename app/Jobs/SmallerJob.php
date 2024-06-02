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

    /**
     * Create a new job instance.
     */
    protected $documentId;

    /**
     * Create a new job instance.
     *
     * @param int $documentId
     */
    public function __construct(int $documentId)
    {
        $this->documentId = $documentId;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $document = \App\Models\Document::find($this->documentId);
        Log::info('SmallerJob: ' . $this->documentId . ' @ ' . $document->count);
        $document->count = $document->count + 1;
        $document->save();
    }
}
