<?php
/**
 * Created by PhpStorm.
 * User: yjw
 * Date: 2018/7/14
 * Time: 21:00
 */

//日历

$year = 2018;
$month = 5;
//7月1日的时间戳
$firstDayInt = mktime(0,0,0,$month,1,$year);
//获取7月总天数
$dayInMonth = date('t',$firstDayInt);
echo $dayInMonth, '<br />';

//7月1日是星期几
$firstDay = date('w', $firstDayInt);
echo $firstDay, '<br />';

//计算7月有几周
$tmpDays = $dayInMonth + $firstDay;
$weeks = $tmpDays/7;
//周数向上取整
echo $weeks, '<br />';
echo ceil($weeks), '<br />';

/*
 * 用二维数组保存日期
 * 一维是周数
 * 二维是日期
 */

$days = [];
$dayTemp = 0;
for($i=0; $i<$weeks; $i++) {
    //给每周加上日期数
    for($j=0; $j<7; $j++) {
        //第一周需要判断当前$j是否大于等于7月1日的星期数，等于时开始计数，小于时给日期数赋值为空
        //非第一周，计数器也递增，但是需要判断计数器的值是否已经超过了本月的总天数，超过也需要赋值空
        if(($i == 0 && $j >= $firstDay)
            || ($i > 0 && $dayTemp < $dayInMonth)){
            //日期计数器加一
            $dayTemp++;
            $days[$i][$j] = $dayTemp;
        } else {
            $days[$i][$j] = '';
        }
    }
}
echo '<pre>';
print_r($days);
?>

<table border="1" width="500">
    <tr>
        <th colspan="7"><?php echo $year, "年", $month, "月"?></th>
    </tr>
    <tr>
        <th>星期日</th>
        <th>星期一</th>
        <th>星期二</th>
        <th>星期三</th>
        <th>星期四</th>
        <th>星期五</th>
        <th>星期六</th>
    </tr>
    <?php
        foreach($days as $week=>$weekDays) {
            echo '<tr>';
            foreach($weekDays as $day) {
                echo '<td>',$day,'</td>';
            }
            echo '</tr>';
        }
    ?>
</table>
