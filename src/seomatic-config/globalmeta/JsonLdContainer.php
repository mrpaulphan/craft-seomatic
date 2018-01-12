<?php
/**
 * SEOmatic plugin for Craft CMS 3.x
 *
 * A turnkey SEO implementation for Craft CMS that is comprehensive, powerful,
 * and flexible
 *
 * @link      https://nystudio107.com
 * @copyright Copyright (c) 2017 nystudio107
 */

use nystudio107\seomatic\services\JsonLd as JsonLdService;

/**
 * @author    nystudio107
 * @package   Seomatic
 * @since     3.0.0
 */

return [
    [
        'name'        => 'General',
        'description' => 'JsonLd Tags',
        'handle'      => JsonLdService::GENERAL_HANDLE,
        'include'     => 'true',
        'data'        => [
            'mainEntityOfPage' => [
                'type'             => 'WebPage',
                'name'             => '{seomatic.meta.seoTitle}',
                'description'      => '{seomatic.meta.seoDescription}',
                'image'            => [
                    'type'   => 'ImageObject',
                    'url'    => '{seomatic.meta.seoImage}',
                    'width'  => '1200',
                    'height' => '804',
                ],
                'url'              => '{seomatic.meta.canonicalUrl}',
                'mainEntityOfPage' => '{seomatic.meta.canonicalUrl}',
                'inLanguage'       => '{seomatic.meta.language}',
            ],
        ],
    ],
];
