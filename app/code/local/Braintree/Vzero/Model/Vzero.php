<?php
/**
* Our test CC module adapter
*/
class Braintree_Vzero_Model_Vzero extends Mage_Payment_Model_Method_Abstract
{

  protected $_code = 'vzero';

  protected $_formBlockType = 'vzero/form';
  protected $_infoBlockType = 'vzero/info';

  /**
   * Here you will need to implement authorize, capture and void public methods
   *
   * @see examples of transaction specific public methods such as
   * authorize, capture and void in Mage_Paygate_Model_Authorizenet
   */

 /**
  * Assign data to info model instance
  *
  * @param   mixed $data
  * @return  Mage_Payment_Model_Method_Checkmo
  */
 public function assignData($data)
 {
    if (!($data instanceof Varien_Object)) {
        $data = new Varien_Object($data);
    }
    //$info = $this->getInfoInstance();
    Mage::log('-----assignData----');

//  Mage::log('Nonce='.$_POST[]);
    foreach (Mage::app()->getRequest()->getPost() as $valor){
      foreach ($valor as $valor2){
        Mage::log("a. ".$valor2);
      }
    }

    return $this;
 }

  public function validate()
    {
        //parent::validate();
        Mage::log('-----Validate----');

        foreach (Mage::app()->getRequest()->getPost() as $valor){
          Mage::log($valor);
        }

        return $this;
    }

}
?>
