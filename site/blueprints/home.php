<?php if(!defined('KIRBY')) exit ?>

title: Home
pages: false
fields:
  title:
    label: Title
    type:  text
  carousel:
      label: Carousel of Featured Images
      type:  selector
      mode:  multiple
      types:
          - image
  text:
    label: Text
    type:  textarea
    size:  large
  contentsource:
    label: Grid Content Source
    type: select
    options: siblings
  sectionGrid:
    label:  Portfolio Grid Settings
    type: headline
  gridradius:
    label: Rounded Corners
    min: 0
    unit: px
    max: 500
    type: range
    width: 1/2
  gridcol:
    label: Max Number of Columns
    type: radio
    default: three
    width: 1/2
    options:
      four: Four
      three: Three
      two: Two
      one: One
  aspectratio:
    label: Image Grid Aspect Ratio
    type: radio
    default: square
    width: 1/5
    options:
      original: Original (Masonry Layout)
      square: 1:1 (Square)
      fourxfivep: 4:5 (Portrait)
      fourxfive: 4:5 (Landscape)
      fivexsevenp: 5:7 (Portrait)
      fivexseven: 5:7 (Landscape)
      twoxthreep: 2:3 (Portrait)
      twoxthree: 2:3 (Landscape)
      sixteenxninep: 16:9 (Portrait)
      sixteenxnine: 16:9 (Landscape)