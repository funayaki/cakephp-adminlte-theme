<?php

namespace AdminLTE\View\Helper;

use Cake\Utility\Hash;
use Cake\View\Helper\BreadcrumbsHelper as CakeBreadcrumbsHelper;

class BreadcrumbsHelper extends CakeBreadcrumbsHelper
{
    /**
     * Default config for the helper.
     *
     * @var array
     */
    protected $_defaultConfig = [
        'templates' => [
            'wrapper' => '<ol{{attrs}}>{{content}}</ol>',
            'itemWithoutLink' => '<li{{attrs}}>{{title}}</li>{{separator}}',
        ]
    ];

    /**
     * @param array $attributes
     * @param array $separator
     * @return string
     */
    public function render(array $attributes = [], array $separator = []) {
        $attributes = Hash::merge(['class' => 'breadcrumb'], $attributes);
        return parent::render($attributes, $separator);
    }
}
