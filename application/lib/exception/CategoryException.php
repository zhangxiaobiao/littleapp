<?php
/**
 * Created by 张世彪.
 * Date: 2017/9/23 23:14
 */

namespace app\lib\exception;


class CategoryException extends BaseException
{
    public $code = 404;
    public $msg = '指定类型不存在，请检查参数';
    public $errorCode = 50000;
}