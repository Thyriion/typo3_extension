<?php
defined('TYPO3') or die();

call_user_func(function () {
    $extensionKey = 't3basis';

    /**
     * Default TypoScript
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $extensionKey,
        'Configuration/TypoScript',
        'T3 Basis Template'
    );
});
