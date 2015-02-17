<?php

require_once(Mage::getBaseDir('lib').'/Braintree/lib/Braintree.php');

Braintree_Configuration::environment('sandbox');
Braintree_Configuration::merchantId('ffdqc9fyffn7yn2j');
Braintree_Configuration::publicKey('qj65nndbnn6qyjkp');
Braintree_Configuration::privateKey('a3de3bb7dddf68ed3c33f4eb6d9579ca');

class Braintree_Vzero_Block_Form extends Mage_Payment_Block_Form
{
  protected function _construct()
    {
        parent::_construct();
        $this->setTemplate('vzero/form.phtml');
    }

    protected function _getConfig()
    {
        return Mage::getSingleton('payment/config');
    }

    public function getClientToken()
    {
        $clientToken = Braintree_ClientToken::generate(array());
        $this->setData('clientToken', $clientToken);
        return $clientToken;
    }
}
