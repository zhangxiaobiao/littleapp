<?php
/**
 * Created by 张世彪.
 * Date: 2017/9/23 20:03
 */

namespace app\api\model;


class Theme extends BaseModel
{
    protected $hidden = ['delete_time','topic_img_id','head_img_id','update_time'];
    public function topicImg()
    {
        return $this->belongsTo('image', 'topic_img_id', 'id');
    }

    public function headImg()
    {
        return $this->belongsTo('image', 'head_img_id', 'id');
    }

    public function products(){
        return $this->belongsToMany('Product','theme_product','product_id','theme_id');
    }

    public static function getThemeWithProducts($id)
    {
        $theme = self::with('products,topicImg,headImg')
            ->find($id);
        return $theme;
    }
}