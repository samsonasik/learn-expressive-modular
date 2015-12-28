<?php

namespace Album\Action;

use Zend\Diactoros\Response\HtmlResponse;
use Zend\Expressive\Router;
use Zend\Expressive\Template;

class AlbumPageAction
{
    private $router;

    private $template;

    public function __construct(Router\RouterInterface $router, Template\TemplateRendererInterface $template = null)
    {
        $this->router   = $router;
        $this->template = $template;
    }

    public function __invoke($request, $response, callable $next = null)
    {
        return new HtmlResponse($this->template->render('album::album-page', []));
    }
}
