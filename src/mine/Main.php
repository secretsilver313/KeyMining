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
use pocketmine\event\Listener;
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
use pocketmine\block\BlockFactory;
use pocketmine\block\Stone;
use onebone\economyapi\EconomyAPI;

class Main extends PluginBase implements Listener{
    
    public function onEnable() {
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }
    
    
    public function onBlockBreak(BlockBreakEvent $event) {
        $player = $event->getPlayer();
        $stone = BlockFactory::get(STONE);
        $block = $event->getBlock();
        $p = $player->getName();
        $keycommon = "common";
        $keyuncommon = "uncommon";
        $keymythic = "mythic";
        $number = 25;
        if ($block == $stone) {
        if(mt_rand(1, 30) === $number) {
           $player->sendMessage("§7(§a!§7) §aYou found an Iron key");
           $this->getServer()->dispatchCommand(new \pocketmine\command\ConsoleCommandSender(), "key Iron 1 $p");
        }
        if(mt_rand(1, 2000) === $number) {
           $player->sendMessage("§7(§a!§7) §aYou found a Gold key");
           $this->getServer()->dispatchCommand(new \pocketmine\command\ConsoleCommandSender(), "key Gold 1 $p");
        }
        if(mt_rand(1, 3000) === $number) {
           $player->sendMessage("§7(§a!§7) §aYou found a Diamond key");
           $this->getServer()->dispatchCommand(new \pocketmine\command\ConsoleCommandSender(), "key Diamond 1 $p");
        }
        }
    }
}
