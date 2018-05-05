<?php if(!defined('KIRBY')) exit ?>

title: Project
pages: false
files:
  sortable: true
fields:
  title:
    label: Title
    type:  text
  thumbnail:
    label: Thumbnail
    width: 1/2
    type: select
    options: images
  text:
    label: Text
    type:  textarea