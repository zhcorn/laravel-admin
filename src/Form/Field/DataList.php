<?php
/**
 * Created by PhpStorm.
 * User: zhcorn
 * Date: 18-12-5
 * Time: 下午3:45
 */

namespace Encore\Admin\Form\Field;

use Illuminate\Contracts\Support\Arrayable;

class DataList extends Text
{

    protected $view = "admin::form.datalist";
    protected $prepend = "";

    /**
     * Set options.
     *
     * @param array|callable|string $options
     *
     * @return $this|mixed
     */
    public function options($options = [])
    {
        // remote options
        if (is_string($options)) {
            // reload selected
            if (class_exists($options) && in_array('Illuminate\Database\Eloquent\Model', class_parents($options))) {
                return $this->selected(...func_get_args());
            }

            return $this->loadRemoteOptions(...func_get_args());
        }

        if ($options instanceof Arrayable) {
            $options = $options->toArray();
        }

        if (is_callable($options)) {
            $this->options = $options;
        } else {
            $this->options = (array) $options;
        }

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function render()
    {
        if ($this->options instanceof \Closure) {
            if ($this->form) {
                $this->options = $this->options->bindTo($this->form->model());
            }

            $this->options(call_user_func($this->options, $this->value));
        }

        $this->options = array_filter($this->options, 'strlen');

        $this->addVariables([
            'options' => $this->options,
        ]);

        $this->defaultAttribute('list', $this->id."s");

        return parent::render();
    }
}