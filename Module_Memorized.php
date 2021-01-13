<?php
namespace GDO\Memorized;

use GDO\Core\GDO_Module;
use GDO\DB\Cache;

/**
 * If you are here for the Memorized challenge of wechall.net: you are close.
 * @author gizmore
 */
final class Module_Memorized extends GDO_Module
{
    public $module_priority = 110;
    
    public function onInit()
    {
        Cache::set('memorized_solution', $this->getSolution());
    }
    
    private function getSolution()
    {
        $path = $this->filePath('password.php');
        return require($path);
    }
    
}
