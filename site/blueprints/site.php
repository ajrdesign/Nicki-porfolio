<?php if(!defined('KIRBY')) exit ?>

title: Site
files:
    sortable: true
fields:
  sectionInfo:
    label:  Site Info
    type: headline
  title:
    label: Title
    type:  text
  author:
    label: Author
    type:  text
  description:
    label: Description
    type:  textarea
  keywords:
    label: Keywords
    type:  tags
  copyright:
    label: Copyright
    type:  text
  sectionTheme:
    label:  Vessel Theme Options
    type: headline
  logo:
    label: Logo
    width: 1/2
    type: select
    options: images
  favicon:
    label: Favicon
    width: 1/2
    type: select
    options: images
  bgimage:
    label: Custom Background Image
    width: 1/2
    type: select
    options: images
  bgcolor:
    label: Background Color
    type: color
    width: 1/4
  textcolor:
    label: Text Color
    type: color
    width: 1/4
  linkcolor:
    label: Link Color
    type: color
    width: 1/4
  linkhover:
    label: Link Hover
    type: color
    width: 1/4
  buttontxt:
    label: Button Text Color
    type: color
    width: 1/4
  logocolor:
    label: Logo Color
    type: color
    width: 1/4
  logohover:
    label: Logo Hover
    type: color
    width: 1/4