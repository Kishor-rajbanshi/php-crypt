<?php

namespace Amuone\Crypt\Interfaces;

interface Crypter
{
    /**
     * Encrypt the given value.
     *
     * @param  mixed  $value
     * @param  bool  $serialize
     * @return string
     *
     * @throws \Amuone\Crypt\Exceptions\Encrypt
     */
    public function encrypt($value, $serialize = true);

    /**
     * Decrypt the given value.
     *
     * @param  string  $payload
     * @param  bool  $unserialize
     * @return mixed
     *
     * @throws \Amuone\Crypt\Exceptions\Decrypt
     */
    public function decrypt($payload, $unserialize = true);
}
