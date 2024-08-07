<?php

declare(strict_types=1);

namespace LootSpace369\libMagic;

use pocketmine\plugin\PluginBase;
use pocketmine\resourcepacks\ZippedResourcePack;
use Symfony\Component\Filesystem\Path;

final class RegisterResourcePack {
  
    public static function register(PluginBase $plugin, string $path, string $packName) {
        $rpManager = $plugin->getServer()->getResourcePackManager();
	$rpManager->setResourceStack($rpManager->getResourceStack() + [new ZippedResourcePack(Path::join($this->getDataFolder(), "Boss.mcpack"))]);
	($serverForceResources = new \ReflectionProperty($rpManager, "serverForceResources"))->setAccessible(true);
	$serverForceResources->setValue($rpManager, true);
    }
}
