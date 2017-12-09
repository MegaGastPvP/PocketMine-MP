<?php

declare(strict_types=1);

namespace pocketmine\entity;

use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\item\Item as ItemItem;
use pocketmine\item\ItemFactory;
use pocketmine\Player;

class Skeleton extends Monster{

	const NETWORK_ID = self::SKELETON;



	public $width = 1;

	public $height = 2;



	public function getName() : string{

		return "Skeleton";

	}



	public function getDrops() : array{

		$drops = [

			ItemFactory::get(ItemItem::BONE, 0, mt_rand(0, 2))

		];
		if(mt_rand(0, 199) < 5){
			switch(mt_rand(0, 2)){
				case 0:
					$drops[] = ItemFactory::get(ItemItem::IRON_INGOT, 0, 1);
					break;
				case 1:
					$drops[] = ItemFactory::get(ItemItem::CARROT, 0, 1);
					break;
				case 2:
					$drops[] = ItemFactory::get(ItemItem::POTATO, 0, 1);
					break;
			}
		}

		return $drops;
	}
}
