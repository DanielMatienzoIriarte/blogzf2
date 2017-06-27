<?php
/**
 * Created by PhpStorm.
 * User: sebastian.gerard
 * Date: 6/20/2017
 * Time: 2:50 PM
 */

namespace Blog\Factory;

use Blog\Service\PostService;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class PostServiceFactory implements FactoryInterface
{
    /**
     * Create service
     *
     * @param ServiceLocatorInterface $serviceLocator
     * @return mixed
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        return new PostService(
            $serviceLocator->get('Blog\Mapper\PostMapperInterface')
        );
    }
}