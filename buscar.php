<?php

require("db.php");


function checkValues($value)
{
	 // Use this function on all those values where you want to check for both sql injection and cross site scripting
	 //Trim the value
	 $value = trim($value);
	 
	// Stripslashes
	if (get_magic_quotes_gpc()) {
		$value = stripslashes($value);
	}
	
	 // Convert all &lt;, &gt; etc. to normal html and then strip these
	 $value = strtr($value,array_flip(get_html_translation_table(HTML_ENTITIES)));
	
	 // Strip HTML Tags
	 $value = strip_tags($value);
	
	// Quote the value
	$value = mysql_real_escape_string($value);
	return $value;
	
}	


   function pagination($query, $termt, $filter, $per_page = 10,$page = 1 ){        
    	$total = mysql_num_rows(mysql_query($query));
        $adjacents = "2"; 

    	$page = ($page == 0 ? 1 : $page);  
    	$start = ($page - 1) * $per_page;								
		
    	$prev = $page - 1;							
    	$next = $page + 1;
        $lastpage = ceil($total/$per_page);
    	$lpm1 = $lastpage - 1;
    	
    	$pagination = "";
    	if($lastpage > 1)
    	{	
    		$pagination .= "<ul class='pagination-list'>";
                    //$pagination .= "<li class='details'>Page $page of $lastpage</li>";
            
            if ($page != 1){ 
            	$pagination.= "<li><a href='#' data-page='1' data-filter='$filter' data-term='$termt'><i class='icon-arrow-left'></i></a></li>";
                $pagination.= "<li><a href='#' data-page='$prev' data-filter='$filter' data-term='$termt'><i class='icon-chevron-left'></i></a></li>";
            }else{
            	$pagination.= "<li class='active'><a href='#' data-page='1' data-filter='$filter' data-term='$termt'><i class='icon-arrow-left'></i></a></li>";
                $pagination.= "<li class='active'><a href='#' data-page='$prev' data-filter='$filter' data-term='$termt'><i class='icon-chevron-left'></i></a></li>";
            }        
                    
    		if ($lastpage < 7 + ($adjacents * 2))
    		{	
    			for ($counter = 1; $counter <= $lastpage; $counter++)
    			{
    				if ($counter == $page)
    					$pagination.= "<li><a class='current' href='#' data-page='$counter' data-filter='$filter' data-term='$termt'>$counter</a></li>";
    				else
    					$pagination.= "<li><a href='#' data-page='$counter' data-filter='$filter' data-term='$termt'>$counter</a></li>";					
    			}
    		}
    		elseif($lastpage > 5 + ($adjacents * 2))
    		{
    			if($page < 1 + ($adjacents * 2))		
    			{
    				for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
    				{
    					if ($counter == $page)
    						$pagination.= "<li class='active'><a href='#' data-page='$counter' data-filter='$filter' data-term='$termt'>$counter</a></li>";
    					else
    						$pagination.= "<li><a href='#' data-page='$counter' data-filter='$filter' data-term='$termt'>$counter</a></li>";					
    				}
    				$pagination.= "<li class='dot disabled'><a href='#'>&hellip;</a></li>";
    				$pagination.= "<li><a href='#' data-page='$lpm1' data-filter='$filter' data-term='$termt'>$lpm1</a></li>";
    				$pagination.= "<li><a href='#' data-page='$lastpage' data-filter='$filter' data-term='$termt'>$lastpage</a></li>";		
    			}
    			elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
    			{
    				$pagination.= "<li><a href='#' data-page='1' data-filter='$filter' data-term='$termt'>1</a></li>";
    				$pagination.= "<li><a href='#' data-page='2' data-filter='$filter' data-term='$termt'>2</a></li>";
    				$pagination.= "<li class='dot disabled'><a href='#'>&hellip;</a></li>";
    				for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
    				{
    					if ($counter == $page)
    						$pagination.= "<li class='active'><a href='#' data-page='$counter' data-filter='$filter' data-term='$termt'>$counter</a></li>";
    					else
    						$pagination.= "<li><a href='#' data-page='$counter' data-filter='$filter' data-term='$termt'>$counter</a></li>";					
    				}
    				$pagination.= "<li class='dot disabled'><a href='#'>&hellip;</a></li>";
    				$pagination.= "<li><a href='#' data-page='$lpm1' data-filter='$filter' data-term='$termt'>$lpm1</a></li>";
    				$pagination.= "<li><a href='#' data-page='$lastpage' data-filter='$filter' data-term='$termt'>$lastpage</a></li>";		
    			}
    			else
    			{
    				$pagination.= "<li><a href='#' data-page='1' data-filter='$filter' data-term='$termt'>1</a></li>";
    				$pagination.= "<li><a href='#' data-page='2' data-filter='$filter' data-term='$termt'>2</a></li>";
    				$pagination.= "<li class='dot disabled'><a href='#'>&hellip;</a></li>";
    				for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
    				{
    					if ($counter == $page)
    						$pagination.= "<li class='active'><a href='#' data-page='$counter' data-filter='$filter' data-term='$termt'>$counter</a></li>";
    					else
    						$pagination.= "<li><a href='#' data-page='$counter' data-filter='$filter' data-term='$termt'>$counter</a></li>";					
    				}
    			}
    		}
    		
    		if ($page < $counter - 1){ 
    			$pagination.= "<li><a href='#' data-page='$next' data-filter='$filter' data-term='$termt'><i class='icon-chevron-right'></i></a></li>";
                $pagination.= "<li><a href='#' data-page='$lastpage' data-filter='$filter' data-term='$termt'><i class='icon-arrow-right'></i></a></li>";
    		}else{
    			$pagination.= "<li class='active'><a href='#' data-page='$lastpage' data-filter='$filter' data-term='$termt'><i class='icon-chevron-right'></i></a></li>";
                $pagination.= "<li class='active'><a href='#' data-page='$lastpage' data-filter='$filter' data-term='$termt'><i class='icon-arrow-right'></i></a></li>";
            }
    		$pagination.= "</ul>\n";		
    	}
    
    
        return $pagination;
    } 
    
    
