<?php declare(strict_types = 1);

return [
    'frontend' => [
        'web2pdf/PdfRender' => [
            'target' => \Mittwald\Web2pdf\Middleware\PdfRender::class,
            'after' => [
                'typo3/cms-frontend/output-compression',
            ]
        ],
    ],
];