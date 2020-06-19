<?php
   include_once ($_SERVER["DOCUMENT_ROOT"] . "/header_menu.php");
   require_once($_SERVER["DOCUMENT_ROOT"] . "/config/db_config.php");
?>
	<link rel="stylesheet" href="/css/normalize.css" />
	<link rel="stylesheet" href="/css/board.css" />

<?php
	$sql = 'select * from board_free order by no desc';
	$result = $conn->query($sql);
// 	while($row = $result->fetch_assoc())
// 	{
// 		$datetime = explode(' ', $row['date']);
// 		$date = $datetime[0];
// 		$time = $datetime[1];
// 		if($date == Date('Y-m-d'))
// 		    $row['date'] = $date;
// 		else
// 		    $row['date'] = $time;
?>
<div class="contents_body">
	<div class="boader-list">
		<div class="title_list" style="margin-top: 30px;">
			<ul>
				<li><a class="active" href="#home">1.학술</a></li>
				<li><a href="#">2.연구</a></li>
				<li><a href="#">3.발표</a></li>
				<li><a href="#">4.기타</a></li>
			</ul>
		</div>
		<div class="title_body2">
			<button type="button" style="margin-bottom: 20px;" id="btnInsert" onClick="location.href='board_write.php'" >등록</button>

        	<article class="boardArticle">
        		<table>
        			<thead>
        				<tr>
        					<th scope="col" class="no">번호</th>
        					<th scope="col" class="title">제목</th>
        					<th scope="col" class="author">작성자</th>
        					<th scope="col" class="date">작성일</th>
        				</tr>
        			</thead>
        			<tbody>
						<?php
						while($row = $result->fetch_assoc()){
						?>
            				<tr>
            					<td class="no"><?php echo $row['no']?></td>
            					<td class="title" style="cursor:pointer"><?php echo $row['title']?></td>
            					<td class="author"><?php echo $row['id']?></td>
            					<td class="date"><?php echo subStr($row['date'],0,10) ?></td>
            				</tr>
    					<?php
    						}
    					?>
        			</tbody>
        		</table>
			</article>
    	</div>
	</div>
	<div class="list_number">
		<div>
			<p>
			<div class="list_n_menu">
				<span class="disabled">< 이전</span> 
				<span class="current">1</span> 
				<a href="#?page=2">2</a> 
				<a href="#?page=3">3</a> 
				<a href="#?page=2">다음 ></a>
			</div>
			</p>
		</div>
	</div>
</div>

<?php
include_once ($_SERVER["DOCUMENT_ROOT"] . "/foot.php");
?>

