<?php

namespace League\OAuth2\Client\Provider;

class MovesResourceOwner implements ResourceOwnerInterface
{
    /**
     * Domain
     *
     * @var string
     */
    protected $domain;

    /**
     * Raw response
     *
     * @var array
     */
    protected $response;

    /**
     * Creates new resource owner.
     *
     * @param array $response
     */
    public function __construct(array $response = [])
    {
        $this->response = $response;
    }

    /**
     * Get resource owner id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->response['userId'] ?: null;
    }

    /**
     * Get resource owner email
     *
     * @return string|null
     */
    public function getFirstDate()
    {
        return $this->response['profile']['firstDate'] ?: null;
    }

    /**
     * Get resource owner first name
     *
     * @return string|null
     */
    public function getCaloriesAvailable()
    {
        return $this->response['profile']['caloriesAvailable'] ?: null;
    }

    /**
     * Return all of the owner details available as an array.
     *
     * @return array
     */
    public function toArray()
    {
        return $this->response;
    }
}
