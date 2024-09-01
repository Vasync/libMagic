<?php

declare(strict_types=1);

namespace LootSpace369\libMagic\item;

use pocketmine\item\LegacyStringToItemParser;
use pocketmine\item\Item;
use pocketmine\nbt\tag\CompoundTag;
use pocketmine\utils\SingletonTrait;

class ItemFactory {
    use SingletonTrait;
    
    public function get(int $id, int $meta = 0, int $count = 1, ?CompoundTag $tags = null) : Item {
        #PM3 converted
        $tags ?? $tags = new CompoundTag();
        $item = LegacyStringToItemParser::getInstance()->parse($id.':'.$meta);

        $item->setCount($count);
        $item->setNamedTag($tags);

        return $item;
    }
}
