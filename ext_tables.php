<?php

if (!defined('TYPO3')) {
    die('Access denied.');
}

use TYPO3\CMS\Core\DataHandling\PageDoktypeRegistry;
use TYPO3\CMS\Core\Utility\GeneralUtility;

call_user_func(
    static function () {
        // Register new page types for section
        $sectionDocType = 369;
        $dokTypeRegistry = GeneralUtility::makeInstance(PageDoktypeRegistry::class);
        $dokTypeRegistry->add(
            $sectionDocType,
            [
                'type' => 'web',
                'allowedTables' => '*',
            ]
        );
    }
);
