<?php
// $Id: admin.php,v 2.02f 2003/10/14 15:00:00 toshimitsu Exp $
//------------------------//
// by toshimitsu (http://www5f.biglobe.ne.jp/~domifara/)
//------------------------//
define('_AM_XPTC_PAGETITLE', '�ơ��֥����������å�(Xoops2����)');
define('_AM_XPTC_PAGECOMMENT', '<pre>
��ա����٤ƤΥơ��֥�ȹ��ܤ�����å����Ƥ��Ƥ���櫓�ǤϤ���ޤ��󡢥����å���ˡ�������Ǥ⤢��ޤ���
�ʤ������ʤä��Τ�Ƚ�ǤǤ��ʤ��Τǡ����η�̤������������������Τϴ��Ǥ���</pre>');

define('_AM_XPTC_CHECKPATTERNTITLE', '�����å��ѥ�����');
define('_AM_XPTC_CHECKTABLETITLE', '�����å���å���������');
define('_AM_XPTC_TABLEVIEWTITLE', '�ơ��֥�ꥹ�Ȱ���');
define('_AM_XPTC_TABLEVIEWNAMEM', '�ơ��֥�̾');
define('_AM_XPTC_TABLEVIECOUNTM', '���');
//------------------------//
define('_AM_XPTC_THTAGNO', '�Σ�');
define('_AM_XPTC_THTAGSQLMSG', '�ӣѣ�ʸ��������');
define('_AM_XPTC_THTAGJUDGMSG', 'Ƚ��');
define('_AM_XPTC_THTAGCOMMSG', '������');
define('_AM_XPTC_THTAGCOMMAND', ' ');
//------------------------//
define('_AM_XPTC_ERRORMSG', 'ERROR');
define('_AM_XPTC_KEIKOKUMSG', '�ٹ�');
define('_AM_XPTC_NOTICE', '����');
define('_AM_XPTC_CHECKOKMSG', '���顼̵�����ϣ�');
define('_AM_XPTC_CHECKNGMSG', '<b>���顼��ͭ��ޤ�����ǧ���Ƥ�������������</b>');
define('_AM_XPTC_WARNINGOKMSG', '�ٹ�̵�����ϣ�');
define('_AM_XPTC_WARNINGNGMSG', '<b>�ٹ�ͭ��ޤ�����ǧ���Ƥ�������������</b>');
define('_AM_XPTC_NOTICEOKMSG', '����̵�����ϣ�');
define('_AM_XPTC_NOTICENGMSG', '<b>���Τ�ͭ��ޤ�����ǧ���Ƥ�������������</b>');
//------------------------//
$strdefcomment =array() ;
$strdefshorimsg =array() ;
$strdefbugcause =array() ;
$strdefbugcondition =array() ;
$strdefcomment[1] = "<b>�����ͤ�NULL�ͤ������ʹ����ͤǤ�</b>" ;
$strdefcomment[2] = "<b>¾�ȤΥ���оݹ��ܤ�NULL�ͤ������ʹ����ͤǤ�</b>" ;
$strdefcomment[3] = "<b>��=0��Xoops�ǤϹ����ͤȤ���̵��</b>" ;
$strdefcomment[4] = "<b>�ͤ�ɬ�פǤ���NULL�ͤ����������ʹ����ͤǤ�</b>" ;
$strdefcomment[5] = "<b>����Υ��롼��(1,2,3)�ι����ͤȤ���ɬ�פǤ�</b>" ;
$strdefcomment[6] = "<b>xoops�����Ѥˤ����ͤΥǡ����Ȥ���ɬ�פǤ�</b>" ;
$strdefcomment[7] = "<b>�����롼�פǥ����ƥ�������ɤ߹��߸���ɬ�פǤ�</b>" ;
$strdefcomment[8] = "<b>���ѽ���ʤ�̵���ʥ��롼���ͤ�����ޤ�</b>" ;
$strdefcomment[9] = "<b>���ѽ���ʤ�̵���ʥ⥸�塼���ͤ�����ޤ�</b>" ;
$strdefcomment[10]= "<b>���ѽ���ʤ�̵���ʥ֥�å��ͤ�����ޤ�</b>" ;
$strdefcomment[11] = "<b>���ѽ���ʤ�̵���ʥ桼�����ͤ�����ޤ�</b>" ;
$strdefcomment[12] = "<b>����ǡ����ͤ��ʤ���</b>\n" ;
$strdefcomment[13] = "<b>�ɤ��Υ��롼�פˤ����äƤ��ʤ��桼���������ޤ�</b>\n" ;
$strdefcomment[14] = "<b>���ѽ���ʤ�̵���ʥ��Х����ͤ�����ޤ�</b>" ;
$strdefcomment[15] = "<b>���ѽ���ʤ�̵���ʥƥ�ץ졼���ͤ�����ޤ�</b>" ;
$strdefcomment[16] = "<b>���ѽ���ʤ�̵����configcategory�ͤ�����ޤ�</b>" ;
$strdefcomment[17] = "<b>���ѽ���ʤ�̵����CONFIG�ͤ�����ޤ�</b>" ;
$strdefcomment[18] = "<b>�⥸�塼���ȥåץڡ����ˤ�����ϡ������롼�פˡ֥⥸�塼�륢���������¡פ�ɬ�פǤ�</b>" ;
$strdefcomment[19] = "<b>���ѽ���ʤ��С��ʡ��ͤ�����ޤ�</b>" ;
$strdefcomment[20] = "<b>���ѽ���ʤ�̵���ʥ��᡼�����ƥ����ͤ�����ޤ�</b>" ;
$strdefcomment[21] = "<b>�������Υ桼�����ͤ�¸�ߤ��ޤ���</b>" ;
$strdefcomment[22] = "<b>������Υ桼�����ͤ�¸�ߤ��ޤ���</b>" ;
$strdefcomment[23] = "<b>�����Ȥʤ��ͤ���ʣ���Ƥ��ޤ����ɤ����Ȥ�������Ǥ��ޤ���</b>" ;
$strdefcomment[24] = "<b>Ʊ���ƥ�ס����ͤ�ʣ������ޤ�</b>" ;
$strdefcomment[25] = "<b>���Υ桼�����Υ��Х����ϥ��Х����ޥ͡����㡼����������Ƥޤ�</b>" ;
//------------------------//
$strdefshorimsg[1] = "<b>������뤫���ޤ��ϡ��������ͤ�����</b>" ;
$strdefshorimsg[2] = "<b>�������ͤ��ɲä��뤫�����åץǥ��ȡ��ޤ��Ϻƥ��󥹡��ȥ뤬ɬ��</b>" ;
$strdefshorimsg[3] = "<b>�֥��롼�״����פǺƹ��ۤ��뤫���ޤ��Ϻ��</b>" ;
$strdefshorimsg[4] = "<b>�֥��롼�״����פǺƹ��ۤ��뤫���ޤ����ɲ�</b>" ;
$strdefshorimsg[5] = "<b>�������ͤ������ʤޤ��ϡ����ˤ������</b>" ;
$strdefshorimsg[6] = "<b>�������ͤ������ʺ�����ƤϤ����ޤ����</b>" ;
$strdefshorimsg[7] = "<b>�������ͤ��ɲä��뤫���⥸�塼�륢�åץǥ��ȡ��ޤ��ϥ⥸�塼�륢�å׺ƥ��󥹡��ȥ뤬ɬ��</b>" ;
$strdefshorimsg[8] = "<b>���Υƥ�ץ졼�Ȥ��Խ��򤹤��ʣ���Υ֥�å��˱ƶ����ޤ�</b>" ;
$strdefshorimsg[9] = "<b>�������ͤ����� : blank.gif </b>" ;
//------------------------// 
$strdefbugcause[1] = "<b>ȯ������������</b>" ;
$strdefbugcause[2] = "<b>ȯ���������⥸�塼�륢�󥤥����ȥ�ư��Х�</b>" ;
$strdefbugcause[3] = "<b>ȯ�������������������٤ƥ��դˤʤäƤ���</b>" ;
$strdefbugcause[4] = "<b>ȯ��������ɬ�פʸ��¤����ꤷ�Ƥ��ʤ�</b>" ;
$strdefbugcause[5] = "<b>ȯ��������Xoops2.0.5�ޤǴ��ΥХ�����������Ρ������ǽ�ʥơ��ޡפ�̵���Ȥ����ơ����ͤΤʤ��桼�����ϥơ��ޤ�����Ǥ��ʤ�</b>" ;
$strdefbugcause[5] .= "<br><b>Xoops2.0.5�ʸ���ѹ����Ƥ���Уϣˡ��ޤ��ϡ��Х���������ޤǤϡ���������Ρ������ǽ�ʥơ��ޡפ���İʾ���꤬�ɾ��ϽФʤ�</b>" ;
//------------------------// 
$strdefbugcondition[1] = "<b>�ɾ�������</b>" ;
$strdefbugcondition[2] = "<b>�ɾ������Υ֥�å����������̤�ɽ������ʤ�</b>" ;
$strdefbugcondition[3] = "<b>�ɾ������Υ֥�å����֥�å��������̤�ɽ������ʤ�</b>" ;
$strdefbugcondition[4] = "<b>�ɾ����ȥåפΥڡ�����ɽ������ʤ�</b>" ;
$strdefbugcondition[5] = "<b>�ɾ������Υ֥�å���ɽ������ʤ�</b>" ;
//------------------------// 
?>