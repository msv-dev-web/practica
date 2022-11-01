<?php

namespace App\Shared\Infrastructure\Mailer;

class GmailMailer implements IMailer
{
    public function send(string $message): void
    {
        var_dump($message);
//        mail('test@gmail.com', 'Subject', $message);
    }
}