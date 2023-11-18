<?php

declare(strict_types=1);

namespace blusterys\personaskin;

use pocketmine\network\mcpe\convert\TypeConverter;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase {
	protected function onEnable(): void {
		TypeConverter::getInstance()->setSkinAdapter(new PersonaSkinAdapter());
	}
}