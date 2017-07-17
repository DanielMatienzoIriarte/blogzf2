<?php
/**
 * Created by PhpStorm.
 * User: sebastian.gerard
 * Date: 6/26/2017
 * Time: 4:46 PM
 */

namespace User\Service;

interface AuthenticationServiceInterface
{
    public function logIn($username, $password);
    public function logout($username);
}