$aterm = $termt = checkValues($_REQUEST['term']);


$term = '';

foreach (explode(" ", $aterm) as $value) {
    $term .= "+$value* ";
}


$page = $_REQUEST['page'];
$filter = $_REQUEST['filter'];

//echo "filter: $filter \n";

$per_page = 10;


$arraySearch = explode(" ", $termt);
$arrayFields = array("eurocode", "descripcion", "medidas");
$countSearch = count($arraySearch);
$a = 0;
$b = 0;
$query = "SELECT nombre, eurocode, descripcion, medidas  FROM productos p INNER JOIN categorias c ON p.categoria = c.id WHERE ((";
$countFields = count($arrayFields);
while ($a < $countFields)
{
  while ($b < $countSearch)
  {
    $query = $query."$arrayFields[$a] LIKE '%$arraySearch[$b]%'";
    $b++;
    if ($b < $countSearch)
    {
      $query = $query." AND ";
    }
  }
  $b = 0;
  $a++;
  if ($a < $countFields)
  {
    $query = $query.") OR (";
  }
}
$query = $query."))";

$filters = array(1,2,3,4,5);
if (in_array($filter, $filters)) {
	$query .= " AND c.id = $filter";
}

$query .= " ORDER BY nombre, eurocode, descripcion, medidas";

//echo $query;


$sqlc = $query;

//echo($sqlc);
$rsdc = mysql_query($sqlc);
$count = mysql_num_rows($rsdc);
$pages = ceil($count/$per_page);

$start = ($page-1)*$per_page;
$sql = $query .= " limit $start,$per_page";

//echo $sql;

$rsd = mysql_query($sql);
?>

