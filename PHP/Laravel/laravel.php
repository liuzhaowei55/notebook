<?php
//1.判断Models查询数组结果是否为空
function isEmpty()
{
    $users = User::get();
    $users->isEmpty();
}
//2.获取关联模型的指定字段
function attribute()
{
    return $this->hasMany('Attribute', 'attribute_id')->select('id', 'title');
}
//3.查询指定字段数据
function select()
{
    return User::select('nickname')->get();
}
//4.查看最后一条SQL日志
function lastSql()
{
    DB::last_query();
}
