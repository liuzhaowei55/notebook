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
function last_query(){
    DB::connection()->enableQueryLog();
    $arr[] = DB::getQueryLog();
}
//5.软删除
class user
{
	use Illuminate\Database\Eloquent\SoftDeletes;
    //软删除
    protected $dates = ['deleted_at'];
}
//6.判断数据在数据库中是否存在
function (){
	$user = User::first();
	is_null($user);
}
//7.Model::delete();返回结果是影响的条数
function delete(){
	$modify = Model::where()->delete();
}
//8.Model::get();返回的是一个对象
//返回的是一个`Illuminate\Database\Eloquent\Collection`对象
function (){
	Model::get();
}
//9.传递包含函数所需信息的对象,而不是传递函数所需的信息.
//10.分页
function paginate(){
    Models::paginate($size,$filed,$name,$page);
    Models::offset(10)->take(10)->get();
}
