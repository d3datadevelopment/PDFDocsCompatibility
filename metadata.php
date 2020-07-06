<?php

/**
 * See LICENSE file for license details.
 *
 * @copyright (C) D3 Data Development (Inh. Thomas Dartsch)
 * @author        D3 Data Development - Max Buhe <support@shopmodule.com>
 * @link          http://www.oxidmodule.com
 */

use D3\PdfDocumentsCompat\Modules\Application\Model\d3_Order_PDFDocsCompat;
use OxidEsales\Eshop\Application\Model\Order as Order;

/**
 * Metadata version
 */
$sMetadataVersion = '2.0';

$logo = '<img src="https://logos.oxidmodule.com/d3logo.svg" alt="(D3)" style="height:1em;width:1em">';

$sModuleId = 'd3PdfDocumentsCompat';
/**
 * Module information
 */
$aModule = [
    'id'            => $sModuleId,
    'title'         => [
        'de'        => $logo.' PDF-Dokumente Kompatibilitätsschicht',
        'en'        => $logo.' PDF documents compatibility layer',
    ],
    'version'       => '0.1',
    'author'        => 'D&sup3; Data Development (Inh.: Thomas Dartsch)',
    'email'         => 'support@shopmodule.com',
    'url'           => 'http://www.oxidmodule.com/',
    'extend'        => [
        Order::class    => d3_Order_PDFDocsCompat::class
    ],
    'controllers'           => [],
    'templates'             => [],
    'events'                => [],
    'blocks'                => [],
    'settings'              => []
];
