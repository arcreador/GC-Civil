<div class="uk-text-center uk-padding-small">
    <div class="uk-h2 uk-padding-small">
        Civil Engineering Student Association (CESA)
    </div>
    <div class="uk-clearfix">
        <?php
                include_once('includes/dbconnect.php');
                $query=mysqli_query($mysqli,"SELECT * FROM sub_pages WHERE uid=23");
                while($row=mysqli_fetch_array($query))
                {
                        echo $row['pageinfo'];
                        echo "<br/>";
                }
        ?>
    </div>

</div>
