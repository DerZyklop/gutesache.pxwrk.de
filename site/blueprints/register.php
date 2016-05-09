<?php if(!defined('KIRBY')) exit ?>

# default blueprint

title: Register
pages:
  template: json
files: true
fields:
  title:
    label: Title
    type:  text
  pageicon:
    label: Icon-Class (Font-Awesome)
    type:  text
  text:
    label: Text
    type:  textarea
    size:  large
    buttons:
      - h1
      - h2
      - h3
      - bold
      - italic
      - email
      - link
