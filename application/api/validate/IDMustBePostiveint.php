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

    protected $message = [
        'id' => 'id必须是正整数'
    ];

}