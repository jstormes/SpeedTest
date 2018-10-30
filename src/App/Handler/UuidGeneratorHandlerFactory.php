<?php
/**
 * Created by PhpStorm.
 * User: jstormes
 * Date: 10/30/2018
 * Time: 1:43 PM
 */

namespace App\Handler;


use Psr\Container\ContainerInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Zend\Expressive\Router\RouterInterface;
use Zend\Expressive\Template\TemplateRendererInterface;

class UuidGeneratorHandlerFactory
{
    public function __invoke(ContainerInterface $container) : RequestHandlerInterface
    {
        $router   = $container->get(RouterInterface::class);
        $template = $container->has(TemplateRendererInterface::class)
            ? $container->get(TemplateRendererInterface::class)
            : null;

        return new UuidGeneratorHandler();
    }
}