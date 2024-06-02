<div>
    <h1>Documents and counts</h1>
    <ul>
        @foreach($this->documents as $document)
            <li>{{ $document->id }} - {{ $document->count }}</li>
        @endforeach
    </ul>
    <button wire:click="dispatchManyJobs">Dispatch Many Jobs</button>
</div>
