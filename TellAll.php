<?php
/**
 * Created by PhpStorm.
 * User: Lam
 * Date: 2017/10/09
 * Time: 13:35
 */

namespace OOP;


class TellAll
{
    private $userAgent;
    public function __construct()
    {
        $this->userAgent=$_SERVER['HTTP_USER_AGENT'];
        echo $this->userAgent;
    }
}
$tellAll = new TellAll();