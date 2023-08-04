<?php

namespace Hasob\FoundationCore\Events;

use Hasob\FoundationCore\Models\PaymentDetail;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class PaymentDetailDeleted
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $paymentDetail;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(PaymentDetail $paymentDetail)
    {
        $this->paymentDetail = $paymentDetail;
    }

}
