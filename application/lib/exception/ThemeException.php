<?php
/**
 * Created by 张世彪.
 * Date: 2017/9/23 21:42
 */

namespace app\lib\exception;


class ThemeException extends BaseException
{
    public $code = 404;
    public $msg = '指定主题不存在，请检查主题ID';
    public $errorCode = 30000;
}