<?php 
function tpl_4b4db639_index___Y6mAA2s7fkLvrWoOyaTBA($tpl, $ctx) {
$_thistpl = $tpl ;
$_translator = $tpl->getTranslator() ;
$ctx->setXmlDeclaration('<?xml version="1.0" encoding="UTF-8"?>',false) ;
?>

<?php $ctx->setDocType('<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">',false); ?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="stylesheet" type="text/css" href="/libs/extjs/resources/css/ext-all.css"/>
<link rel="stylesheet" type="text/css" href="/styles/main.css"/>
<script type="text/javascript" src="/libs/extjs/adapter/ext/ext-base.js"></script>
<script type="text/javascript" src="/libs/extjs/ext-all.js"></script>
<script type="text/javascript" src="/javascripts/search.js"></script>
<title>Kateglo</title>
</head>
<body>
<div style="width:600px;margin-top:20px;margin-left:auto;margin-right:auto;">
   	<div class="x-box-tl"><div class="x-box-tr"><div class="x-box-tc"></div></div></div>
   	<div class="x-box-ml"><div class="x-box-mr"><div class="x-box-mc">
   		<h3 style="margin-bottom:5px;">Search Kateglo</h3>
		<div id="ext-gen4" class="x-form-field-wrap x-form-field-trigger-wrap" style="width: 470px;">
			<input id="searchLemma" class=" x-form-text x-form-field" type="text" value="" name="searchLemma" size="40" onfocus="this.select();" style="width: 462px;" autocomplete="off"/>
			<img id="ext-gen5" class="x-form-trigger x-form-arrow-trigger" src="/libs/extjs/resources/images/default/s.gif" style="display: none;"/>
		</div>
		<table cellspacing="0" class="x-btn   x-btn-text-icon " id="ext-comp-1014" style="width: auto;"><tbody class="x-btn-medium x-btn-icon-medium-left"><tr><td class="x-btn-tl"><i> </i></td><td class="x-btn-tc"></td><td class="x-btn-tr"><i> </i></td></tr><tr><td class="x-btn-ml"><i> </i></td><td class="x-btn-mc"><em unselectable="on" class=""><button type="button" id="ext-gen28" class=" x-btn-text add24">Add User</button></em></td><td class="x-btn-mr"><i> </i></td></tr><tr><td class="x-btn-bl"><i> </i></td><td class="x-btn-bc"></td><td class="x-btn-br"><i> </i></td></tr></tbody></table>
		<div style="padding-top:4px;">
           Search: <?php 
$ctx = $tpl->pushContext() ;
$ctx->context = $ctx->path($ctx->search, 'getLemmaRadioValue') ;
if (NULL !== ($_tmp_1 = ($ctx->path($ctx->search, 'getRadioName')))):  ;
$_tmp_1 = ' name="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
if (NULL !== ($_tmp_2 = ($ctx->path($ctx->search, 'getLemmaRadioValue')))):  ;
$_tmp_2 = ' value="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<input checked="checked" type="radio" onclick="changeContext('<?php echo phptal_escape($ctx->context) ?>');"<?php echo $_tmp_1 ?><?php echo $_tmp_2 ?>/><?php $ctx = $tpl->popContext(); ?>
 Lemma
			&nbsp;&nbsp; &nbsp; <?php 
$ctx = $tpl->pushContext() ;
$ctx->context = $ctx->path($ctx->search, 'getGlossaryRadioValue') ;
if (NULL !== ($_tmp_1 = ($ctx->path($ctx->search, 'getRadioName')))):  ;
$_tmp_1 = ' name="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
if (NULL !== ($_tmp_2 = ($ctx->path($ctx->search, 'getGlossaryRadioValue')))):  ;
$_tmp_2 = ' value="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<input type="radio" onclick="changeContext('<?php echo phptal_escape($ctx->context) ?>');"<?php echo $_tmp_1 ?><?php echo $_tmp_2 ?>/><?php $ctx = $tpl->popContext(); ?>
 Glossary
        </div>
	 </div></div></div>
    <div class="x-box-bl"><div class="x-box-br"><div class="x-box-bc"></div></div></div>
</div>
</body>
</html><?php 
/* end */ ;

}

?><?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from C:\Dokumente und Einstellungen\arpu\pdtworkspace\kateglo\application\views\scripts\index\index.html (edit that file instead) */; ?>