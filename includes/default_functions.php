<?php

function get_rsltset($qry)
{  

//echo $qry; exit ; 
	
	if(!empty($qry))
	{
		$result= @mysql_query($qry);
		$i = 0;$arr=array();$j=0;
		while ($i < @mysql_num_fields($result)) {
			$meta = @mysql_fetch_field($result, $i);
			if (!$meta) {
				echo "No information available<br />\n";
			}
			$field_name[]=$meta->name;
		$i++;
		}
		while($row= @mysql_fetch_array($result))
		{
			foreach($field_name as $key => $val)
			{
				$arr[$j][$val]=$row[$val];
			}
			$j++;
		}
		@mysql_free_result($result);
		return $arr;
	}
}

function query($query)
{
	if(!empty($query))
	{
		if(@mysql_query($query))
		{
			return true;
		}
		else
		{
			return mysql_error();
		}
	}}

function get_num_rows($query)
{
	if(!empty($query))
	{
		if($rs= @mysql_query($query))
		{
			return 	@mysql_num_rows($rs);
		}
		else
		{
			return mysql_error();
		}
	}}

function getPagingQuery($sql, $itemPerPage = 10)
{
	if (isset($_GET['page']) && (int)$_GET['page'] > 0) {
		$page = (int)$_GET['page'];
	} else {
		$page = 1;
	}
	
	// start fetching from this row number
	$offset = ($page - 1) * $itemPerPage;

	return $sql . " LIMIT $offset, $itemPerPage";
	}
	
function getPagingLink($sql, $itemPerPage = 10,$strGet)
{

	$result        = mysql_query($sql) or die(mysql_error());
	$pagingLink    = '';
	$totalResults  = @mysql_num_rows($result);
	$totalPages    = ceil($totalResults / $itemPerPage);
			// how many link pages to show
	$numLinks      = 10;
	// create the paging links only if we have more than one page of results
	if ($totalPages > 1) {
			$self = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] ;
		//print "asddf".$self;
				if (isset($_GET['page']) && (int)$_GET['page'] > 0) {
			$pageNumber = (int)$_GET['page'];
		} else {
			$pageNumber = 1;
		}
		
		// print 'previous' link only if we're not
		// on page one
		if ($pageNumber > 1) {
			$page = $pageNumber - 1;
			if ($page > 1) {
				$prev = " <a href=\"$self?page=$page&$strGet\" class=\"heading2\">[Prev]</a> ";
			} else {
				$prev = " <a href=\"$self?$strGet\" class=\"heading2\">[Prev]</a> ";
			}	
				
			$first = " <a href=\"$self?$strGet\" class=\"heading2\">[First]</a> ";
		} else {
			$prev  = ''; // we're on page one, don't show 'previous' link
			$first = ''; // nor 'first page' link
		}
	
		// print 'next' link only if we're not
		// on the last page
		if ($pageNumber < $totalPages) {
			$page = $pageNumber + 1;
			$next = " <a href=\"$self?page=$page&$strGet\" class=\"heading2\">[Next]</a> ";
			$last = " <a href=\"$self?page=$totalPages&$strGet\" class=\"heading2\">[Last]</a> ";
		} else {
			$next = ''; // we're on the last page, don't show 'next' link
			$last = ''; // nor 'last page' link
		}

		$start = $pageNumber - ($pageNumber % $numLinks) + 1;
		$end   = $start + $numLinks - 1;		
		
		$end   = min($totalPages, $end);
		
		$pagingLink = array();
		for($page = $start; $page <= $end; $page++)	{
			if ($page == $pageNumber) {
			    
				$pagingLink[] = " $page ";   // no need to create a link to current page
			} else {
				if ($page == 1) {
				  
					$pagingLink[] = " <a href=\"$self?$strGet\" class=\"heading2\">$page</a> ";
				} else {	
				 
					$pagingLink[] = " <a href=\"$self?page=$page&$strGet\" class=\"heading2\">$page</a> ";
				}	
			}
	
		}
		
		$pagingLink = implode(' | ', $pagingLink);
		
		// return the page navigation link
		$pagingLink = $first . $prev . $pagingLink . $next . $last;
		
	}
	
	return $pagingLink;
}

?>