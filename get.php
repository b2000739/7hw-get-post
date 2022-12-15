<?php
file_put_contents('index.txt', "Имя: " . $_POST['name'] . PHP_EOL);
file_put_contents('index.txt', "email: " . $_POST['email'], FILE_APPEND);
