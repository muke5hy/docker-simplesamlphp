<?php
/* [kuisathaverat] Configuring the IdP */
$metadata['SimpleSAMLAuthExampleIdpRemote'] = array(
  'host' => '__DEFAULT__',

  'privatekey' => 'server.pem',
  'certificate' => 'server.crt',

  'auth' => 'example-userpass',
  'UIInfo' => array(
    'DisplayName' => array(
    'en' => 'Simple SAML Auth Service',
  ),
  'Description' => array(
    'en' => 'An Simple IdP',
  ),
  'Keywords' => array(
    'en' => array('auth','simple','saml'),
  ),
  'Logo' => array(
    array(
     'url' => 'https://www.cloudbees.com/sites/all/themes/custom/cb_2016rev2/images/cloudbees-logo.png',
     'height' => 51,
     'width' => 107,
    ),
  ),
),
);
