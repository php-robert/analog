<?php

require 'autoload.php';

Analog::log ('foo');
Analog::log ('bar');

echo file_get_contents (Analog::handler ());
unlink (Analog::handler ());

?>