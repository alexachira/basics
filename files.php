<?php
file_put_contents("data.txt", "walter",FILE_APPEND );

echo  file_get_contents("data.txt");