<?php

$db = mysqli_connect('localhost', 'cms', 'cms', 'cms');

if (mysqli_connect_errno()) {
  exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}