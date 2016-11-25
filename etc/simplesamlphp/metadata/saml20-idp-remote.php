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
     'url' => 'https://jenkins.io/images/226px-Jenkins_logo.svg.png',
     'height' => 51
    ),
  ),
),
);
