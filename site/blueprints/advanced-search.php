<?php if(!defined('KIRBY')) exit ?>

# default blueprint

title: Default
pages: true
files: true
fields:
  title:
    label: Title
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
  categories:
    label: Categories
    type: structure
    entry: >
      {{title}}<br />
      {{description}}
    fields:
      jobtitle:
        label: Jobbezeichnung
        type: text
      description:
        label: Jobbeschreibung
        type: textarea
        size: large
        buttons:
          - h1
          - h2
          - h3
          - bold
          - italic
          - email
          - link
          attachment:
            label: Anhang
            type: select
            options: files
<!--       categories:
        label: Categories
        type: structure
        entry: >
          {{title}}<br />
          {{description}}
        fields:
          jobtitle:
            label: Jobbezeichnung
            type: text
          description:
            label: Jobbeschreibung
            type: textarea
            size: large
            buttons:
              - h1
              - h2
              - h3
              - bold
              - italic
              - email
              - link -->
      attachment:
        label: Anhang
        type: select
        options: files
