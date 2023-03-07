<?php

/*
 * This file is part of the Ivory Google Map package.
 *
 * (c) Eric GELOEN <geloen.eric@gmail.com>
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code.
 */

$finder = PhpCsFixer\Finder::create()
    ->exclude('tests/Fixture/Resource/config')
    ->in([
        __DIR__.'/src',
        __DIR__.'/tests',
    ]);

$config = new PhpCsFixer\Config();
return $config
    ->setRules([
        '@Symfony'               => true,
        'array_syntax'           => ['syntax' => 'short'],
        'binary_operator_spaces' => ['align_double_arrow' => true],
        'ordered_imports'        => true,
    ])
    ->setFinder($finder);
