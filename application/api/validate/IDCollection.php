<?php
/**
 * Created by 张世彪.
 * Date: 2017/9/23 20:23
 */

namespace app\api\validate;


class IDCollection extends BaseValidate
{
    protected $rule = [
        'ids' => 'require|checkIDs'
    ];

    protected $message = [
        'ids' => 'ids参数必须是以逗号分隔的多个正整数'
    ];
    
    protected function checkIDs($value){
        $values = explode(',', $value);
        if (empty($values)){
            return false;
        }
        foreach ($values as $id){
            if (!$this->isPositiveInteger($id)){
                return false;
            }
        }
        return true;
    }
}