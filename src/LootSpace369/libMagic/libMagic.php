<?php

declare(strict_types=1);

namespace LootSpace369\libMagic;

use pocketmine\plugin\PluginBase;
use LootSpace369\libMagic\pack\RegisterResourcePack;
use LootSpace369\libMagic\math\TopLeader;

final class libMagic {
    
    public static function __construct(private PluginBase $plugin) {
    }

    public function registerResourcePack(string $path, string $name): void {
        RegisterResourcePack::register($this->plugin, $path, $name);
    }

    public function getTopLeader(array $top): array {
        return TopLeader::calculate($top);
    }
}
