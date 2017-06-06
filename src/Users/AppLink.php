<?php
/*******************************************************************************
 * Copyright 2017 Okta, Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 ******************************************************************************/

namespace Okta\Users;

use Okta\Resource\AbstractResource;

class AppLink extends AbstractResource
{
    const ID = 'id';
    const LABEL = 'label';
    const HIDDEN = 'hidden';
    const APP_NAME = 'appName';
    const LINK_URL = 'linkUrl';
    const LOGO_URL = 'logoUrl';
    const SORT_ORDER = 'sortOrder';
    const APP_INSTANCE_ID = 'appInstanceId';
    const APP_ASSIGNMENT_ID = 'appAssignmentId';
    const CREDENTIALS_SETUP = 'credentialsSetup';

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->getProperty(self::ID);
    }
    
    /**
     * @return string
     */
    public function getLabel(): string
    {
        return $this->getProperty(self::LABEL);
    }
    
    /**
     * @return boolean
     */
    public function getHidden(): boolean
    {
        return $this->getProperty(self::HIDDEN);
    }
    
    /**
     * @return string
     */
    public function getAppName(): string
    {
        return $this->getProperty(self::APP_NAME);
    }
    
    /**
     * @return string
     */
    public function getLinkUrl(): string
    {
        return $this->getProperty(self::LINK_URL);
    }
    
    /**
     * @return string
     */
    public function getLogoUrl(): string
    {
        return $this->getProperty(self::LOGO_URL);
    }
    
    /**
     * @return
     */
    public function getSortOrder(): undefined
    {
        return $this->getProperty(self::SORT_ORDER);
    }
    
    /**
     * @return string
     */
    public function getAppInstanceId(): string
    {
        return $this->getProperty(self::APP_INSTANCE_ID);
    }
    
    /**
     * @return string
     */
    public function getAppAssignmentId(): string
    {
        return $this->getProperty(self::APP_ASSIGNMENT_ID);
    }
    
    /**
     * @return boolean
     */
    public function getCredentialsSetup(): boolean
    {
        return $this->getProperty(self::CREDENTIALS_SETUP);
    }
}
