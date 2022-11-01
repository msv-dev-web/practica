<?php

namespace App\Shared\Infrastructure\Mailer;

interface IMailer
{
    public function send(string $message): void;
}