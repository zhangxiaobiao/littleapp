<?php
/**
 * Created by 张世彪.
 * Date: 2017/9/16 19:19
 */

namespace app\api\validate;


class IDMustBePostiveint extends BaseValidate
{
    protected $rule = [
        'id' => 'require|isPositiveInteger'
    ];
    protected function isPositiveInteger($value, $rule = '', $data = '',$field = ''){
        if (is_numeric($value) && is_int($value + 0) && ($value + 0) > 0){
            return true;
        } else {
            return $field."必须是正整数";
        }
    }
}