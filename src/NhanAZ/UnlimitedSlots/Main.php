<?php

declare(strict_types=1);

namespace NhanAZ\UnlimitedSlots;

use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\event\server\QueryRegenerateEvent;

class Main extends PluginBase implements Listener {

	protected function onEnable(): void {
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}

	public function onQueryRegenerate(QueryRegenerateEvent $event): void {
		$onlinePlayers = count($this->getServer()->getOnlinePlayers());
		$event->getQueryInfo()->setMaxPlayerCount(++$onlinePlayers);
	}
}
