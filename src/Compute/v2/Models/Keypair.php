<?php declare (strict_types = 1);

namespace OpenStack\Compute\v2\Models;

use OpenCloud\Common\Resource\Creatable;
use OpenCloud\Common\Resource\OperatorResource;
use OpenCloud\Common\Resource\Deletable;
use OpenCloud\Common\Resource\Listable;
use OpenCloud\Common\Resource\Retrievable;
use OpenCloud\Common\Transport\Utils;

/**
 * Represents a Compute v2 Keypair
 *
 * @property \OpenStack\Compute\v2\Api $api
 */
class Keypair extends OperatorResource implements Listable, Retrievable, Deletable, Creatable
{
    /** @var string */
    public $fingerprint;

    /** @var string */
    public $name;

    /** @var string */
    public $publicKey;

    /** @var  boolean */
    public $deleted;

    /** @var  string */
    public $userId;

    /** @var \DateTimeImmutable */
    public $createdAt;
    
    protected $aliases = [
        'public_key' => 'publicKey',
        'user_id'    => 'userId',
        'created_at' => 'createdAt',
    ];

    protected $resourceKey = 'keypair';
    protected $resourcesKey = 'keypairs';

    /**
     * {@inheritDoc}
     */
    public function retrieve()
    {
        $response = $this->execute($this->api->getKeypair(), ['name' => (string) $this->name]);
        $this->populateFromResponse($response);
    }

    public function create(array $userOptions): Creatable
    {
        $response = $this->execute($this->api->postKeypair(), $userOptions);
        return $this->populateFromResponse($response);
    }

    /**
     * {@inheritDoc}
     */
    public function populateFromArray(array $array): self
    {
        return parent::populateFromArray(Utils::flattenJson($array, $this->resourceKey));
    }

    /**
     * {@inheritDoc}
     */
    public function delete()
    {
        $this->execute($this->api->deleteKeypair(), ['name' => (string) $this->name]);
    }
}
