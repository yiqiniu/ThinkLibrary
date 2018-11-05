<?php

// +----------------------------------------------------------------------
// | Library for ThinkAdmin
// +----------------------------------------------------------------------
// | 版权所有 2014~2018 广州楚才信息科技有限公司 [ http://www.cuci.cc ]
// +----------------------------------------------------------------------
// | 官方网站: http://library.thinkadmin.top
// +----------------------------------------------------------------------
// | 开源协议 ( https://mit-license.org )
// +----------------------------------------------------------------------
// | github 仓库地址 ：https://github.com/zoujingli/ThinkLibrary
// +----------------------------------------------------------------------

namespace library\tools;

/**
 * 数据访问对象
 * Class Object
 * @package library\tools
 */
class Options
{
    /**
     * 当前数据对象
     * @var array
     */
    private $data = [];

    /**
     * Object constructor.
     * @param array $data
     */
    public function __construct(array $data = [])
    {
        $this->data = $data;
    }

    /**
     * 判断数据是否已经设置
     * @param string $name
     * @return boolean
     */
    public function has($name)
    {
        return isset($this->data[$name]);
    }

    /**
     * 设置数据对象
     * @param string $name
     * @param mixed $value
     */
    public function set($name, $value)
    {
        if (is_null($name)) $this->data[] = $value;
        else $this->data[$name] = $value;
    }

    /**
     * 获取数据内容
     * @param string|null $name
     * @return mixed|null
     */
    public function get($name = null)
    {
        if (is_null($name)) return $this->data;
        return isset($this->data[$name]) ? $this->data[$name] : null;
    }

    /**
     * 删除数据内容
     * @param string $name
     */
    public function del($name)
    {
        unset($this->data[$name]);
    }

    /**
     * 清理所有配置
     */
    public function clear()
    {
        unset($this->data);
        $this->data = [];
    }

}