<?php
/**
 * Created by PhpStorm.
 * User: p1703623
 * Date: 10/12/2018
 * Time: 09:37
 */

namespace App\Model\Table;


class Comments extends Table
{
    public function initialize(array $config)
    {
        parent::initialize($config);
        $this->belongsToOne('articles');
    }
}