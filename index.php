<?php
$param = var_export($_SERVER, true);
// $stdout= fopen( 'php://stdout', 'w' ); //標準出力
$stdout= fopen( 'logs/request.log', 'a' );  //ファイル書き出し
fwrite( $stdout, $param );
//POST
if(strtoupper($_SERVER['REQUEST_METHOD'])=="POST") {
  $param = var_export($_POST, true);
  fwrite( $stdout, $param );  
}
//JSON
$json = file_get_contents("php://input");
$contents = json_decode($json, true);
$param = var_export($contents, true);
fwrite( $stdout, $param );
