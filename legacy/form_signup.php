<?php

// translations
$trans['First name'] = array('en'=>'First name:', 'de'=>'Vorname:', 'fr'=>'Prénom:');
$trans['Last name'] = array('en'=>'Last name:', 'de'=>'Nachname:', 'fr'=>'Nom de famille:');
$trans['Email address'] = array('en'=>'Email address:', 'de'=>'Email:', 'fr'=>'Courriel:');
$trans['I\'m coming to'] = array('en'=>'I\'m coming to:', 'de'=>'Ich komme nach:', 'fr'=>'Je viens à:');
$trans['I\'m coming on'] = array('en'=>'I\'m coming on:', 'de'=>'Ich komme am:', 'fr'=>'Je viens le:');
$trans['Saturday'] = array('en'=>'Saturday', 'de'=>'Samstag', 'fr'=>'Samedi');
$trans['Friday'] = array('en'=>'Friday', 'de'=>'Freitag', 'fr'=>'Vendredi');
$trans['I\'m a...'] = array('en'=>'I\'m a:', 'de'=>'Ich nehme teil als...', 'fr'=>'Je suis un/e...');
$trans['Designer'] = array('en'=>'Designer', 'de'=>'Designer', 'fr'=>'Designer');
$trans['Developer'] = array('en'=>'Developer', 'de'=>'Entwickler', 'fr'=>'Développeur');
$trans['Ideator'] = array('en'=>'Ideator', 'de'=>'Ideator', 'fr'=>'Idéateur');
$trans['Data provider or expert'] = array('en'=>'Data provider or expert', 'de'=>'Fachexperte oder Datenbesitzer', 'fr'=>'Expert');
$trans['I have a comment'] = array('en'=>'I have a comment', 'de'=>'Comments', 'fr'=>'Commentaires');
$trans['Sign up now'] = array('en'=>'Sign up now!', 'de'=>'Jetzt anmelden!', 'fr'=>'Enregistrer!');

// Start Google Docs registration form embed
// Update instructions:
/*
 *  copy the latest HTML code from the Live Form
 *  replace <label (.*)>([A-z ']+) by <label \1><?= $trans['\2'][$curLang] ?>
 *  replace ([A-z ']+)</label> by <?= $trans['\1'][$curLang] ?></label>
 *  replace I'm by I\'m
 *  add target="hidden-iframe" to <form> tag
 * 
 */
?>

<form target="hidden-iframe" action="https://docs.google.com/spreadsheet/formResponse?formkey=dGo3bzVVdUpZVVJEQng5WWo3MnBRd2c6MA&amp;theme=0AX42CRMsmRFbUy1iOGYwN2U2Mi1hNWU0LTRlNjEtYWMyOC1lZmU4ODg1ODc1ODI&amp;embedded=true&amp;ifq" method="POST" id="ss-form">

<div class="form-entry">
    <label for="entry_2"><?= $trans['First name'][$curLang] ?> <span class="ss-required-asterisk">*</span></label>
    <input type="text" name="entry.2.single" value="" id="entry_2" class="required"/>
</div>

<div class="form-entry">
    <label for="entry_8"><?= $trans['Last name'][$curLang] ?> <span class="ss-required-asterisk">*</span></label>
    <input type="text" name="entry.8.single" value="" id="entry_8" class="required"/>
</div>

<div class="form-entry">
    <label for="entry_3"><?= $trans['Email address'][$curLang] ?> <span class="ss-required-asterisk">*</span></label>
    <input type="text" name="entry.3.single" value="" id="entry_3" class="required email" />
</div>

<div class="form-entry">
    <label for="entry_4"><?= $trans['I\'m coming to'][$curLang] ?></label>
        <select name="entry.4.single" id="entry_4">
            <option value="Bern">
                Bern
            </option>
            <option value="Sierre">
                Sierre
            </option>
        </select>
</div>

<div class="form-entry">
    <label for="entry_5"><?= $trans['I\'m coming on'][$curLang] ?></label>
        <select name="entry.5.single" id="entry_5">
            <option value="Friday+Saturday">
                <?= $trans['Friday'][$curLang] ?>+<?= $trans['Saturday'][$curLang] ?>
            </option>
            <option value="Friday">
                <?= $trans['Friday'][$curLang] ?>
            </option>
            <option value="Saturday">
                <?= $trans['Saturday'][$curLang] ?>
            </option>
        </select>
</div>

<div class="form-entry">
    <label for="entry_6"><?= $trans['I\'m a...'][$curLang] ?></label>
    <ul class="form-choices">
        <li>
            <label><input type="checkbox" name="entry.6.group" value="Designer" id="group_6_1" /> <?= $trans['Designer'][$curLang] ?></label>
        </li>
        <li >
            <label><input type="checkbox" name="entry.6.group" value="Developer" id="group_6_2" /> <?= $trans['Developer'][$curLang] ?></label>
        </li>
        <li >
            <label><input type="checkbox" name="entry.6.group" value="Ideator" id="group_6_3" /> <?= $trans['Ideator'][$curLang] ?></label>
        </li>
        <li >
            <label><input type="checkbox" name="entry.6.group" value="Data provider or expert" id="group_6_4" /> <?= $trans['Data provider or expert'][$curLang] ?></label>
        </li>
    </ul>
</div>

<div class="errorbox-good ss-item ss-paragraph-text ss-form-entry">
    <label for="entry_7"><?= $trans['I have a comment'][$curLang] ?></label>
    <textarea name="entry.7.single" rows="8" cols="75"  id="entry_7"></textarea>
</div>

<input type="hidden" name="pageNumber" value="0" />
<input type="hidden" name="backupCache" value="" />

<div class="form-entry">
    <span class="button">
        <a id="signup-button" class="icon white-arrow-right"><?= $trans['Sign up now'][$curLang] ?></a>
    </span>
</div>

<!-- DO NOT REMOVE, FORM FAILS WITHOUT THIS -->
<div style="display:none">
	<div class="ss-item ss-navigate"><div class="ss-form-entry">
		<input type="submit" name="submit" value="Submit">
	</div></div>
</div>

</form>

<script language="JavaScript">
// safeguard for iframe load event firing twice
var submitted = false;

$(function() {
    $("#ss-form").validate({
        errorPlacement: $.noop
    });

    $('#hidden-iframe').load(function() {
    	if (typeof console != "undefined") {
	        console.log(submitted, new Date());
	    }
        if(submitted) {
            window.location = './form_thanks.php?lang=<?= $curLang ?>';
        }
    });

    $('#ss-form').submit(function() {
        submitted = true;
    });
	
    $('#signup-button').click(function() {
        $('input[type=submit]').click();
    });
});

</script>

<!-- iframe for background form submit -->
<iframe name="hidden-iframe" id="hidden-iframe" style="display:none;"></iframe>
