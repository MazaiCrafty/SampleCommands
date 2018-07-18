<?php

namespace SampleCommands;

class RegisterCommands{

    public static function registerCommands(Main $plugin, array $paths){
        foreach ($paths as $path){
            $plugin->getServer()->getCommandMap()->register($plugin->getName(), new $path($plugin));
        }
    }
}
