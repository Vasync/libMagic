<?php

declare(strict_types=1);

namespace LootSpace369\libMagic;

use LootSpace369\libMagic\item\ItemFactory;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase {

    public function onLoad(): void {
        ItemFactory::setInstance(new ItemFactory());
    }
}
