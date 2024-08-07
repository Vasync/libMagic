<?php

declare(strict_types=1);

namespace LootSpace369\libMagic;

use pocketmine\resourcepacks\ZippedResourcePack;
use Symfony\Component\Filesystem\Path;

final class RegisterResourcePack {
  
    public static function register(string $path, string $packName) {
        $rpManager = $this->getServer()->getResourcePackManager();
		$rpManager->setResourceStack($rpManager->getResourceStack() + [new ZippedResourcePack(Path::join($path, $packName))]);
		($serverForceResources = new \ReflectionProperty($rpManager, "serverForceResources"))->setAccessible(true);
		$serverForceResources->setValue($rpManager, true);
    }
}
