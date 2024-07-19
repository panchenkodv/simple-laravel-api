<?php

namespace App\Listeners;

use App\Events\SubmissionSaved;
use Illuminate\Support\Facades\Log;

class LogSubmissionSaved
{
    public function handle(SubmissionSaved $event)
    {
        $submission = $event->submission;
        Log::info('Submission saved: ', ['name' => $submission->name, 'email' => $submission->email]);
    }
}
