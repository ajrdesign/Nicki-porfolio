<?php

class RangeField extends InputField {

  static public $assets = array(
    'js' => array(
      'rangeslider.js'
    ),
    'css' => array(
      'rangeslider.css'
    )
  );

  public function __construct() {

    $this->type        = 'range';
    $this->label       = l::get('fields.range.label', 'range');
    $this->placeholder = l::get('fields.range.placeholder', '#');
    $this->step        = 1;
    $this->unit        = false;
    $this->min         = 0;
    $this->max         = false;

  }

  public function input() {
    $input = parent::input();
    $input->attr('step', $this->step);
    $input->attr('unit', $this->unit);
    $input->attr('min', $this->min);
    $input->attr('class', "rangeslider");
    $input->attr('max', $this->max);
    return $input;
  }

  public function validate() {

    if(!v::num($this->result())) return false;

    if($this->validate and is_array($this->validate)) {
      return parent::validate();
    } else {
      if($this->min and !v::min($this->result(), $this->min)) return false;
      if($this->max and !v::max($this->result(), $this->max)) return false;
    }

    return true;

  }

}