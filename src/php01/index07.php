<?php
function SqureArea($base,$height)
{
  return $base * $height;
}

function TriangleArea($base,$height)
{
  return $base * $height / 2;
}

function TrapezoidArea($upperbase,$lowerbase,$height)
{
  return ($upperbase + $lowerbase) * $height / 2;
}


echo SqureArea(10,8)."\n";
echo TriangleArea(12,4)."\n";
echo TrapezoidArea(6,9,12);