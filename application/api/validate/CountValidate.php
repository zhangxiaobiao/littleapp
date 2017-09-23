<?php
/**
 * Created by 张世彪.
 * Date: 2017/9/23 23:05
 */

namespace app\api\validate;


class CountValidate extends BaseValidate
{
    protected $rule = [
        'count' => 'isPositiveInteger|between:1,15'
    ];
    

}