<?php

require '../Parsedown.php';

$file = $_GET['file'] ?? '0_plan.md';
preg_match('/^(?:.*)\d+_([a-z_]+)\.md/', $file, $title);
$title = ucfirst(str_replace('_', ' ', $title[1]));

if (file_exists($file)) {
    $content = Parsedown::instance()
    ->setBreaksEnabled(true)
    ->text(file_get_contents($file));
} else {
    $content = 'File <b>' . $file . '</b> does not exists.';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../_tools/fontawesome-pro-5.1.0-web/css/all.css">
    <link rel="stylesheet" href="../../websites/aym_dev_2017/blog/asset/css/style.min.css">
    <link rel="stylesheet" href="../../websites/aym_dev_2017/blog/asset/css/tranquil-heart.min.css">
    <style media="screen">
    body { margin: 0; padding: 0; }
    div#wrapper { width: 100%; }
    div#wrapper > main { width: 100%; margin: 0; padding: 0; }
    div#wrapper > main > div#article {
        padding: 5vh 5%;
        min-height: 100vh;
        margin: 0;
    }
    div#wrapper > main > div#article > div#wmd-preview { width: 100%; }
    code.prettyprint { padding: 1px 4px; }
    div#wrapper > main > div#article > div#wmd-preview table,
    div#wrapper > main > div#article > div#wmd-preview table * {
        border: 1px solid black;
        border-collapse: collapse;
        table-layout: fixed;
    }
    div#wrapper > main > div#article > div#wmd-preview table td,
    div#wrapper > main > div#article > div#wmd-preview table th {
        padding: 5px;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
    }
    div#wrapper > main > div#article > div#wmd-preview table th code span,
    div#wrapper > main > div#article > div#wmd-preview table td code span { border: none; }
    div#wrapper > main > div#article > div#wmd-preview ul,
    div#wrapper > main > div#article > div#wmd-preview ol { margin-left: 40px; }
    i { font-family: 'Font Awesome 5 Pro' !important; width: initial !important; }
    div#wrapper > main > div#article > div#wmd-preview table th code.full,
    div#wrapper > main > div#article > div#wmd-preview table td code.full {
        width: 100%;
        display: block;
        box-sizing: border-box;
        overflow: visible;
    }
    </style>
    <script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
    <script src="../../websites/aym_dev_2017/blog/asset/js/view.js"></script>
    <title><?php echo $title; ?></title>
</head>
<body onload="PR.prettyPrint()">
    <span id="wmd-input"></span>
    <div id="wrapper">
        <main>
            <div id="article">
                <div id="wmd-preview">
                    <?php echo $content; ?>
                </div>
            </div>
        </main>
    </div>
</body>
</html>