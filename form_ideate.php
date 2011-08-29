<?php
$txtHead = "";
$txtButton = "";
$txtVisit = "";

switch ($lang) {
case "en":
	$txtHead = "My idea:";
	$txtButton = "Submit";
	$txtVisit = "Visit the wiki";
	break;	
case "fr":
	$txtHead = "Mon idée:";
	$txtButton = "Envoyer";
	$txtVisit = "Ouvrir le wiki";
	break;
default:
	$txtHead = "Meine Idee:";
	$txtButton = "Senden";
	$txtVisit = "Wiki besuchen";
	break;
}

?>
<form name="ideate" method="get" action="#" onSubmit="document.location.href = 'doku.php?do=edit&lang=<?= $conf['lang'] ?>&id=idea:' + document.getElementById('ideate_id').value.replace(/[-\\.,_*+&#?^$[\](){}!=|]/g,'').replace(/\s/g,'_'); return false">
  <b><?= $txtHead ?></b>
  <input name="id" id="ideate_id" type="text" maxlength="16" size="16" value="" />
  <input type="submit" value="<?= $txtButton ?>" />
</form>

<p><a class="btn" href="doku.php?id=<?= $conf['lang'] ?>:home"><?= $txtVisit ?></a></p>