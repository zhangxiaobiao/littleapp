<?php

namespace app\api\controller\v1;

use app\api\validate\IDCollection;
use app\api\validate\IDMustBePostiveint;
use app\lib\exception\ThemeException;
use think\Controller;
use app\api\model\Theme as ThemeModel;

class Theme extends Controller
{
    /**
     * @url /theme?ids=id1,id2,id3,...
     * @return 一组theme模型
     */
    public function getSimpleList($ids='')
    {
        (new IDCollection())->goCheck();
        $ids = explode(',', $ids);
        $result = ThemeModel::with('topicImg,headImg')
                    ->select($ids);
        if ($result->isEmpty()){
            throw new ThemeException();
        }
        return $result;
    }

    /**
     * @url /theme/:id
     * @param $id
     * @return array|false|\PDOStatement|string|\think\Model
     * @throws ThemeException
     * @throws \app\lib\exception\ParameterException
     */
    public function getComplexOne($id){
        (new IDMustBePostiveint())->goCheck();
        $theme = ThemeModel::getThemeWithProducts($id);
        if ($theme->isEmpty()){
            throw new ThemeException();
        }
        return $theme;
    }
}
