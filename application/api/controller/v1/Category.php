<?php
/**
 * Created by 张世彪.
 * Date: 2017/9/23 23:43
 */

namespace app\api\controller\v1;

use app\api\model\Category as CategoryModel;
use app\lib\exception\CategoryException;

class Category
{
    public function getAllCategories()
    {
        $categories = CategoryModel::all([], 'img');
        if ($categories->isEmpty()){
            throw new CategoryException();
        }
        return $categories;
    }
}