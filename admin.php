<?php 
    $topics = $_REQUEST['topics'];
    $articles = $_REQUEST['articles'];
    $comments = $_REQUEST['comments'];


?>

<!DOCTYPE html> 
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<h4>MMA Analysis</h4>
<h5>Champions Corner</h5>
<body class ="topic">
<button type="topic" class="btn btn-primary">Create new topic</button>
<?php

for($index=0;$index<count($topics);$index++){
    echo "<tr><td><input type=\"radio\" name=\"topID\" value=\"".$topics[$index]->getTopID()."\"></td>";
    echo "<td>".$topics[$index]->getName()."</td>";
    echo "<td>".$topics[$index]->getDescription()."</td>";
    
}
?>
    <article class = "article">
    <button type="article" class="btn btn-primary">Create new article</button>
    
<?php

for($index=0;$index<count($articles);$index++){
    echo "<tr><td><input type=\"radio\" name=\"artID\" value=\"".$articles[$index]->getArtID()."\"></td>";
    echo "<td>".$articles[$index]->getTitle()."</td>";
    echo "<td>".$articles[$index]->getImage()."</td>";
    echo "<td>".$articles[$index]->getContent()."</td></tr>";
}
?>



    </article>
    <button type="comment" class="btn btn-primary">Comment</button>
    <?php

for($index=0;$index<count($articles);$index++){
    echo "<tr><td><input type=\"radio\" name=\"comID\" value=\"".$articles[$index]->getComID()."\"></td>";
    echo "<td>".$comments[$index]->getContent()."</td></tr>";
}
?>

    <button type="upvote" class="btn btn-primary">Upvote</button>
    <button type="downvote" class="btn btn-primary">Downvote</button>

</body>

<address>
    Product of Hunter Greenfield<br>
    Visit at:<br>
    Example.com<br>
    Class 2033-Web systems<br>
</address>


</html>