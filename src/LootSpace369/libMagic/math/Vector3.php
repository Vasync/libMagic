<?php

declare(strict_types=1);

namespace LootSpace369\libMagic\math;

use pocketmine\math\Vector3 as Vector;

class Vector3 extends Vector {

    /**
  	 * @return a Vector3 instance
  	 */
    public function asVector3() : Vector3 {
      return new Vector3($this->x, $this->y, $this->z);
    }
}
