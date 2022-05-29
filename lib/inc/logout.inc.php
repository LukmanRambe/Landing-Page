<?php

session_start();
session_unset();
session_destroy();
header("location: /tugas-lab-pw/index.php?logout=success");
