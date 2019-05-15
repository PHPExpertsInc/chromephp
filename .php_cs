<?php

return PhpCsFixer\Config::create()
    ->setRules([
        '@Symfony'       => true,
        'elseif'         => false,
        'yoda_style'     => false,
        'list_syntax'    => ['syntax'  => 'short'],
        'concat_space'   => ['spacing' => 'one'],
        'binary_operator_spaces' => [
            'align_equals'       => false,
            'align_double_arrow' => true,
        ],
        'declare_strict_types'         => false,
        'no_superfluous_elseif'        => true,
        'blank_line_after_opening_tag' => false
    ])
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->exclude('bootstrap')
            ->exclude('config')
            ->exclude('legacy')
            ->exclude('packages')
            ->exclude('vendor')
            ->in(__DIR__)
    );
