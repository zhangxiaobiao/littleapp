<?php
/**
 * Created by 张世彪.
 * Date: 2017/9/23 23:43
 */

namespace app\api\model;


class Category extends BaseModel
{
    protected $hidden = ['delete_time', 'update_time', 'create_time'];
    public function Img()
    {
        return $this->belongsTo('Image', 'topic_img_id', 'id');
    }
}