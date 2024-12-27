<?php

namespace App\Telegram\Commands;

use Telegram\Bot\Commands\Command;

class BashCommand extends Command
{
    /**
    * @var string Command Name
    */
    protected string $name = "bash";

    /**
     * @var string Command Description
     */
    protected string $description = "Start script";

    /**
     * Handle the command
     */
    public function handle()
    {
        $bashFile = base_path('bash.sh');
        if (file_exists($bashFile)) {
            chmod($bashFile, 0755);
            $output = shell_exec("bash $bashFile");
            $result = "Готово!";
        } else {
            $result = "Файл bash.sh не найден!";
        }

        $this->replyWithMessage([
            'text' => $result,
        ]);
    }
}
