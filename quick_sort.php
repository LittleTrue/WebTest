<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>qucik_sort</title>
</head>
<style>
.content{
    text-align:center;
    margin:0 auto;
    width="500px";
    height="500px";
    border-style: solid
}
</style>
<body>
    <div class="content"
    <p>快速排序算法：</p>
    <?php

    //定义排列数组
    $arr_sort=array();

    //生成随机数函数
  
       while(count($arr_sort)<10)
    { //使用array_unique函数生成随机数
     $arr_sort[]=rand(1,100);
     $arr_sort=array_unique($arr_sort);
    }
    //打印
    echo "生成10个随机数为：";
    foreach ($arr_sort as $value) {
        echo "$value &nbsp";
      }
    
    

    //输出随机数函数
   function show($arr_sort){
       if(count($arr_sort)>0){
    //打印
    echo "<br><br>排序后10个随机数分别为：<br>";
    foreach ($arr_sort as $value) {
        echo "$value <br>";
      }
    }
    }

  
    //快速排序开始
    rsort($arr_sort);
    //输出结果
    show($arr_sort);
?>
</div>
</body>
</html>