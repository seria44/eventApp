<?php
   include_once ($_SERVER["DOCUMENT_ROOT"] . "/header_menu.php");
   require_once($_SERVER["DOCUMENT_ROOT"] . "/config/db_config.php");
?>
	<link rel="stylesheet" href="/css/normalize.css" />
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
    		<div id="boardWrite">
    			<form action="./write_update.php" method="post">
    				<table id="boardWrite">
    					<tbody>
    						<tr>
    							<th scope="row"><label for="bID">아이디</label></th>
    							<td class="id"><input type="text" name="id" id="id"></td>
    						</tr>
    						<tr>
    							<th scope="row"><label for="bPassword">비밀번호</label></th>
    							<td class="password"><input type="password" name="password" id="password"></td>
    						</tr>
    						<tr>
    							<th scope="row"><label for="bTitle">제목</label></th>
    							<td class="title"><input type="text" name="title" id="title"></td>
    						</tr>
    						<tr>
    							<th scope="row"><label for="bContent">내용</label></th>
    							<td class="content"><textarea name="content" id="content"></textarea></td>
    						</tr>
    					</tbody>
    				</table>
    				<div class="btnSet">
    					<button class="btnSubmit btn">작성</button>
    					<a href="/index.php" class="btnList btn">목록</a>
    				</div>
    			</form>
    		</div>
		</article>
	</div>
	
</div>

<?php
include_once ($_SERVER["DOCUMENT_ROOT"] . "/foot.php");
?>

