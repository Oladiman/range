<?php
$range = new Func("range", function($start = null, $end = null, $increment = null) use (&$undefined, &$numLoops, &$Math) {
  $result = new Arr();
  if (eq($increment, $undefined)) {
    $increment = 1.0;
  }
  $numLoops = _plus(call_method($Math, "abs", _divide((to_number($end) - to_number($start)), $increment)), 1.0);
  for ($i = 0.0; $i < $numLoops; $i++) {
    call_method($result, "push", $start);
    $start = _plus($start, $increment);
  }
  return $result;
});
$sum = new Func("sum", function($numArray = null) use (&$numLoops) {
  $arrayTotal = 0.0;
  $numLoops = get($numArray, "length");
  for ($i = 0.0; $i < $numLoops; $i++) {
    $arrayTotal = _plus($arrayTotal, get($numArray, $i));
  }
  return $arrayTotal;
});
?>

