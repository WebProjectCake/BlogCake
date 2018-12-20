<?php
/**
 * Created by PhpStorm.
 * User: p1703623
 * Date: 10/12/2018
 * Time: 09:39
 */

namespace App\Model\Table;


class Tags extends Table
{
    public function initialize(array $config)
    {
        parent::initialize($config);
        $this->belongsToMany('articles');
        $this->hasMany('comments');
    }
}