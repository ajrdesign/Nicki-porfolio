<?php if(!defined('KIRBY')) exit ?>

title: Project With Hero Image
pages: false
files: true
fields:
  title:
    label: Title
    type:  text
  text:
    label: Text
    type:  textarea
  thumbnail:
    label: Thumbnail
    width: 1/2
    type: select
    options: images
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