<?php

// List of Available Rule sets rules https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/master/doc/ruleSets/index.rst

$myRules = [
    // '@PSR2' => true,
    '@PhpCsFixer' => true,
    '@Symfony' => true,
    'octal_notation' => true,
    'ordered_imports' => true,
    'no_unused_imports' => true,
    'no_mixed_echo_print' => ['use' => 'print'],
    'echo_tag_syntax' => ['format' => 'short'],
    // 'general_phpdoc_annotation_remove' =>["author","autor"], //Removendo o comentario escrito author
    'increment_style' => ['style' => 'post'],
    'yoda_style' => false,
    'concat_space' => true,
    // 'my_camel_case_variables' => true, // update rule name to custom rule
];

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__)
    ->exclude(['bootstrap', 'storage', 'vendor', 'coverage'])
;

$config = new PhpCsFixer\Config();

return $config
    // ->registerCustomFixers([
    //     new \PhpCsFixer\Fixer\Basic\CamelCaseVariableNameFixer(),
    // ])
    ->setRules($myRules)
    ->setFinder($finder)
;
