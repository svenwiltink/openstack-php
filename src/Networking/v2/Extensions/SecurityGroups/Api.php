<?php

namespace OpenStack\Networking\v2\Extensions\SecurityGroups;

use OpenCloud\Common\Api\AbstractApi;

class Api extends AbstractApi
{
    public function __construct()
    {
        $this->params = new Params();
    }

    /**
     * Returns information about GET security-groups/{security_group_id} HTTP
     * operation
     *
     * @return array
     */
    public function getSecurityGroups()
    {
        return [
            'method' => 'GET',
            'path'   => 'security-groups',
            'params' => [],
        ];
    }

    /**
     * Returns information about POST security-groups HTTP operation
     *
     * @return array
     */
    public function postSecurityGroups()
    {
        return [
            'method'  => 'POST',
            'path'    => 'security-groups',
            'jsonKey' => 'security_group',
            'params'  => [
                'description' => $this->params->descriptionJson(),
                'name'        => $this->params->nameJson(),
            ],
        ];
    }

    /**
     * Returns information about GET security-groups/{security_group_id} HTTP
     * operation
     *
     * @return array
     */
    public function getSecurityGroup()
    {
        return [
            'method' => 'GET',
            'path'   => 'security-groups/{id}',
            'params' => [
                'id' => $this->params->idPath(),
            ],
        ];
    }

    /**
     * Returns information about DELETE security-groups/{security_group_id} HTTP
     * operation
     *
     * @return array
     */
    public function deleteSecurityGroup()
    {
        return [
            'method' => 'DELETE',
            'path'   => 'security-groups/{id}',
            'params' => [
                'id' => $this->params->idPath(),
            ],
        ];
    }

    /**
     * Returns information about GET security-group-rules HTTP operation
     *
     * @return array
     */
    public function getSecurityRules()
    {
        return [
            'method' => 'GET',
            'path'   => 'security-group-rules',
            'params' => [],
        ];
    }

    /**
     * Returns information about POST security-group-rules HTTP operation
     *
     * @return array
     */
    public function postSecurityRules()
    {
        return [
            'method'  => 'POST',
            'path'    => 'security-group-rules',
            'jsonKey' => 'security_group_rule',
            'params'  => [
                'direction'       => $this->params->directionJson(),
                'ethertype'       => $this->params->ethertypeJson(),
                'securityGroupId' => $this->params->securityGroupIdJson(),
                'portRangeMin'    => $this->params->portRangeMinJson(),
                'portRangeMax'    => $this->params->portRangeMaxJson(),
                'protocol'        => $this->params->protocolJson(),
                'remoteGroupId'   => $this->params->remoteGroupIdJson(),
                'remoteIpPrefix'  => $this->params->remoteIpPrefixJson(),
            ],
        ];
    }

    /**
     * Returns information about DELETE
     * security-group-rules/{rules-security-groups-id} HTTP operation
     *
     * @return array
     */
    public function deleteSecurityRule()
    {
        return [
            'method' => 'DELETE',
            'path'   => 'security-group-rules/{id}',
            'params' => [
                'id' => $this->params->idPath(),
            ],
        ];
    }

    /**
     * Returns information about GET
     * security-group-rules/{rules-security-groups-id} HTTP operation
     *
     * @return array
     */
    public function getSecurityRule()
    {
        return [
            'method' => 'GET',
            'path'   => 'security-group-rules/{id}',
            'params' => [
                'id' => $this->params->idPath(),
            ],
        ];
    }
}