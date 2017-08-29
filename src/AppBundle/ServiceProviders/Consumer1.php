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
        return 'consumer1';
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


    public function getOTPValidationUrl($parameters = [])
    {

        $url_string = '';

        if (sizeof($parameters)>0) {

            $url_string = '?';

            foreach($parameters as $key => $value) {
                $url_string .= "$key=$value&";
            }

            $url_string = substr($url_string,0,-1);

        }

        return "http://sso-sp.com/otp/validate/$url_string";

    }

}
?>