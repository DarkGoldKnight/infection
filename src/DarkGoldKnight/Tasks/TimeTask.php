<?php
namespace  DarkGoldKnight\infection\Tasks;
use pocketmine\Player;
use pocketmine\Server;
use DarkGoldKnight\infection\Main;
use pocketmine\scheduler\Task;
use pocketmine\scheduler\TaskHandler;
use pocketmine\scheduler\PluginTask;
class WaitTask extends PluginTask{
    public function __construct(Main $plugin){
        parent::__construct($plugin);
        $this->plugin = $plugin;
        $this->waitTime = 30;
    }
    public function onRun($currentTick){
    }
}
