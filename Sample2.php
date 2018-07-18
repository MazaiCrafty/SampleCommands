<?php

namespace SampleCommands;

use pocketmine\command\CommandSender;
use pocketmine\command\PluginCommand;

class Sample2 extends PluginCommand{

    public function __construct(Main $plugin){
        parent::__construct("sample2", $plugin);
    }

    public function execute(CommandSender $sender, string $label, array $args): bool{
        $sender->sendMessage("Sample2");
        return true;
    }
}
