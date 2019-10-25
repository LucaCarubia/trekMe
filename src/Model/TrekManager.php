<?php

namespace App\Model;

class TrekManager extends AbstractManager
{
    /**
     * @var string
     */
    const TABLE = 'trek';

    public function __construct()
    {
        parent::__construct(self::TABLE);
    }


}
