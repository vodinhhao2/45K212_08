<?php
 $comments=$connect->query("select*from member a join comments b on 
 a.id=b.memberid join products c on b.productid=c.id where b.status and productid=".$_Get['id']);
 if(mysqli_num_rows($comments)==0):
 echo"<section style="color: green">Chưa có bình luận</section>;
 else:
 Foreach($coments as $coment):
 ?>
 <section> style="font-weight:" ><?=$comment['username']?<>/section>
 <section> style="padding-left: 2%"><?=$comment['content']?<>/section>
<?php
 endforeach;
 endif
 ?> 