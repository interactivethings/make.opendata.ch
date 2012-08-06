<?php

// set current language
$languages = array('de', 'fr', 'en');
$lang = 'en';
if (isset($_GET['lang']) && in_array($_GET['lang'], $languages)) {
  $lang = $_GET['lang'];
}

// translations
$trans['First name'] = array('en'=>'First name:', 'de'=>'Vorname:', 'fr'=>'Prénom:');
$trans['Last name'] = array('en'=>'Last name:', 'de'=>'Nachname:', 'fr'=>'Nom de famille:');
$trans['Email address'] = array('en'=>'Email address:', 'de'=>'Email:', 'fr'=>'Courriel:');
$trans['I\'m coming to'] = array('en'=>'I\'m coming to:', 'de'=>'Ich komme nach:', 'fr'=>'Je viens à:');
$trans['I\'m coming on'] = array('en'=>'I\'m coming on:', 'de'=>'Ich komme am:', 'fr'=>'Je viens le:');
$trans['Saturday'] = array('en'=>'Saturday', 'de'=>'Samstag', 'fr'=>'Samedi');
$trans['Sunday'] = array('en'=>'Sunday', 'de'=>'Sonntag', 'fr'=>'Dimanche');
$trans['I\'m a...'] = array('en'=>'I\'m a:', 'de'=>'Ich nehme teil als...', 'fr'=>'Je suis un/e...');
$trans['Designer'] = array('en'=>'Designer', 'de'=>'Designer', 'fr'=>'Designer');
$trans['Developer'] = array('en'=>'Developer', 'de'=>'Entwickler', 'fr'=>'Développeur');
$trans['Ideator'] = array('en'=>'Ideator', 'de'=>'Ideator', 'fr'=>'Idéateur');
$trans['Data provider or expert'] = array('en'=>'Data provider or expert', 'de'=>'Fachexpert oder Datenbesitzer', 'fr'=>'Expert');
$trans['I have a comment'] = array('en'=>'I have a comment', 'de'=>'Comments', 'fr'=>'Commentaires');
$trans['Sign up now'] = array('en'=>'Sign up now', 'de'=>'Jetzt anmelden', 'fr'=>'Enregistrer');

// Start Google Docs registration form embed
?>
<form action="https://docs.google.com/a/gassert.ch/spreadsheet/formResponse?formkey=dGZUanVzeGlDR08zeU9SOGpNa05IQ0E6MQ" method="post" id="ss-form" target="hidden-iframe">
<div class="form-entry">
    <label for="entry_2"><?= $trans['First name'][$lang] ?> <span class="ss-required-asterisk">*</span></label>
    <input type="text" name="entry.2.single" value="" id="entry_2" class="required"/>
</div>

<div class="form-entry">
    <label for="entry_8"><?= $trans['Last name'][$lang] ?> <span class="ss-required-asterisk">*</span></label>
    <input type="text" name="entry.8.single" value="" id="entry_8" class="required"/>
</div>

<div class="form-entry">
    <label for="entry_3"><?= $trans['Email address'][$lang] ?> <span class="ss-required-asterisk">*</span></label>
    <input type="text" name="entry.3.single" value="" id="entry_3" class="required email" />
</div>

<div class="form-entry">
    <label for="entry_4"><?= $trans['I\'m coming to'][$lang] ?></label>
        <select name="entry.4.single" id="entry_4">
            <option value="Basel">
                Basel
            </option>
            <option value="Geneva">
                Genève
            </option>
        </select>
</div>

<div class="form-entry">
    <label for="entry_5"><?= $trans['I\'m coming on'][$lang] ?></label>
        <select name="entry.5.single" id="entry_5">
            <option value="Saturday+Sunday">
                <?= $trans['Saturday'][$lang] ?>+<?= $trans['Sunday'][$lang] ?>
            </option>
            <option value="Saturday">
                <?= $trans['Saturday'][$lang] ?>
            </option>
            <option value="Sunday">
                <?= $trans['Sunday'][$lang] ?>
            </option>
        </select>
</div>

<div class="form-entry">
    <label for="entry_6"><?= $trans['I\'m a...'][$lang] ?></label>
    <ul class="form-choices">
        <li>
            <label><input type="checkbox" name="entry.6.group" value="Designer" id="group_6_1" /> <?= $trans['Designer'][$lang] ?></label>
        </li>
        <li >
            <label><input type="checkbox" name="entry.6.group" value="Developer" id="group_6_2" /> <?= $trans['Developer'][$lang] ?></label>
        </li>
        <li >
            <label><input type="checkbox" name="entry.6.group" value="Ideator" id="group_6_3" /> <?= $trans['Ideator'][$lang] ?></label>
        </li>
        <li >
            <label><input type="checkbox" name="entry.6.group" value="Data provider or expert" id="group_6_4" /> <?= $trans['Data provider or expert'][$lang] ?></label>
        </li>
    </ul>
</div>

<div class="errorbox-good ss-item ss-paragraph-text ss-form-entry">
    <label for="entry_7"><?= $trans['I have a comment'][$lang] ?></label>
    <textarea name="entry.7.single" rows="8" cols="75"  id="entry_7"></textarea>
</div>

<input type="hidden" name="pageNumber" value="0" />
<input type="hidden" name="backupCache" value="" />

<div class="form-entry">
   <center>
        <span class="button">
            <a id="signup-button" class="icon white-arrow-right"><?= $trans['Sign up now'][$lang] ?></a>
        </span>
    </center>
</div>

</form>

<script>
// safeguard for iframe load event firing twice
var submitted = false;

$(function() {
    $("#ss-form").validate({
        errorPlacement: $.noop
    });

    $('#hidden-iframe').load(function() {
        console.log(submitted, new Date());
        if(submitted) {
            window.location = './form_thanks.php?lang=<?= $lang ?>';
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
