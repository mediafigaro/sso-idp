<?php
// src/AppBundle/ServiceProviders/Consumer1.php

namespace AppBundle\ServiceProviders;

use Krtv\Bundle\SingleSignOnIdentityProviderBundle\Manager\ServiceProviderInterface;

/**
 * Consumer 1 service provider
 */
class Consumer1 implements ServiceProviderInterface
{
    /**
     * Get name of the service
     *
     * @return string
     */
    public function getName()
    {
        return 'sso_sp_1';
    }

    /**
     * Get service provider index url
     *
     * @param  array  $parameters
     *
     * @return string
     */
    public function getServiceIndexUrl($parameters = [])
    {
        return 'http://sso-sp.com/';
    }

    /**
     * Get service provider logout url
     *
     * @param  array  $parameters
     *
     * @return string
     */
    public function getServiceLogoutUrl($parameters = [])
    {
        return 'http://sso-sp.com/logout';
    }
}
?>