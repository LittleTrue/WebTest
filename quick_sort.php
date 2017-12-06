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
    
    
    //输出数组
   function show($arr_sort){
       if(count($arr_sort)>0){
    //倒序打印
    echo "<br><br>排序后10个随机数分别为：<br>";
    for($i=9;$i>=0;$i--){
        if($i<0){break;}
        echo "$arr_sort[$i] <br>";
    }
    }
   }

    //快速排序算法 
    function quickSort($arr_sort, $startIndex, $endIndex){  
        if($startIndex < $endIndex){  
            $value = $arr_sort[$startIndex];  // 枢轴 
            $low = $startIndex + 1;//指向队头  
            $high= $endIndex;  //指向队尾
              
            while ($low != $high ){  
                // 找到比枢轴小的记录
                while ($arr_sort[$high] > $value && $high>$low){  
                    $high--;  
                }  
                // 找到比枢轴大的记录 
                while ($arr_sort[$low] < $value && $low < $high){  
                    $low++;  
                }  
                //非正序则移位
                if($high>$low){  
                    $temp =$arr_sort[$low];  
                    $arr_sort[$low] = $arr_sort[$high];  
                    $arr_sort[$high] = $temp;  
                }  
            }  
              
            // 正序则不移位
            if($arr_sort[$low] < $value){  
                $arr_sort[$startIndex] = $arr_sort[$low];  
                $arr_sort[$low] = $value;  
            }  
            //递归调用进行下一趟排序
            $arr_sort = quickSort($arr_sort, $startIndex, $low - 1);  
            $arr_sort = quickSort($arr_sort, $low + 1, $endIndex);  
            return $arr_sort;  
         } else{  
            return $arr_sort;  
          }  
        }

    //快速排序开始
    $arr_sort = quickSort($arr_sort, 0, count($arr_sort) - 1);  
    //打印输出
    show($arr_sort);
        //另外，还可直接使用arsort() 函数进行排序
?>
</div>
</body>
</html>