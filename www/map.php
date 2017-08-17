<?php

use Doc\Models\DocPage;
use Doc\Models\RootCategory;
use Doc\Models\SubCategory;

return [
    new RootCategory('Language Reference', 'language-reference', [
        new SubCategory('Basic syntax', 'basic-syntax', [
            new DocPage('PHP tags', 'php-tags'),
            new DocPage('Escaping from HTML', 'escaping-from-html'),
            new DocPage('Instruction separation', 'instruction-separation'),
            new DocPage('Comments', 'comments'),
        ])
    ])
];