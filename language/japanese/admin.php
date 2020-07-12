<?php
// $Id: admin.php,v 2.02f 2003/10/14 15:00:00 toshimitsu Exp $
//------------------------//
// by toshimitsu (http://www5f.biglobe.ne.jp/~domifara/)
//------------------------//
define('_AM_XPTC_PAGETITLE', 'テーブルロジカルチェック(Xoops2専用)');
define('_AM_XPTC_PAGECOMMENT', '<pre>
注意：すべてのテーブルと項目をチェックしてしているわけではありません、チェック方法が万全でもありません｡
なぜそうなったのか判断できないので、この結果だけで訂正・削除するのは危険です｡</pre>');

define('_AM_XPTC_CHECKPATTERNTITLE', 'チェックパターン');
define('_AM_XPTC_CHECKTABLETITLE', 'チェックメッセージ一覧');
define('_AM_XPTC_TABLEVIEWTITLE', 'テーブルリスト一覧');
define('_AM_XPTC_TABLEVIEWNAMEM', 'テーブル名');
define('_AM_XPTC_TABLEVIECOUNTM', '件数');
//------------------------//
define('_AM_XPTC_THTAGNO', 'Ｎｏ');
define('_AM_XPTC_THTAGSQLMSG', 'ＳＱＬ文／検査値');
define('_AM_XPTC_THTAGJUDGMSG', '判定');
define('_AM_XPTC_THTAGCOMMSG', 'コメント');
define('_AM_XPTC_THTAGCOMMAND', ' ');
//------------------------//
define('_AM_XPTC_ERRORMSG', 'ERROR');
define('_AM_XPTC_KEIKOKUMSG', '警告');
define('_AM_XPTC_NOTICE', '通知');
define('_AM_XPTC_CHECKOKMSG', 'エラー無し　ＯＫ');
define('_AM_XPTC_CHECKNGMSG', '<b>エラーが有ります　確認してください　！！</b>');
define('_AM_XPTC_WARNINGOKMSG', '警告無し　ＯＫ');
define('_AM_XPTC_WARNINGNGMSG', '<b>警告が有ります　確認してください　！！</b>');
define('_AM_XPTC_NOTICEOKMSG', '通知無し　ＯＫ');
define('_AM_XPTC_NOTICENGMSG', '<b>通知が有ります　確認してください　！！</b>');
//------------------------//
$strdefcomment =array() ;
$strdefshorimsg =array() ;
$strdefbugcause =array() ;
$strdefbugcondition =array() ;
$strdefcomment[1] = "<b>キー値にNULL値は不正な項目値です</b>" ;
$strdefcomment[2] = "<b>他とのリンク対象項目にNULL値は不正な項目値です</b>" ;
$strdefcomment[3] = "<b>値=0はXoopsでは項目値として無効</b>" ;
$strdefcomment[4] = "<b>値が必要です｡NULL値や空白は不正な項目値です</b>" ;
$strdefcomment[5] = "<b>既定のグループ(1,2,3)の項目値として必要です</b>" ;
$strdefcomment[6] = "<b>xoops管理用にこの値のデータとして必要です</b>" ;
$strdefcomment[7] = "<b>全グループでシステム管理の読み込み権は必要です</b>" ;
$strdefcomment[8] = "<b>利用出来ない無効なグループ値があります</b>" ;
$strdefcomment[9] = "<b>利用出来ない無効なモジュール値があります</b>" ;
$strdefcomment[10]= "<b>利用出来ない無効なブロック値があります</b>" ;
$strdefcomment[11] = "<b>利用出来ない無効なユーザー値があります</b>" ;
$strdefcomment[12] = "<b>一件もデータ値がない？</b>\n" ;
$strdefcomment[13] = "<b>どこのグループにも入っていないユーザーがいます</b>\n" ;
$strdefcomment[14] = "<b>利用出来ない無効なアバター値があります</b>" ;
$strdefcomment[15] = "<b>利用出来ない無効なテンプレート値があります</b>" ;
$strdefcomment[16] = "<b>利用出来ない無効なconfigcategory値があります</b>" ;
$strdefcomment[17] = "<b>利用出来ない無効なCONFIG値があります</b>" ;
$strdefcomment[18] = "<b>モジュールをトップページにする場合は、全グループに「モジュールアクセス権限」が必要です</b>" ;
$strdefcomment[19] = "<b>利用出来ないバーナー値があります</b>" ;
$strdefcomment[20] = "<b>利用出来ない無効なイメージカテゴリ値があります</b>" ;
$strdefcomment[21] = "<b>送信元のユーザー値が存在しません</b>" ;
$strdefcomment[22] = "<b>送信先のユーザー値が存在しません</b>" ;
$strdefcomment[23] = "<b>キーとなる値が重複しています。どちらを使うか特定できません</b>" ;
$strdefcomment[24] = "<b>同じテンプート値が複数あります</b>" ;
$strdefcomment[25] = "<b>このユーザーのアバターはアバターマネージャーから削除されてます</b>" ;
//------------------------//
$strdefshorimsg[1] = "<b>削除するか、または、正しい値に訂正</b>" ;
$strdefshorimsg[2] = "<b>正しい値で追加するか、アップデイト、または再インスートルが必要</b>" ;
$strdefshorimsg[3] = "<b>「グループ管理」で再構築するか、または削除</b>" ;
$strdefshorimsg[4] = "<b>「グループ管理」で再構築するか、または追加</b>" ;
$strdefshorimsg[5] = "<b>正しい値に訂正（または、場合により削除）</b>" ;
$strdefshorimsg[6] = "<b>正しい値に訂正（削除してはいけません）</b>" ;
$strdefshorimsg[7] = "<b>正しい値で追加するか、モジュールアップデイト、またはモジュールアップ再インスートルが必要</b>" ;
$strdefshorimsg[8] = "<b>このテンプレートの編集をすると複数のブロックに影響します</b>" ;
$strdefshorimsg[9] = "<b>正しい値に訂正 : blank.gif </b>" ;
//------------------------// 
$strdefbugcause[1] = "<b>発生原因：不明</b>" ;
$strdefbugcause[2] = "<b>発生原因：モジュールアンイスートル動作バグ</b>" ;
$strdefbugcause[3] = "<b>発生原因：権利権がすべてオフになっている</b>" ;
$strdefbugcause[4] = "<b>発生原因：必要な権限を設定していない</b>" ;
$strdefbugcause[5] = "<b>発生原因：Xoops2.0.5まで既知バグ：一般設定の「選択可能なテーマ」が無いとき、テーマ値のないユーザーはテーマを取得できない</b>" ;
$strdefbugcause[5] .= "<br><b>Xoops2.0.5以後の変更していればＯＫ、または、バグを修正するまでは、一般設定の「選択可能なテーマ」が一つ以上指定が症状は出ない</b>" ;
//------------------------// 
$strdefbugcondition[1] = "<b>症状：不明</b>" ;
$strdefbugcondition[2] = "<b>症状：このブロックが管理画面に表示されない</b>" ;
$strdefbugcondition[3] = "<b>症状：このブロックがブロック管理画面に表示されない</b>" ;
$strdefbugcondition[4] = "<b>症状：トップのページが表示出来ない</b>" ;
$strdefbugcondition[5] = "<b>症状：このブロックが表示されない</b>" ;
//------------------------// 
?>