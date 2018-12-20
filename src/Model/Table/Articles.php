<?php
/**
 * Created by PhpStorm.
 * User: p1703623
 * Date: 10/12/2018
 * Time: 09:36
 */

namespace App\Model\Table;


class Articles extends Table
{
    public function initialize(array $config)
    {
        parent::initialize($config);
        $this->belongsToMany('tags');
        $this->hasMany('comments');
    }
}