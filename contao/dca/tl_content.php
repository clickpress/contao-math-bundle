<?php

use Clickpress\ContaoMathBundle\Controller\ContentElement\MathController;
use Doctrine\DBAL\Platforms\AbstractMySQLPlatform;

$GLOBALS['TL_DCA']['tl_content']['palettes'][MathController::TYPE] =
    'text_legend,name,type;{math_legend},math_text;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space'
;

$GLOBALS['TL_DCA']['tl_content']['fields']['math_text'] = [
    'exclude' => true,
    'inputType' => 'textarea',
    'eval' => ['class'=>'monospace', 'rte'=>'ace|html', 'helpwizard'=>true],
    'sql' => [
        'type' => 'text',
        'length' => AbstractMySQLPlatform::LENGTH_LIMIT_TEXT,
        'notnull' => false,
    ],
];