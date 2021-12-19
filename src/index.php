<?php
$finfo = new finfo();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>May'mayim Be-sasson</title>
</head>
<body>
    <h1>マイ・マイム・ベーサソーン</h1>
    <table>
        <tr>
            <thead>
                <th>ファイル名</th>
                <th>MIMEタイプ</th>
            </thead>
        </tr>
<?php
foreach (glob('scan/*') as $file) {
    if (is_file($file) && strpos($file, '.gitkeep') === false) {
?>
        <tr>
            <th><?= htmlspecialchars($file, ENT_QUOTES, 'UTF-8'); ?></th>
            <td><?= htmlspecialchars($finfo->file( __DIR__ . '/' . $file, FILEINFO_MIME_TYPE), ENT_QUOTES, 'UTF-8'); ?></td>
        </tr>
<?php
    }
}
?>
    </table>
</body>
</html>