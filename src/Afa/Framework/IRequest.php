<?php

namespace Afa\Framework;

interface IRequest
{
    /**
     * @param string $key
     * @return mixed
     */
    public function get($key);
}