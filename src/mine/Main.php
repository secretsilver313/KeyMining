<?php
    
namespace mine;
    
use pocketmine\entity\Effect;
use pocketmine\entity\EffectInstance;
use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\level\Position;
use pocketmine\math\Vector3;
use pocketmine\command\CommandExecutor;
use pocketmine\utils\TextFormat as TF;
use pocketmine\Player;
use pocketmine\level\sound\PopSound;
use pocketmine\event\Listeners;
use pocketmine\utils\TextFormat;
use pocketmine\scheduler\Task;
use pocketmine\level\Level;
use pocketmine\Server;
use pocketmine\event\player\PlayerExhaustEvent;
use pocketmine\event\player\PlayerItemConsumeEvent;
use pocketmine\event\player\PlayerConsumeEvent;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\event\player\PlayerItemHeldEvent;
use pocketmine\event\entity\ProjectileHitEvent;
use pocketmine\tile\Tile;
use pocketmine\event\block\BlockBreakEvent;
use pocketmine\event\player\PlayerJoinEvent;
use onebone\economyapi\EconomyAPI;

class Main extends PluginBase{
    
    
    public function onBlockBreak(BlockBreakEvent $event) {
        $player = $event->getPlayer();
        $block = $event->getBlock();
        $p = $player->getName();
        $keycommon = ("common");
        $keyuncommon = ("uncommon");
        $keymythic = ("mythic");
        $number = (25);
        if(mt_rand(1, 1500) === $number) {
           $player->sendMessage("§7(§a!§7) §aYou found a $keycommon key");
           $this->getServer()->dispatchCommand(new \pocketmine\command\ConsoleCommandSender(), "key $keycommon 1 $p");
        }
        if(mt_rand(1, 2300) === $number) {
           $player->sendMessage("§7(§a!§7) §aYou found a $keyuncommon key");
           $this->getServer()->dispatchCommand(new \pocketmine\command\ConsoleCommandSender(), "key $keyuncommon 1 $p");
        }
        if(mt_rand(1, 7500) === $number) {
           $player->sendMessage("§7(§a!§7) §aYou found a $keymythic key");
           $this->getServer()->dispatchCommand(new \pocketmine\command\ConsoleCommandSender(), "key $keymythic 1 $p");
        }
    }
}
