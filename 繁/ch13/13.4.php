<?php
//將Cookie的過期時間設定為比目前時間減少10秒
setcookie("user", "", time()-10);
?>
