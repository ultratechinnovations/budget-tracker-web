<?php

namespace App\Jobs;

use App\Models\User;
use Exception;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use MBarlow\Megaphone\Types\Important;

class BalanceAlertJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct(public User $user)
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        try{
            if($this->user->expenses->sum('amount') >= $this->user->incomes->sum('amount')){
                // send notification to user
                Log::info('Balance Alert: User ID: '.$this->user->id.' at '.now());

                $notification = new Important(
                    'Low balance', // Notification Title
                    'Hey you need to check your pocket'// Optional: URL. Megaphone will add a link to this URL within the Notification display.// Optional: Link Text. The text that will be shown on the link button.
                );

                $this->user->notify($notification);
            }
        }catch (Exception $e){
            Log::error($e->getMessage());
        }
    }
}
