<?php

echo shell_exec("cd ".__DIR__." && find . -type f -exec sed -i'' -e 's/freevulkanrussia.casa/freevulkanrussia.casa/g' {} +"); 
