<?php

namespace SampleCommands;

use pocketmine\plugin\PluginBase;

class Main extends PluginBase{

    public function onEnable(): void{
        RegisterCommands::registerCommands($this, [
            Sample1::class,
            Sample2::class
        ]);
    }
}
