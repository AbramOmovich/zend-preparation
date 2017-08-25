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
            new DocPage('Variable variable', 'variable-variable'),
            new DocPage('External variables', 'external'),
        ]),
        new SubCategory('Constants', 'constants', [
            new DocPage('Syntax', 'syntax'),
            new DocPage('Magic constants', 'magic-constants')
        ]),
        new SubCategory('Expressions', 'expressions', [
            new DocPage('Expressions', 'expressions')
        ]),
        new SubCategory('Operators', 'operators', [
            new DocPage('Operators precedence', 'precedence'),
            new DocPage('Bitwise operators', 'bitwise-operators'),
            new DocPage('Comparison operators', 'comparison-operators'),
            new DocPage('Error control', 'error-control'),
            new DocPage('Execution operator', 'execution'),
        ])
    ])
];