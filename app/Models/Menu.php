<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;
use App\Traits\Admin\ActionButtonTrait;

class Menu extends Model implements Transformable
{
    use TransformableTrait;
    use ActionButtonTrait;
    protected $fillable = [
        'name',
        'icon',
        'slug',
        'parent_id',
        'url',
        'heightlight_url',
        'sort'
    ];

    static function demo($arr,$id,$level)
    {
        $list =array();
        foreach ($arr as $k=>$v){
            if ($v['parent_id'] == $id){
                $v['level']=$level;
                $v['children'] = self::demo($arr,$v['id'],$level+1);
                $list[] = $v;
            }
        }
        return $list;
    }


}
