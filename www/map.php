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
        ]),
        new SubCategory('Types','types', [
            new DocPage('Introduction', 'introduction'),
            new DocPage('Boolean', 'boolean'),
            new DocPage('Integer', 'integer'),
            new DocPage('Float', 'float'),
            new DocPage('String', 'string'),
            new DocPage('Arrays', 'arrays'),
            new DocPage('Iterable', 'iterable'),
            new DocPage('Object', 'object'),
            new DocPage('Resource', 'resource'),
            new DocPage('Null', 'null'),
            new DocPage('Callables \\ Callbacks', 'callable'),
            new DocPage('Type juggling', 'type-juggling'),
        ]),
        new SubCategory('Variables', 'variables',[
            new DocPage('Basics', 'basics'),
            new DocPage('Predefined variables', 'predefined'),
            new DocPage('Variable scope', 'scope'),
        ])
    ])
];