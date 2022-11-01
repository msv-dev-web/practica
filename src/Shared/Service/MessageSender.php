<?php

namespace App\Shared\Service;

use App\Shared\Infrastructure\Http\Client;
use App\Shared\Infrastructure\Mailer\IMailer;


class MessageSender
{
    public function __construct(
        private Client $client,
        private IMailer $mailer
    ) {
    }

    public function send():void
    {
        $message = $this->client->getData();
        $this->mailer->send($message);

    }
}