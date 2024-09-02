<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Redis;

use Barryvdh\DomPDF\Facade\Pdf;

class CreatePDFJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $value;
    /**
     * Create a new job instance.
     */
    public function __construct($value)
    {
        $this->value = $value;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $pdf = Pdf::loadView('pdf.pdf', ['title' => 'Pdf sem fila com '.$this->value.' repetições', 'value' => $this->value])->setPaper('a4', 'landscape');
    }
}
