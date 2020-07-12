<?php
// $Id: xptblcheck.php,v 2.02f 2003/10/14 15:30:00 toshimitsu Exp $
//------------------------//
// by toshimitsu (http://www5f.biglobe.ne.jp/~domifara/)
//------------------------//
class xptblcheck_db_result
{
    /**
    * Database 
    * @var resource
    * var $result
    */
	var $result;

	function xptblcheck_db_result()
	{
	}

	function xptbl_getResult()
	{
		return $this->result;
	}
	function xptbl_setResult($result)
	{
		$this->result = $result;
		return true;
	}

	function xptbl_query($sql, $limit=0, $start=0)
	{	
		$db =& Database::getInstance(); 
		$ret = $db->query($sql, $limit, $start);
		$this->result = $ret;
		return $ret;
	}

	function xptbl_fetchRow($result=null)
	{
		$db =& Database::getInstance();
		if (isset($result)) {
			return $db->fetchRow($result);
		} else {
			return $db->fetchRow($this->result);
		}
	}
	function xptbl_fetchArray($result=null)
	{
		$db =& Database::getInstance(); 
		if (isset($result)) {
			return $db->fetchArray($result);
		} else {
			return $db->fetchArray($this->result);
		}
	}
	function xptbl_getRowsNum($result=null)
	{
		$db =& Database::getInstance();
		if (isset($result)) {
			return $db->getRowsNum($result);
		} else {
			return $db->getRowsNum($this->result);
		}
	}
	function xptbl_freeRecordSet($result=null)
	{
		$db =& Database::getInstance(); 
		if (isset($result)) {
			return $db->freeRecordSet($result);
		} else {
			return $db->freeRecordSet($this->result);
		}
	}
	function xptbl_prefix($tablename='')
	{
		$db =& Database::getInstance(); 
		return $db->prefix($tablename);
	}
	function xptbl_errno()
	{
		$db =& Database::getInstance(); 
		return $db->errno();
	}
	function xptbl_error()
	{
		$db =& Database::getInstance(); 
		return $db->error();
	}
	function xptbl_quoteString($str)
	{
		$db =& Database::getInstance(); 
		return $db->quoteString($str);
	}
//-------- 
    function xptbl_getfieldsnum($result)
    {
    	return @mysql_num_fields($result);
    }   
    function xptbl_field_name($result,$field_number)
    {
    	return @mysql_field_name($result,$field_number);
    }
    function xptbl_list_tables($database_name=XOOPS_DB_NAME)
    {
    	return @mysql_list_tables ($database_name);
    }
    function xptbl_tablename($result,$table_number)
    {
    	return @mysql_tablename($result,$table_number);
    }
}
?>