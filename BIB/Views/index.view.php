<?php
$headtitle = "Books";
require "components/header.php" ?>
<?php require "components/navbar.php" ?>

<ol>
<?php foreach($books as $book) { ?>
<li> <?= $book["title"] ?></li>
<?php } ?>



</ol>

<form >
<input  name='id' />
<button class='lol'>FilterbyID</button>
</form>
<form >
<input  name='name' value='<?=($_GET["name"] ?? null) ?> ' placeholder="Ievadi ID"></input>
<button class='lol'>FilterByCategory</button>
</form>
</div>
</div>
<?php require "components/footer.php" ?>