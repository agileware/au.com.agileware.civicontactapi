<?php

return array(
  'cca_global_config' => array(
    'group_name' => 'CiviContact Settings',
    'group' => 'cca',
    'name' => 'cca_global_config',
    'type' => 'Boolean',
    'quick_form_type' => 'YesNo',
    'add' => '4.7',
    'is_domain' => 1,
    'is_contact' => 0,
    'html_type' => 'Text',
    'description' => 'If set it as Yes, CiviContact configuration will be same for all users and it can\'t be changed from CiviContact settings.',
    'title' => 'Enable Global Config',
    'help_text' => 'If set it as Yes, CiviContact configuration will be same for all users.',
  ),
  'cca_force_ssl' => array(
    'group_name' => 'CiviContact Settings',
    'group' => 'cca',
    'name' => 'cca_force_ssl',
    'type' => 'Boolean',
    'quick_form_type' => 'YesNo',
    'add' => '4.7',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'If set it as Yes, SSL will be required for all requests from CiviContact to CiviCRM.',
    'title' => 'Force SSL',
    'help_text' => 'If set it as Yes, SSL will be required for all requests from CiviContact to CiviCRM.',
  ),
  'cca_email_to_activity' => array(
    'group_name' => 'CiviContact Settings',
    'group' => 'cca',
    'name' => 'cca_email_to_activity',
    'type' => 'Boolean',
    'quick_form_type' => 'YesNo',
    'add' => '4.7',
    'is_domain' => 1,
    'is_contact' => 0,
    'html_type' => 'Text',
    'description' => '',
    'title' => 'Email to Activity',
    'help_text' => 'If set it as Yes, A new Activity will be created for each email sent from CiviContact.',
  ),
  'cca_contact_tile_click_action' => array(
    'group_name' => 'CiviContact Settings',
    'group' => 'cca',
    'name' => 'cca_contact_tile_click_action',
    'type' => 'String',
    'add' => '4.7',
    'quick_form_type' => 'Select',
    'html_type' => 'Select',
    'is_domain' => 1,
    'is_contact' => 0,
    'default' => 'default',
    'description' => '',
    'title' => 'Favourite Tile Click Action',
    'pseudoconstant' => array(
      'callback' => 'CRM_Civicontact_Form_Settings::getContactTileClickActions',
    ),
    'html_attributes' => array(),
    'help_text' => '',
  ),
  'cca_activity_types' => array(
    'group_name' => 'CiviContact Settings',
    'group' => 'cca',
    'name' => 'cca_activity_types',
    'type' => 'String',
    'add' => '4.7',
    'quick_form_type' => 'Select',
    'html_type' => 'Select',
    'is_domain' => 1,
    'is_contact' => 0,
    'default' => 'default',
    'description' => 'Select all the Activity Types which can be displayed in the "Activities" menu for a Contact.',
    'title' => 'Contact Activity Types',
    'pseudoconstant' => array(
      'callback' => 'CRM_Civicontact_Form_Settings::getActivityTypes',
    ),
    'html_attributes' => array(
      'class' => 'crm-select2',
      'multiple' => 1,
    ),
    'help_text' => '',
  ),
  'cca_profile' => array(
    'group_name' => 'CiviContact Settings',
    'group' => 'cca',
    'name' => 'cca_profile',
    'type' => 'String',
    'add' => '4.7',
    'quick_form_type' => 'Select',
    'html_type' => 'Select',
    'is_domain' => 1,
    'is_contact' => 0,
    'default' => '',
    'description' => 'Select a Profile you want to use on add/edit contact page of CiviContact App.',
    'title' => 'Contact Profile',
    'pseudoconstant' => array(
      'callback' => 'CRM_Civicontact_Form_Settings::getUFGroups',
    ),
    'html_attributes' => array(
      'class' => 'crm-select2',
    ),
    'help_text' => '',
  ),
  'cca_sync_interval' => array(
    'group_name' => 'CiviContact Settings',
    'group' => 'cca',
    'name' => 'cca_sync_interval',
    'type' => 'String',
    'add' => '4.7',
    'quick_form_type' => 'Select',
    'html_type' => 'Select',
    'is_domain' => 1,
    'is_contact' => 0,
    'default' => 'default',
    'description' => '',
    'title' => 'Sync Interval',
    'pseudoconstant' => array(
      'callback' => 'CRM_Civicontact_Form_Settings::getSyncIntervalOptions',
    ),
    'html_attributes' => array(),
    'help_text' => '',
  ),

);
