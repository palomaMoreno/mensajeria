<?php

/**
 * ContactoTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class ContactoTable extends PluginsfGuardUserTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object ContactoTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Contacto');
    }
    
    public function getActivas(){
         $query = Doctrine_Core::getTable('sfGuardUser')->createQuery('sf_guard_user')->where('sf_guard_user.is_active = true')->execute();
         return $query;
    }
    
}
