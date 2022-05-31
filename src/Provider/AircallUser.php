<?php

namespace SumaerJolly\OAuth2\Client\Provider;

use League\OAuth2\Client\Provider\ResourceOwnerInterface;
use League\OAuth2\Client\Tool\ArrayAccessorTrait;

class AircallUser implements ResourceOwnerInterface
{
  use ArrayAccessorTrait;

  /**
   * @var array
   */
  protected $response;

  /**
   * @param array $response
   */
  public function __construct(array $response)
  {
    $this->response = $response;
  }

  public function getId()
  {
    return $this->getValueByKey($this->response, 'integration.user.id');
  }

  public function getEmail()
  {
    return $this->getValueByKey($this->response, 'integration.user.email');
  }

  public function getName()
  {
    return $this->getValueByKey($this->response, 'integration.user.name');
  }

  public function toArray()
  {
    return $this->response;
  }
}
