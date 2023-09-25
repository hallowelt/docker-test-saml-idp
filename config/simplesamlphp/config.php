<?php

include( __DIR__ . '/config.php.dist' );

$customConfig = [
    'auth.adminpassword' => ((getenv('SIMPLESAMLPHP_ADMIN_PASSWORD') != '') ? getenv('SIMPLESAMLPHP_ADMIN_PASSWORD') : 'secret'),
    'secretsalt' => ((getenv('SIMPLESAMLPHP_SECRET_SALT') != '') ? getenv('SIMPLESAMLPHP_SECRET_SALT') : 'defaultsecretsalt'),

    'logging.level' => SimpleSAML\Logger::DEBUG,
    'logging.handler' => 'errorlog',
    'debug' => [
        'saml' => true,
        'backtraces' => true,
        'validatexml' => true,
    ],
    'showerrors' => true,
    'errorreporting' => true,

    'session.cookie.samesite' => null,
    'session.cookie.name' => 'SimpleSAMLSessionIDIdp',
    'session.phpsession.cookiename' => 'PHPSESSIDIDP',
    'session.authtoken.cookiename' => 'SimpleSAMLAuthTokenIdp',

    'enable.saml20-idp' => true,
    'enable.shib13-idp' => true,
];

$config = $customConfig + $config;
