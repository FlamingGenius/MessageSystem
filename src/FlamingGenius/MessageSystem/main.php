<?php

namespace FlamingGenius\MessageSystem;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\utils\Config;
use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\utils\TextFormat;


class main extends PluginBase{

 public function onEnable(){
  $this->saveDefaultConfig();
 
 }

 public function onCommand(CommandSender $sender, Command $command, $label, array $args){
  $cmd = $this->command->getName();
  if(strtolower($cmd) == "ms"){
   if($args[0] == "broadcast"){
    
   }
  }
 }
 
 

}

?>