<div class="pagination pagination-centered">
<!--	<ul id="pagination-list">
		<li<?php if ($page == 1): ?> class="disabled" <?php endif; ?>><a href="#" data-page="1" data-filter="<?php echo $filter; ?>" data-term="<?php echo $termt; ?>"><i class="icon-arrow-left"></i></a></li>
		<li<?php if ($page == 1): ?> class="disabled" <?php endif; ?>><a href="#" data-page="<?php echo max(1, $page-1); ?>" data-filter="<?php echo $filter; ?>" data-term="<?php echo $termt; ?>"><i class="icon-chevron-left"></i></a></li>
		<?php
		//Show page links
		for($i=1; $i<=$pages; $i++)
		{
		?>
			<li <?php if ($page == $i): ?> class="active" <?php endif; ?>><a href="#" data-page="<?php echo $i; ?>" data-filter="<?php echo $filter; ?>" data-term="<?php echo $termt; ?>"><?php echo $i; ?></a></li>
		<?php
		}
		?>
		<li<?php if ($page == $pages): ?> class="disabled" <?php endif; ?>><a href="#" data-page="<?php echo min($pages, $page+1); ?>" data-filter="<?php echo $filter; ?>" data-term="<?php echo $termt; ?>"><i class="icon-chevron-right"></i></a></li>
		<li<?php if ($page == $pages): ?> class="disabled" <?php endif; ?>><a href="#" data-page="<?php echo $pages; ?>" data-filter="<?php echo $filter; ?>" data-term="<?php echo $termt; ?>"><i class="icon-arrow-right"></i></a></li>
	</ul>-->
	
	<?php print pagination($sqlc, $termt, $filter, $per_page, $page); ?>
</div>

<table class="table table-bordered table-striped" id="tabla-resultados">
  <thead>
    <tr>
    	<th>CATEGORÍA</th>
      <th>EUROCODE</th>
      <th>DESCRIPCIÓN</th>
      <th class="medidas">MEDIDAS</th>
    </tr>
  </thead>
  <tbody>
  		<?php
  		//Print the contents
  		
  		while($row = mysql_fetch_assoc($rsd))
  		{
  		?>
			<tr>
			  <td class="categoria"><?php print $row['nombre'] ?></td>
			  <td class="eurocode"><?php print $row['eurocode'] ?></td>
			  <td class="descripcion"><?php print $row['descripcion'] ?></td>
			  <td class="medidas"><?php print $row['medidas'] ?></td>
			</tr>
  		<?php
  		} //while
  		?>    
  </tbody>
</table>

<div class="pagination pagination-centered">
<!--<ul id="pagination-list">
	<li<?php if ($page == 1): ?> class="disabled" <?php endif; ?>><a href="#" data-page="1" data-filter="<?php echo $filter; ?>" data-term="<?php echo $termt; ?>"><i class="icon-arrow-left"></i></a></li>
	<li<?php if ($page == 1): ?> class="disabled" <?php endif; ?>><a href="#" data-page="<?php echo max(1, $page-1); ?>" data-filter="<?php echo $filter; ?>" data-term="<?php echo $termt; ?>"><i class="icon-chevron-left"></i></a></li>
	<?php
	//Show page links
	for($i=1; $i<=$pages; $i++)
	{
	?>
		<li <?php if ($page == $i): ?> class="active" <?php endif; ?>><a href="#" data-page="<?php echo $i; ?>" data-filter="<?php echo $filter; ?>" data-term="<?php echo $termt; ?>"><?php echo $i; ?></a></li>
	<?php
	}
	?>
	<li<?php if ($page == $pages): ?> class="disabled" <?php endif; ?>><a href="#" data-page="<?php echo min($pages, $page+1); ?>" data-filter="<?php echo $filter; ?>" data-term="<?php echo $termt; ?>"><i class="icon-chevron-right"></i></a></li>
	<li<?php if ($page == $pages): ?> class="disabled" <?php endif; ?>><a href="#" data-page="<?php echo $pages; ?>" data-filter="<?php echo $filter; ?>" data-term="<?php echo $termt; ?>"><i class="icon-arrow-right"></i></a></li>
</ul>-->
<?php print pagination($sqlc, $termt, $filter, $per_page, $page); ?>
</div>