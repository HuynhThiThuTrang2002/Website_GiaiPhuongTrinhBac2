<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GIẢI PT BẬC 2</title>
</head>
<body>
<?php
    $result='';
    if(isset($_POST['calculate'])){
        $a=isset($_POST['a']) ? $_POST['a']:'';
        $b=isset($_POST['b']) ? $_POST['b']:'';
        $c=isset($_POST['c']) ? $_POST['c']:'';

        $detal=($b*$b) - (4*$a*$c);
        if($detal<0){
            $result='Phương trình vô nghiệm';
        }else if($detal==0){
            $result='Phương trình có nghiệm kép x1 = x2 = '.(-$b /(2*$a));
        }else{
            $result='Phương trình có 2 nghiệm phân biệt x1 = '.( (-$b + sqrt($detal))/ (2*$a));
            $result.=', x2 = '.( (-$b - sqrt($detal))/ (2*$a));
        }
    }
?>
    <h1>Giải phương trình bậc hai</h1>
    <form method="post">
        <input type="text" style="width: 20px; padding: 10px" name="a" value="">x <sup>2</sup>
        +
        <input type="text" style="width: 20px; padding: 10px" name="b" value="">x
        +
        <input type="text" style="width: 20px; padding: 10px" name="c" value="">
        = 0
        <br/>
        <br/>
        <input type="submit" name="calculate" value="Tính" style="padding: 10px">
        <h3>Kết quả</h3>
        <?php echo $result; ?>
    </form>
</body>
</html>