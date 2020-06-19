<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/config/db_config.php");

$id = $_POST['id'];
$password = $_POST['password'];
$title = $_POST['title'];
$content = $_POST['content'];
$date = date('Y-m-d H:i:s');
$sql = 'insert into board_free ( title, content, date, hit, id, password) values( "' . $title . '", "' . $content . '", "' . $date . '", 0, "' . $id . '", password("' . $password . '"))';
$result = $conn->query($sql);

if ($result) { // query가 정상실행 되었다면,
    $msg = "정상적으로 글이 등록되었습니다.";
    $bNo = $conn->insert_id;
    $replaceURL = './board_view.php?no=' . $bNo;
} else {
    $msg = "글을 등록하지 못했습니다.";
    ?>
    <script>
    	alert("<?php echo $msg?>");
    	history.back();
    </script>
<?php
}

?>

<script>
	alert("<?php echo $msg?>");
	location.replace("<?php echo $replaceURL?>");

</script>
