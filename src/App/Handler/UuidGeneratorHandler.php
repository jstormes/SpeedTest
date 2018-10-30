<?php
/**
 * Created by PhpStorm.
 * User: jstormes
 * Date: 10/30/2018
 * Time: 1:42 PM
 */

namespace App\Handler;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Zend\Diactoros\Response\JsonResponse;

class UuidGeneratorHandler implements RequestHandlerInterface
{
    public function handle(ServerRequestInterface $request) : ResponseInterface
    {
        return new JsonResponse(['uuid' => uniqid()]);
    }
}