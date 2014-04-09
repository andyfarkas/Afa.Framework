<?php

namespace Afa\Framework\Request\Model;

abstract class AbstractModel implements \Afa\Framework\Request\IModel
{
    /**
     * @var \Afa\Framework\IRequest
     */
    protected $request;

    /**
     * @param \Afa\Framework\IRequest $request
     */
    public function __construct(\Afa\Framework\IRequest $request)
    {
        $this->request = $request;
    }

}