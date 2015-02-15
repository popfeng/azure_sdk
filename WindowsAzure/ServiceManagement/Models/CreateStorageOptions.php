<?php

/**
 * LICENSE: Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * 
 * PHP version 5
 */

namespace WindowsAzure\ServiceManagement\Models;
use WindowsAzure\Common\Internal\Resources;
use WindowsAzure\Common\Internal\Validate;
use WindowsAzure\ServiceManagement\Internal\Options;

/**
 * Optional parameters for createStorageService API.
 *
 * @author Xuewu Sun <sunxw@ucloudworld.com> 2014-11-23
 */
class CreateStorageOptions extends Options
{
    /**
     * @var string
     */
    private $_serviceName;

    /**
     * @var string
     */
    private $_accountType = 'Standard_GRS';

    /**
     * Sets the service name.
     * 
     * @param string $name
     * 
     * @return void
     */
    public function setServiceName($name)
    {
        Validate::isString($name, 'ServiceName');
        Validate::notNullOrEmpty($name, 'ServiceName');

        $this->_serviceName = $name;
    }

    /**
     * Sets the account type
     *
     * @param string $type
     * @return void
     */
    public function setAccountType($type)
    {
        Validate::isString($type, 'AccountType');

        $this->_accountType = $type;
    }

    /**
     * Convert elements to XML array
     *
     * @return array
     */
    public function toXmlArray()
    {
        $xmlElements = array(
            Resources::XTAG_SERVICE_NAME   => $this->_serviceName,
            Resources::XTAG_LABEL          => $this->_label,
            Resources::XTAG_LOCATION       => $this->_location,
            Resources::XTAG_ACCOUNT_TYPE   => $this->_accountType
        );
        return $xmlElements;
    }
}
