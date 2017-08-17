<?php

use Doc\Models\DocPage;
use Doc\Models\RootCategory;
use Doc\Models\SubCategory;

return [
    new RootCategory('Language Reference', 'language-reference', [
        new SubCategory('Basic syntax', 'basic-syntax', [
            new DocPage('PHP tags', 'php-tags')
        ])
    ])
];