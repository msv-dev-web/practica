<?php

namespace App\Tests\Functional;

use PHPUnit\Framework\TestCase;

use App\Shared\Infrastructure\Http\Client;
use App\Shared\Infrastructure\Mailer\GmailMailer;
use App\Shared\Service\MessageSender;

class MessageSenderTest extends TestCase
{
    public function testThatEmailNotificationIsSentUsingStub()
    {
        $mailer = new GmailMailer();
        $clientStub = $this->createStub(Client::class);
        $clientStub->method('getData')->willReturn('Сообщение по умолчанию');

        $service = new MessageSender($clientStub, $mailer);
        $service->send();
    }

    public function testThatEmailNotificationIsSentUsingMock()
    {
        $mailer = $this->createMock(GmailMailer::class);
        $mailer->expects($this->once())->method('send');
        $client = new Client();

        $sportMetric = new MessageSender($client, $mailer);
        $sportMetric->send();
    }

}