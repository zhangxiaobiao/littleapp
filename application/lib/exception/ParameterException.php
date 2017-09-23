<?php
/**
 * Created by 张世彪.
 * Date: 2017/9/17 9:28
 */

namespace app\lib\exception;


class ParameterException extends BaseException
{
    public $code = 400;
    public $msg = '参数错误';
    public $errorCode = 10000;
}