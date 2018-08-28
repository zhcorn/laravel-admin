<?php

namespace Encore\Admin\Form\Field;

use Encore\Admin\Form\Field;

class DateRange extends Field
{
    protected static $css = [
        '/vendor/laravel-admin/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css',
    ];

    protected static $js = [
        '/vendor/laravel-admin/moment/min/moment-with-locales.min.js',
        '/vendor/laravel-admin/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js',
    ];

    protected $format = 'YYYY-MM-DD';

    /**
     * Column name.
     *
     * @var string
     */
    protected $column = [];

    public function __construct($column, $arguments)
    {
        $this->column['start'] = $column;
        $this->column['end'] = $arguments[0];

        array_shift($arguments);
        $this->label = $this->formatLabel($arguments);
        $this->id = $this->formatId($this->column);

        $this->options(['format' => $this->format]);
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
        $this->options['locale'] = config('app.locale');
        $this->options['icons']=[
            'time'=>'fa fa-clock-o',
            'date'=>'fa fa-calendar',
            'up'=>'fa fa-arrow-up',
            'down'=>'fa fa-arrow-down',
            'previous'=>'fa fa-chevron-left',
            'next'=>'fa fa-chevron-right',
            'today'=>'fa fa-calendar-check',
            'clear'=>'fa fa-trash-alt',
            'close'=>'fa fa-times-circle',
        ];

        $startOptions = json_encode($this->options);
        $endOptions = json_encode($this->options + ['useCurrent' => false]);

        $class = $this->getElementClassSelector();

        $this->script = <<<EOT
            $('{$class['start']}').datetimepicker($startOptions);
            $('{$class['end']}').datetimepicker($endOptions);
            $("{$class['start']}").on("dp.change", function (e) {
                $('{$class['end']}').data("DateTimePicker").minDate(e.date);
            });
            $("{$class['end']}").on("dp.change", function (e) {
                $('{$class['start']}').data("DateTimePicker").maxDate(e.date);
            });
EOT;

        return parent::render();
    }
}
