<?php
namespace Clickpress\ContaoMathBundle\Controller\ContentElement;

use Contao\ContentModel;
use Contao\CoreBundle\Controller\ContentElement\AbstractContentElementController;
use Contao\CoreBundle\DependencyInjection\Attribute\AsContentElement;
use Contao\CoreBundle\Twig\FragmentTemplate;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

#[AsContentElement(type: MathController::TYPE, category: 'texts')]
class MathController extends AbstractContentElementController
{
    public const string TYPE = 'math';

    protected function getResponse(FragmentTemplate $template, ContentModel $model, Request $request): Response
    {
        $GLOBALS['TL_CSS'][] = 'bundles/contaomath/katex.css';
        $GLOBALS['TL_JAVASCRIPT'][] = 'bundles/contaomath/katex.min.js';


        return $template->getResponse();
    }
}