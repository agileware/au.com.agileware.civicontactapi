<?php
use CRM_Civicontact_ExtensionUtil as E;

class CRM_Civicontact_BAO_CCAGroupContactsLog extends CRM_Civicontact_DAO_CCAGroupContactsLog {

  /**
   * Create a new CCAGroupContactsLog based on array-data
   *
   * @param array $params key-value pairs
   * @return CRM_Civicontact_DAO_CCAGroupContactsLog|NULL
   *

   */

   /*
  public static function create($params) {
    $className = 'CRM_Civicontact_DAO_CCAGroupContactsLog';
    $entityName = 'CCAGroupContactsLog';
    $hook = empty($params['id']) ? 'create' : 'edit';

    CRM_Utils_Hook::pre($hook, $entityName, CRM_Utils_Array::value('id', $params), $params);
    $instance = new $className();
    $instance->copyValues($params);
    $instance->save();
    CRM_Utils_Hook::post($hook, $entityName, $instance->id, $instance);

    return $instance;
  } */

}
