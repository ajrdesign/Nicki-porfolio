<?php if(!defined('KIRBY')) exit ?>

title: Link
pages: false
files:
  sortable: true
fields:
  title:
    label: Title
    type:  text
  info:
    label: Info
    type: info
    text: >
      <hr>
      <h1>This template allows you to create three different types of links.</h2>
      <br>
      <ol>
        <li>Use it to link to an uploaded file.</li>
        <li>Create redirects to other pages on the site.</li>
        <li>Or Use it to link to annother website.</li>
      </ol>
      <strong>Please selecy only one.</strong>
      <hr>

  gofile:
    label: File on this page
    type: select
    width: 1/4
    options: query
    query: 
      fetch: files
      value: '{{filename}}'
      text: '{{filename}}'
  gopage:
    label: Internal Page
    type: select
    width: 1/4
    options: pages
  gourl:
    label: External URL    (Don't forget the http://)
    width: 1/2
    type: url