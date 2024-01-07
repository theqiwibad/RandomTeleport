<?php

use pocketmine\plugin\PluginBase;
use RandomTeleport\command\RandomTeleportCommand;

class RandomTeleport extends PluginBase
{
    private static self $instance;

    public function onEnable() : void
    {
        self::$instance = $this;
        $this->getServer()->getCommandMap()->register("", new RandomTeleportCommand());
    }

    /**
     * @return $this
     */
    public static function getInstance() : self
    {
        return self::$instance;
    }
}
