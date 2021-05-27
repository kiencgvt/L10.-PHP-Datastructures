<?php
$expressionStr = "(s * (s – a) * (s – b) * (s – c)";
$expressionArr = str_split($expressionStr);
$stack = new SplStack();
var_dump(check($expressionArr, $stack));
echo "<br>";
print_r($stack);
function check($expression, &$stack) {
    foreach ($expression as $sym) {
        if ($sym == "(") {
            $stack->push($sym);
        } elseif ($sym == ")") {
            if ($stack->isEmpty()) {
                return false;
            }
            $stack->pop();
        }
    }
    return $stack->isEmpty();
}

