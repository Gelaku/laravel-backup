<?php
/**
 * 系统全局函数
 */


if (!function_exists('object_to_array')){
    /**
     * 对象 转 数组
     * @param object $obj 对象
     * @return array
     */
    function object_to_array($obj)
    {
        $obj = (array) $obj;
        foreach ($obj as $k => $v) {
            if (gettype($v) == 'resource') {
                return;
            }
            if (gettype($v) == 'object' || gettype($v) == 'array') {
                $obj[$k] = (array) object_to_array($v);
            }
        }

        return $obj;
    }
}
