<?php
return [
    'BE' => [
        'debug' => false,
        'explicitADmode' => 'explicitAllow',
        'installToolPassword' => '$P$CtZQ6GLEk2gfShBsZWzatn5It2/heR.',
        'loginSecurityLevel' => 'rsa',
        'versionNumberInFilename' => '0',
    ],
    'DB' => [
        'database' => 'coderdojo_01',
        'host' => 'localhost',
        'password' => '!7d#1kIV',
        'socket' => '',
        'username' => 'coderdojo_01',
    ],
    'EXT' => [
        'extConf' => [
            'builder' => 'a:0:{}',
            'cooluri' => 'a:3:{s:6:"LANGID";s:1:"L";s:7:"XMLPATH";s:10:"typo3conf/";s:11:"MULTIDOMAIN";s:1:"0";}',
            'extension_builder' => 'a:3:{s:15:"enableRoundtrip";s:1:"0";s:15:"backupExtension";s:1:"0";s:9:"backupDir";s:35:"uploads/tx_extensionbuilder/backups";}',
            'fluidcontent' => 'a:2:{s:9:"iconWidth";s:3:"24m";s:10:"iconHeight";s:3:"24m";}',
            'fluidpages' => 'a:2:{s:8:"autoload";s:1:"1";s:8:"doktypes";s:0:"";}',
            'flux' => 'a:3:{s:9:"debugMode";s:1:"0";s:7:"compact";s:1:"0";s:12:"handleErrors";s:1:"0";}',
            'formhandler' => 'a:0:{}',
            'rsaauth' => 'a:1:{s:18:"temporaryDirectory";s:0:"";}',
            'saltedpasswords' => 'a:2:{s:3:"BE.";a:4:{s:21:"saltedPWHashingMethod";s:41:"TYPO3\\CMS\\Saltedpasswords\\Salt\\PhpassSalt";s:11:"forceSalted";i:0;s:15:"onlyAuthService";i:0;s:12:"updatePasswd";i:1;}s:3:"FE.";a:5:{s:7:"enabled";i:1;s:21:"saltedPWHashingMethod";s:41:"TYPO3\\CMS\\Saltedpasswords\\Salt\\PhpassSalt";s:11:"forceSalted";i:0;s:15:"onlyAuthService";i:0;s:12:"updatePasswd";i:1;}}',
            'scheduler' => 'a:4:{s:11:"maxLifetime";s:4:"1440";s:11:"enableBELog";s:1:"1";s:15:"showSampleTasks";s:1:"1";s:11:"useAtdaemon";s:1:"0";}',
            'sourceopt' => 'a:0:{}',
            'static_info_tables' => 'a:1:{s:13:"enableManager";s:1:"0";}',
            'static_info_tables_de' => 'a:0:{}',
            'tw_antibot' => 'a:0:{}',
            'tw_coderdojo' => 'a:0:{}',
            'tw_coderdojo_ft3' => 'a:0:{}',
            'tw_upsync' => 'a:5:{s:7:"profile";s:9:"coderdojo";s:6:"upsync";s:21:"/usr/local/bin/upsync";s:7:"verbose";s:1:"1";s:5:"links";s:1:"1";s:3:"dry";s:1:"0";}',
            'vhs' => 'a:0:{}',
        ],
    ],
    'FE' => [
        'debug' => false,
        'loginSecurityLevel' => 'rsa',
    ],
    'GFX' => [
        'colorspace' => 'RGB',
        'im' => 1,
        'im_mask_temp_ext_gif' => 1,
        'im_path' => '/usr/bin/',
        'im_path_lzw' => '/usr/bin/',
        'im_v5effects' => -1,
        'im_version_5' => 'gm',
        'image_processing' => 1,
        'jpg_quality' => '80',
    ],
    'INSTALL' => [
        'wizardDone' => [
            'TYPO3\CMS\Install\Updates\BackendUserStartModuleUpdate' => 1,
            'TYPO3\CMS\Install\Updates\ContentTypesToTextMediaUpdate' => 1,
            'TYPO3\CMS\Install\Updates\FileListIsStartModuleUpdate' => 1,
            'TYPO3\CMS\Install\Updates\FilesReplacePermissionUpdate' => 1,
            'TYPO3\CMS\Install\Updates\LanguageIsoCodeUpdate' => 1,
            'TYPO3\CMS\Install\Updates\MigrateMediaToAssetsForTextMediaCe' => 1,
            'TYPO3\CMS\Install\Updates\MigrateShortcutUrlsAgainUpdate' => 1,
            'TYPO3\CMS\Install\Updates\PageShortcutParentUpdate' => 1,
            'TYPO3\CMS\Install\Updates\ProcessedFileChecksumUpdate' => 1,
            'TYPO3\CMS\Install\Updates\TableFlexFormToTtContentFieldsUpdate' => 1,
            'TYPO3\CMS\Rtehtmlarea\Hook\Install\DeprecatedRteProperties' => 1,
            'TYPO3\CMS\Rtehtmlarea\Hook\Install\RteAcronymButtonRenamedToAbbreviation' => 1,
        ],
    ],
    'MAIL' => [
        'transport_sendmail_command' => '/usr/sbin/sendmail -t -i ',
    ],
    'SYS' => [
        'caching' => [
            'cacheConfigurations' => [
                'extbase_object' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                    'frontend' => 'TYPO3\\CMS\\Core\\Cache\\Frontend\\VariableFrontend',
                    'groups' => [
                        'system',
                    ],
                    'options' => [
                        'defaultLifetime' => 0,
                    ],
                ],
            ],
        ],
        'clearCacheSystem' => false,
        'devIPmask' => '',
        'displayErrors' => 0,
        'enableDeprecationLog' => false,
        'encryptionKey' => '2784729ddfbe359838f30f4d883d435ef6df6790143544996191a544928bf6c54bbdf9440ae4a697b6eecf2eea950626',
        'isInitialDatabaseImportDone' => true,
        'isInitialInstallationInProgress' => false,
        'phpTimeZone' => '',
        'sitename' => 'CoderDojo Nürnberg',
        'sqlDebug' => 0,
        'systemLogLevel' => 2,
        't3lib_cs_convMethod' => 'mbstring',
        't3lib_cs_utils' => 'mbstring',
    ],
];
