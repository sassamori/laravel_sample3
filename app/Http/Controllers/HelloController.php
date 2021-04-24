<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

global $head,$style,$body,$end;
$head = '<html><head>';
$style = <<<EOF
<style>
body{font-size:16pt; color:#999;}
h1{font-size:100pt; text-align:right; color:#eee; margin:-40px 0 -50px 0;}
</style>
EOF;
$body = '</head><body>';
$end = '</body></html>';

function tag($tag,$txt){
    return "<{$tag}>".$txt."</{$tag}>";
}

class HelloController extends Controller
{
    public function __invoke(){
        return <<<EOF
<html>
<head>
<title>Hello</title>
<style>
body{font-size:16pt;color:#999;}
h1{font-size:30pt;text-align:right;color:#eee;margin:-15px 0 0 0;}
</style>
</head>
<body>
    <h1>Single Action</h1>
    <p>これは、シングルアクションコントローラのアクションです。</p>
</body>
</html>
EOF;
    }
}
