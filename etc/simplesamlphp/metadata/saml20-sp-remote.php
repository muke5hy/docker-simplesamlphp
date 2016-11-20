<?php
$metadata['http://cjoc.example.com:9090/securityRealm/finishLogin'] = array (
  'AssertionConsumerService' => 'http://cjoc.example.com:9090/securityRealm/finishLogin',
  'SingleLogoutService' => 'http://cjoc.example.com:9090/securityRealm/logOut',
  'authproc' => array(
    /* add schacHomeOrganization attribute */
    10 => array(
        'class' => 'core:AttributeAdd',
        'schacHomeOrganization' => 'university.example.org',
    ),
    /* add the 'urn' prefix to all supported attributes (if available from authentication source) */
    90 => array(
      'class' => 'core:AttributeMap',
      'uid' => 'urn:mace:dir:attribute-def:uid',
      'sn' => 'urn:mace:dir:attribute-def:sn',
      'givenName' => 'urn:mace:dir:attribute-def:givenName',
      'cn' => 'urn:mace:dir:attribute-def:cn',
      'displayName' => 'urn:mace:dir:attribute-def:displayName',
      'mail' => 'urn:mace:dir:attribute-def:mail',
      'groups' => 'urn:mace:dir:attribute-def:groups',
    ),
  ),
);
