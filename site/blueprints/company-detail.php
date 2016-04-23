<?php if(!defined('KIRBY')) exit ?>

# default blueprint

title: Firma Detail
pages: true
files: true
fields:

  title:
    label: Title
    type:  text


  headline3:
    type: headline
    label: Kontakt-Person
  poc_gender:
    label: Anrede
    type:  select
    options:
      female: Frau
      male: Herr
  poc_firstname:
    label: first
    type:  text
  poc_name:
    label: name
    type:  text
  poc_avatar:
    label: Profil-Bild
    type:  select
    options: images

  headline1:
    type: headline
    label: Firma
  unternehmensform:
    label: unternehmensform
    type:  text
  plz:
    label: PLZ
    type:  text
  city:
    label: Stadt
    type:  text
  street:
    label: Straße
    type:  text
  housenr:
    label: housenr
    type:  text
  website:
    label: Webseite
    type:  text
  mail:
    label: E-Mail
    type:  text
  video:
    label: video
    type:  text
  videotitle:
    label: videotitle
    type:  text
  videodescription:
    label: videodescription
    type:  text
  logo:
    label: logo
    type:  text
  verband:
    label: verband
    type:  text
  kategorie:
    label: kategorie
    type:  text
  banche:
    label: banche
    type:  text
  praeambel:
    label: praeambel
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
  geschaeftszweck:
    label: geschaeftszweck
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
  historie:
    label: historie
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
  facebook:
    label: facebook
    type:  text
  twitter:
    label: twitter
    type:  text
  pinterest:
    label: pinterest
    type:  text
  linkedin:
    label: linkedin
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
