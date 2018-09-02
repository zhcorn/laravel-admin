<?php
/**
 * Created by PhpStorm.
 * User: zhcorn
 * Date: 18-9-2
 * Time: 下午11:11
 */

namespace Encore\Admin\Form\Field;

use Encore\Admin\Form\Field;

class KeyValueText extends Field
{
    /**
     * Column name.
     *
     * @var string
     */
    protected $column = [];

    public function __construct($column, $arguments)
    {
        $this->column['key'] = $column;
        $this->column['value'] = $arguments[0];

        array_shift($arguments);
        $this->label = $this->formatLabel($arguments);
        $this->id = $this->formatId($this->column);
    }

    public function prepare($value)
    {
        if ($value === '') {
            $value = null;
        }

        return $value;
    }

    public function render()
    {
        return parent::render(); // TODO: Change the autogenerated stub
    }
}