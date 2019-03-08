<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Mail;
use Log;

class SendEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;


    protected $_data;
    protected $_type;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($type, $data)
    {
        $this->_type = $type;
        $this->_data = $data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(Mail $mail)
    {
        Log::info('Job handle');

        echo '1';

        sleep(1000000);
        Mail::raw('123',function($message){
            $message->to('admin@zqiqi.cn')->subject('456');
        });

        Log::info('Job finished');

    }

}
