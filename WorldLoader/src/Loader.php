<?php
use pocketmine\plugin\PluginBase;
class Loader extends PluginBase{
  public function onEnable(){
    $wlst = [];
    foreach(glob($this->getServer()->getDataPath(). "worlds/*") as $w){
      if(is_dir($w)){
        $wrld = basename($w);
        $this->getServer()->getLogger()->info(/pocketmine/utils/TextFormat::BLUE . "Loading " . /pocketmine/utils/TextFormat::YELLOW . $wrld);
      }
    }
  }
}
