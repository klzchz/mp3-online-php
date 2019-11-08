<?php

function getAlbums()
{
  $albums =  glob('albums/*');

  return $albums;
}
