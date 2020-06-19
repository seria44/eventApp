<?php
   include_once ($_SERVER["DOCUMENT_ROOT"] . "/header_menu.php");
   require_once($_SERVER["DOCUMENT_ROOT"] . "/config/db_config.php");
?>
	<link rel="stylesheet" href="/css/normalize.css" />
<!-- 	<link rel="stylesheet" href="/css/board.css" /> -->
<?php
    $bNo = $_GET['no'];
    $sql = 'select title, content, date, hit, id from board_free where no = ' . $bNo;
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
?>
<style>
/* 글쓰기 */

#boardWrite table {width:720px}
#boardWrite th {width:100px;padding:5px;text-align:right;vertical-align: top}
#boardWrite td {width:620px;padding:5px}

#boardWrite #id {width:180px}
#boardWrite #password {width:180px}
#boardWrite #title {width:400px}
#boardWrite #content {width:550px;height:300px}

#boardWrite .btnSet {text-align:center}
</style>
<div class="contents_body">
	<div class="boader-list">
        <article class="boardArticle">
        	<div id="boardView"> 
            	<table id="boardWrite">
    				<tbody>
    					<tr>
    						<th scope="row"><label for="bID">아이디</label></th>
    						<th><?php echo $row['id']?></th>
    					</tr>
    					<tr>
    						<th scope="row"><label for="bBoardDate">작성일</label></th>
    					 	<th id="boardDate"> <?php echo subStr($row['date'],0,10)?></th>
    					</tr>
    					<tr>
    						<th scope="row"><label for="bContent">내용</label></th>
    						  <th id="boardContent"><?php echo $row['content']?></th>
    					</tr>
    				</tbody>
        		</table>
        	</div>
		</article>
	</div>
</div>

<?php
include_once ($_SERVER["DOCUMENT_ROOT"] . "/foot.php");
?>

