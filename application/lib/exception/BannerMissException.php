<?php
/**
 * Created by 张世彪.
 * Date: 2017/9/16 22:07
 */

namespace app\lib\exception;


class BannerMissException extends BaseException
{
    public $code = 404;
    public $msg = '请求的Banner不存在';
    public $errorCode = 40000;
}