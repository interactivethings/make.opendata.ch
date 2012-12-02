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

<form target="hidden-iframe" action="https://docs.google.com/spreadsheet/formResponse?formkey=dGo3bzVVdUpZVVJEQng5WWo3MnBRd2c6MA&amp;theme=0AX42CRMsmRFbUy1iOGYwN2U2Mi1hNWU0LTRlNjEtYWMyOC1lZmU4ODg1ODc1ODI&amp;ifq" method="POST" id="ss-form">

<br>
<div class="errorbox-good">
<div class="ss-item ss-item-required ss-text"><div class="ss-form-entry"><label for="entry_2" class="ss-q-title"><?= $trans['First name'][$curLang] ?>
<span class="ss-required-asterisk">*</span></label>
<label for="entry_2" class="ss-q-help"></label>
<input type="text" id="entry_2" class="ss-q-short" value="" name="entry.2.single"></div></div></div>
<br> <div class="errorbox-good">
<div class="ss-item ss-item-required ss-text"><div class="ss-form-entry"><label for="entry_8" class="ss-q-title"><?= $trans['Last name'][$curLang] ?>
<span class="ss-required-asterisk">*</span></label>
<label for="entry_8" class="ss-q-help"></label>
<input type="text" id="entry_8" class="ss-q-short" value="" name="entry.8.single"></div></div></div>
<br> <div class="errorbox-good">
<div class="ss-item ss-item-required ss-text"><div class="ss-form-entry"><label for="entry_3" class="ss-q-title"><?= $trans['Email address'][$curLang] ?>
<span class="ss-required-asterisk">*</span></label>
<label for="entry_3" class="ss-q-help"></label>
<input type="text" id="entry_3" class="ss-q-short" value="" name="entry.3.single"></div></div></div>
<br> <div class="errorbox-good">
<div class="ss-item ss-item-required ss-select"><div class="ss-form-entry"><label for="entry_4" class="ss-q-title"><?= $trans['I\'m coming to'][$curLang] ?>
<span class="ss-required-asterisk">*</span></label>
<label for="entry_4" class="ss-q-help"></label>
<select id="entry_4" name="entry.4.single"><option value="Bern">Bern</option> <option value="Sierre">Sierre</option></select></div></div></div>
<br> <div class="errorbox-good">
<div class="ss-item  ss-select"><div class="ss-form-entry"><label for="entry_5" class="ss-q-title"><?= $trans['I\'m coming on'][$curLang] ?>
</label>
<label for="entry_5" class="ss-q-help"></label>
<select id="entry_5" name="entry.5.single"><option value="Friday+Saturday">Friday+Saturday</option> <option value="Friday">Friday</option> <option value="Saturday">Saturday</option></select></div></div></div>
<br> <div class="errorbox-good">
<div class="ss-item ss-item-required ss-checkbox"><div class="ss-form-entry"><label for="entry_6" class="ss-q-title"><?= $trans['I\'m a'][$curLang] ?>
<span class="ss-required-asterisk">*</span></label>
<label for="entry_6" class="ss-q-help"></label>
<ul class="ss-choices"><li class="ss-choice-item"><label class="ss-choice-label"><input type="checkbox" id="group_6_1" class="ss-q-checkbox" value="Designer" name="entry.6.group">
<?= $trans['Designer'][$curLang] ?></label></li> <li class="ss-choice-item"><label class="ss-choice-label"><input type="checkbox" id="group_6_2" class="ss-q-checkbox" value="Developer" name="entry.6.group">
<?= $trans['Developer'][$curLang] ?></label></li> <li class="ss-choice-item"><label class="ss-choice-label"><input type="checkbox" id="group_6_3" class="ss-q-checkbox" value="Ideator" name="entry.6.group">
<?= $trans['Ideator'][$curLang] ?></label></li> <li class="ss-choice-item"><label class="ss-choice-label"><input type="checkbox" id="group_6_4" class="ss-q-checkbox" value="Data provider or expert" name="entry.6.group">
<?= $trans['Data provider or expert'][$curLang] ?></label></li>
</ul></div></div></div>
<br> <div class="errorbox-good">
<div class="ss-item  ss-paragraph-text"><div class="ss-form-entry"><label for="entry_7" class="ss-q-title"><?= $trans['I have a comment'][$curLang] ?>
</label>
<label for="entry_7" class="ss-q-help"></label>
<textarea id="entry_7" class="ss-q-long" cols="75" rows="8" name="entry.7.single"></textarea></div></div></div>
<br>
<input type="hidden" value="0" name="pageNumber">
<input type="hidden" value="" name="backupCache">

<div class="ss-item ss-navigate"><div class="ss-form-entry">
<input type="submit" name="submit" value="Submit"></div></div>

<!-- end of standard form -->

<div class="form-entry">
   <center>
        <span class="button">
            <a id="signup-button" class="icon white-arrow-right"><?= $trans['Sign up now'][$curLang] ?></a>
        </span>
    </center>
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
        $('#ss-form').submit();
    });
});

</script>

<!-- iframe for background form submit -->
<iframe name="hidden-iframe" id="hidden-iframe" style="display:none;"></iframe>
