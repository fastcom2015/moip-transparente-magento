<?php
class MOIP_Transparente_Block_Info_Tef extends Mage_Payment_Block_Info
{
    protected function _construct()
    {
        parent::_construct();
        $this->setTemplate('MOIP/transparente/info/tef.phtml');
    }
}
