<?php

/**
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * https://www.d3data.de
 *
 * @copyright (C) D3 Data Development (Inh. Thomas Dartsch)
 * @author    D3 Data Development - Daniel Seifert <info@shopmodule.com>
 * @link      https://www.oxidmodule.com
 */

declare(strict_types=1);

$sMetadataVersion = '2.1';

$sModuleId = 'd3moduleid';
$logo = '<img src="https://logos.oxidmodule.com/d3logo.svg" alt="(D3)" style="height:1em;width:1em">';

/**
 * Module information
 */
$aModule = [
    'id'          => $sModuleId,
    'title'       => $logo.' Module Name',
    'description' => [
        'de' => '',
        'en' => '',
    ],
    'thumbnail'   => 'image-file.png',
    'version'     => '1.0.0.0',
    'author'      => 'D&sup3; Data Development (Inh.: Thomas Dartsch)',
    'email'       => 'support@shopmodule.com',
    'url'         => 'https://www.oxidmodule.com/',
    'controllers' => [
//      'd3ControllerAlias' => D3\ThisModule\Application\Controller\Admin\d3Controller::class,
    ],
    'extend'      => [
//      \OxidEsales\Eshop\Core\ShopControl::class => \D3\ThisModule\Modules\Core\ShopControl_MyModule::class
    ],
    'events'      => [
//      'onActivate'    => '\D3\ThisModule\Setup\Events::onActivate',
//      'onDeactivate'  => '\D3\ThisModule\Setup\Events::onDeactivate',
    ],
    'templates'   => [
//      'd3TemplateAlias.tpl'   => 'd3/thismodule/Application/views/admin/tpl/d3Template.tpl',
//      'flow_theme' => [
//          'd3FlowTemplateAlias.tpl' => 'd3/thismodule/Application/views/tpl/d3FlowTheme.tpl',
//      ],
    ],
    'settings'    => [
//      [
//          'group'     => $sModuleId.'_headline',
//          'name'      => $sModuleId.'_name',
//          'type'      => 'bool',
//          'value'     => false,
//      ],
    ],
    'blocks'      => [
//      [
//          'template'  => 'layout/footer.tpl',
//          'block'     => 'footer_main',
//          'file'      => 'Application/views/blocks/layout/footer_main_mymodule.tpl'
//      ]
    ],
    'smartyPluginDirectories' => [
//      'Core/Smarty/Plugin'
    ],
];
