<form action="index.php?url=items/add" method="post">
    <input type="text" value="I have to..." onclick="this.value=''" name="todo"> <input type="submit" value="add">
</form>
<br/><br/>
<?php $number = 0?>
<?php foreach ($todo as $todoitem):?>
    <a href="index.php?url=items/view/<?php echo $todoitem['Item']['id']?>/<?php echo strtolower(str_replace(" ","-",$todoitem['Item']['item_name']))?>">
        <span>
            <?php echo ++$number?>
            <?php echo $todoitem['Item']['item_name']?>
        </span>
    </a><br/>
<?php endforeach?>