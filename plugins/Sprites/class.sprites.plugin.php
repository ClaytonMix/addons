<?php if (!defined('APPLICATION')) exit();

/**
 * Sprites Plugin
 * 
 * @author Mark O'Sullivan <mark@vanillaforums.com>
 * @copyright 2003 Vanilla Forums, Inc
 * @license http://www.opensource.org/licenses/gpl-2.0.php GPL
 */

class SpritesPlugin extends Gdn_Plugin {

   public function base_render_before($sender) {
      if ($sender->MasterView == '' || $sender->MasterView == 'default')
         $sender->addCssFile('sprites.css', 'plugins/Sprites');
   }

   public function setup() {}

   public function structure() {}

}
