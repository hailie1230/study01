<?php
    include "../connect/connect.php";

    $youName = $_POST['youName'];
    $youText = $_POST['youText'];
    $regTime = time();

    // echo $youName;
    // echo $youText;

    $sql = "INSERT INTO websComment(youName, youText, regTime) VALUES('$youName', '$youText', '$regTime')";
    
    $result = $connect -> query($sql);
    if($result){
        echo "INSERT INTO True";
    } else {
        echo "INSERT INTO False";
    }
?>

<script>
    location.href = "../comment/comment.php#comment"; // 강의 신청하기 버튼 내용 입력후 go 버튼을 눌러도 그 페이지 유지!
</script>