<?php
/**
 * Created by PhpStorm.
 * User: Li Ning
 * Date: 2018/12/5
 * Time: 16:21
 */

namespace app\index\model;

use think\Model;

class TxVideos extends Model
{
    public function items()
    {
        return $this->hasMany('app\caiji\model\TvChild', 'tv_id', 'id');
    }
}