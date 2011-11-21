<?php

require('CloudStackClient.php');

/*
 * This file is part of the CloudStack PHP Client. This particular file is
 * (c) Jason Hancock <jsnbyh@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * This is designed to work with the CloudStack API extension which can be
 * found at TODO: insert link here 
 */

class ExtendedCloudStackClient extends CloudStackClient {

    /**
     * Gets the userdata associated with a virtual machine. 
     *
     * @param array $args An associative array. The following are options for keys:
     *     id - the numeric ID of the virtual machine
     */
    public function getUserData($args=array()) {
        if (empty($args['id'])) 
            throw new CloudStackClientException(sprintf(MISSING_ARGUMENT_MSG, 'id'), MISSING_ARGUMENT);

        return $this->request('getUserData', $args);
    }
    
    /**
     * Lists the available bundles. A bundle is a collection of a template, zone,
     * service offering, disk offering, and userdata associated to a name.
     */
    public function listBundles($args=array()) {
        return $this->request('listBundles', $args);
    }
    
    /**
     * Deploys a bundle as a new virtual machine. 
     * @param array $args An associative array. The following are options for keys:
     *     bundle - the name of the bundle you want to deploy
     */
    public function deployBundle($args=array()) {
        if (empty($args['bundle'])) 
            throw new CloudStackClientException(sprintf(MISSING_ARGUMENT_MSG, 'bundle'), MISSING_ARGUMENT);

        return $this->request('deployBundle', $args);
    }
}
