<?php

header ( "Content-type:text/html;charset=utf-8" );

$link = mysqli_connect('127.0.0.1','root','','zjrh');

if(!$link) {
    printf("Can't connect to MySQL Server. Errorcode: %s ", mysqli_connect_error());

    exit;
}

$result = mysqli_query($link,'SELECT * FROM zs');
echo "<th>
        <td>&nbsp;序号</td>
        <td>&nbsp;名称</td>
        <td>&nbsp;备注</td>
        <td>&nbsp;状态</td>
        <td>&nbsp;修改时间</td>
        <td>&nbsp;借阅时间</td>
        <td>&nbsp;状态</td>
        <td>&nbsp;操作</td>
        <td><button class='add'>添加</button></td>
      </th><hr>";

$row = mysqli_fetch_all($result);

foreach($row as $key=>$val){
//    print_r($val);
     $st = $val['3'] == 0?'借出':'已归还';
    echo "<th>
        <td><label>&nbsp;".$val['0']."</label></td>
        <td><label>&nbsp;".$val['1']."</label></td>
        <td><label>&nbsp;".$val['2']."</label></td>
        <td><label>&nbsp;".$st."</label></td>
        <td>&nbsp;".$val['4']."</td>
        <td>&nbsp;".$val['5']."</td>
        <td><button class='edit'>改".$val['0'].",".$val['3']."<label hidden>".$val['1'].",".$val['2']."</label></button></td>
      </th><hr>";
}


mysqli_close($link);

?>
<script src="http://libs.baidu.com/jquery/1.11.3/jquery.min.js"></script>
<script src="./layer-master/src/layer.js"></script>

<script>

        //添加
        $('.add').click(function(){

            layer.open({
                type: 1,
                skin: 'layui-layer-rim', //加上边框
                area: ['420px', '240px'], //宽高
                content: "名称<input type='text' name='name' class='name'><br>" +
                "备注<input type='text' name='content' class='content'><br>" +
                "<input type='radio' name='status' value='1' checked/><label>归还</label>" +
                "<input type='radio' name='status' value='0'/><label>借出</label><br>" +
                "<button class='confirm'>确认</button><br>"
            });
            //确认
            $('.confirm').click(function(){

                $.get(
                    "add.php",
                    {
                        name: $('.name').val(),
                        content: $('.content').val() ,
                        status: $('input[name="status"]:checked').val()
                    },

                    function(data){
                        if(data){

                            alert(data);
                            window.location.href="zsb.php";//需要跳转的地址
                        }else{

                            alert("失败2");
                        }
                    }

                );

            });



        });


        //编辑
        $('.edit').click(function(){
            var txt = $(this).children().html();
            var txt2 = $(this).text();
            //位置
            var no =  txt.indexOf(',');

            var name = txt.substring(0,no);
            //长度
            var lenth = txt.length;
            var content = txt.substring(no+1,lenth);
            var status = txt2.substring(txt2.indexOf(',')+1,txt2.indexOf(',')+2);

//            alert($(this).find('label').html());

            layer.open({
                type: 1,
                skin: 'layui-layer-rim', //加上边框
                area: ['420px', '240px'], //宽高
                content: "名称<input type='text' name='name' class='name' value="+name+"><br>" +
                "备注<input type='text' name='content' class='content' value="+content+"><br>" +
                "<input type='radio' name='status' value='1' "+ status +"/><label>归还</label>" +
                "<input type='radio' name='status' value='0' "+ status +"/><label>借出</label><br>" +
                "<button class='confirm'>确认</button><br>"
            });

            $('.confirm').click(function (){


            });



        });



</script>



