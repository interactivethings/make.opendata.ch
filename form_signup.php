<?php

// set current language
$languages = array('de', 'fr', 'en');
$lang = 'en';
if (isset($_GET['lang']) && in_array($_GET['lang'], $languages)) {
  $lang = $_GET['lang'];
}

// translations
$trans['First name']=array('en'=>'First name', 'de'=>'Vorname', 'fr'=>'Prénom');
$trans['Last name']=array('en'=>'Last name', 'de'=>'Nachname', 'fr'=>'Nom de famille');
$trans['Email address']=array('en'=>'Email address', 'de'=>'Email', 'fr'=>'Courriel');
$trans['I\'m coming to']=array('en'=>'I\'m coming to', 'de'=>'Ich komme nach', 'fr'=>'Je viens à');
$trans['I\'m coming on']=array('en'=>'I\'m coming on', 'de'=>'Ich komme am', 'fr'=>'Je viens le');
$trans['Saturday']=array('en'=>'Saturday', 'de'=>'Samstag', 'fr'=>'Samedi');
$trans['Sunday']=array('en'=>'Sunday', 'de'=>'Sonntag', 'fr'=>'Dimanche');
$trans['I\'m an awesome...']=array('en'=>'I\'m an awesome...', 'de'=>'Ich nehme teil als...', 'fr'=>'Je suis un/e...');
$trans['Designer']=array('en'=>'Designer', 'de'=>'Designer', 'fr'=>'Designer');
$trans['Developer']=array('en'=>'Developer', 'de'=>'Developer', 'fr'=>'Développeur');
$trans['Ideator']=array('en'=>'Ideator', 'de'=>'Ideator', 'fr'=>'Idéateur');
$trans['Data provider or expert']=array('en'=>'Data provider or expert', 'de'=>'Fachexpert oder Datenbesitzer', 'fr'=>'Expert');
$trans['I have a comment']=array('en'=>'I have a comment', 'de'=>'Comments', 'fr'=>'Commentaires');

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
    <label for="entry_6"><?= $trans['I\'m an awesome'][$lang] ?></label>
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
    <input type="submit" name="submit" />
</div>
</form>

<!-- stylesheet for form -->
<style type="text/css">
.ss-base-body{font-size:.8em}.ss-textarea{max-width:99%}.ss-choice-item{margin:0;line-height:1.3em;padding-bottom:.5em}.ss-form-entry input{vertical-align:middle;margin-top:0}.g{color:#666}.i{display:inline}.ss-form-desc{font:inherit;width:99%;margin:0}.ss-q-title{display:block;font-weight:bold}.ss-q-help{display:block;color:#666;margin:.1em 0 .25em 0}.ss-q-long{max-width:90%}.ss-form-entry{margin-bottom:1.5em;zoom:1;}.ss-choices{list-style:none;margin:.5em 0 0 0;padding:0}.ss-powered-by{display:block;clear:left;color:#666;margin:1em 0.2em 0.2em}.ss-powered-by a:link,.ss-powered-by a:visited{color:#666}.ss-terms{display:block;clear:left;margin:1em 0.2em 0.2em}.ss-required-asterisk{color:#c43b1d}.ss-section-title{background-color:#eee;padding:0.4em;margin:2em -0.4em 0}.ss-section-description{margin-top:0.5em}.ss-no-ignore-whitespace{white-space:pre-wrap;white-space:-moz-pre-wrap;word-wrap:break-word}.ss-page-title{margin:0;padding:0}.ss-confirmation-header{font-size:140%;padding-bottom:1em}.ss-gridnumbers{text-align:center;border-bottom:1px solid #d3d8d3}.ss-gridnumber{display:block;padding:0.5em 0 .5em}.ss-gridrow{text-align:center;color:#666;border-bottom:1px solid #d3d8d3;padding:.5em .25em}.ss-grid-row-even{background-color:#fff}.ss-grid-row-odd{background-color:#f2f2f2}.ss-gridrow-leftlabel{padding:0 1em}.ss-grideditor-columns input{line-height:150%}.ss-grideditor-editor .ss-magiclist-ul span.ss-header{font-weight:bold;padding-right:1em}.ss-grid .errorbox-component .errorbox-good,.ss-grid .errorbox-component .errorbox-bad{display:none}.ss-scalenumbers{text-align:center}.ss-scalenumber{display:block;padding:0.5em 0 .5em}.ss-scalerow{text-align:center;color:#666;border:1px solid #d3d8d3;border-left:0;border-right:0;padding:.5em .25em}td.ss-leftlabel{text-align:right;padding-left:0}td.ss-rightlabel{text-align:left;padding-right:0}.errorbox-bad{border:2px solid #c43b1d;background-color:#ffe6cc;padding:2px}.errorheader{color:#c43b1d}.ss-base-body{width:99%}.ss-confirmation-banner{background-color:#ffff87;padding:1em}

#ss-form .ss-choices { list-style:none; margin-left: 16em; }
#ss-form .ss-choices li {
	display: inline-block;
	vertical-align: top;
}
#ss-form .ss-choice-label { width:auto; }
#ss-form .ss-choices label { text-align:left; }
#ss-form .ss-form-entry { margin-bottom: 0; }
#ss-form label, #ss-form .ss-q-help { text-align:left; color: white; }
#ss-form textarea { width: 30em; height: 3em; }
#ss-form .ss-choice-item:last-child { display: block; }
#ss-form .ss-choice-item:last-child label:last-child { width: auto; }
.ss-required-asterisk { text-align:right; color:black; font:10pt sans-serif; }

.section-sponsor table { background: white; }
.section-sponsor table a { color: green; text-decoration: none; font-size: 123%; margin-left:1em; }

</style>

<!-- validation -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="http://ajax.microsoft.com/ajax/jQuery.Validate/1.9/jQuery.Validate.min.js"></script>

<script>
// safeguard for iframe load event firing twice
var submitted = false;

$(function() {
    $("#ss-form").validate({meta: 'validate'});

    $('#hidden-iframe').load(function() {
        console.log(submitted, new Date());
        if(submitted) {
            window.location = './form_thanks.php';
        }
    });

    $('#ss-form').submit(function() {
        submitted = true;
        $('#ss-form input[type="submit"]').attr('disabled', 'disabled');
    });
});

</script>

<!-- iframe for background form submit -->
<iframe name="hidden-iframe" id="hidden-iframe" style="display:none;"></iframe>
