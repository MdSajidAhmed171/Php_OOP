<?php

$queue = new SplQueue();
$queue->enqueue('A');
$queue->enqueue('B');
$queue->enqueue('C');
$queue->dequeue(); // remove the first one
$queue->count();

echo $queue->isEmpty();
echo $queue->valid();
echo $queue->current();

print_r($queue);

?>