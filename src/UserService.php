<?php

namespace Services;

class UserService extends ApiService
{
    public function __construct()
    {
        $this->endpoint = env('USER_MS').'/api';
    }
}
