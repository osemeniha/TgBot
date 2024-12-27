<?php

namespace App\Telegram\Commands;

use Telegram\Bot\Commands\Command;
use Telegram\Bot\Actions;

class HelloCommand extends Command
{
    /**
    * @var string Command Name
    */
    protected string $name = "hello";

    /**
     * @var string Command Description
     */
    protected string $description = "Say hello";

    /**
     * Handle the command
     */
    public function handle()
    {
        $this->replyWithMessage(['text' => 'Привет, я бот!']);
        $this->replyWithChatAction(['action' => Actions::TYPING]);
    }
}
