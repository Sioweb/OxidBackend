[{include file="headitem.tpl" title="GENERAL_ADMIN_TITLE"|oxmultilangassign}]

<script type="text/javascript">
<!--
function loadLang(obj)
{
    var langvar = document.getElementById("agblang");
    if (langvar != null )
        langvar.value = obj.value;
    document.myedit.submit();
}
function setSmtpField()
{
    var sPass = '';
    for ( var i = 0; i < [{$edit->oxshops__oxsmtppwd->value|count_characters}]; i++ ) {
        sPass += ' ';
    }
    document.getElementsByName( 'oxsmtppwd' )[0].value = sPass;
    document.getElementsByName( 'oxsmtppwd' )[0].userValueSet = false;
}
function unsetSmtpField()
{
    if ( !document.getElementsByName( 'oxsmtppwd' )[0].userValueSet ) {
        document.getElementsByName( 'oxsmtppwd' )[0].value = '';
    }
}

function modSmtpField()
{
    if ( !document.getElementsByName( 'oxsmtppwd' )[0].userValueSet ) {
        document.getElementsByName( 'oxsmtppwd' )[0].value = '';
        document.getElementsByName( 'oxsmtppwd' )[0].userValueSet = true;
    }
}
function editThis(sID)
{
    var oTransfer = top.basefrm.edit.document.getElementById( "transfer" );
    oTransfer.oxid.value = '';
    oTransfer.cl.value = top.oxid.admin.getClass( sID );

    //forcing edit frame to reload after submit
    top.forceReloadingEditFrame();

    var oSearch = top.basefrm.list.document.getElementById( "search" );
    oSearch.oxid.value = sID;
    oSearch.updatenav.value = 1;
    oSearch.submit();
}
window.onload = function ()
{
    [{if $updatelist == 1}]
        top.oxid.admin.updateList('[{$oxid}]');
    [{/if}]

    setSmtpField();

    [{if $updatenav}]
        top.oxid.admin.reloadNavigation('[{$oxid}]');
    [{/if}]

    var oField = top.oxid.admin.getLockTarget();
    oField.onchange = oField.onkeyup = oField.onmouseout = top.oxid.admin.unlockSave;
}
//-->
</script>

[{if $readonly}]
    [{assign var="readonly" value="readonly disabled"}]
[{else}]
    [{assign var="readonly" value=""}]
[{/if}]

<form name="transfer" id="transfer" action="[{$oViewConf->getSelfLink()}]" method="post">
    [{$oViewConf->getHiddenSid()}]
    <input type="hidden" name="oxid" value="[{$oxid}]">
    <input type="hidden" name="cl" value="shop_main">
    <input type="hidden" name="fnc" value="">
    <input type="hidden" name="actshop" value="[{$oViewConf->getActiveShopId()}]">
    <input type="hidden" name="updatenav" value="">
    <input type="hidden" name="editlanguage" value="[{$editlanguage}]">
</form>

[{if $sMandateWarning}]
  <div class="errorbox">[{oxmultilang ident="SHOP_MAIN_MANDATE_WARNING"}]</div>
[{/if}]

[{if $sMaxShopWarning}]
   <div class="errorbox">[{oxmultilang ident="SHOP_MAIN_MAXSHOP_WARNING"}]</div>
[{/if}]

<form class="formbuilder" name="myedit" id="myedit" action="[{$oViewConf->getSelfLink()}]" method="post" onSubmit="unsetSmtpField()">
    [{$oViewConf->getHiddenSid()}]
    <input type="hidden" name="cl" value="shop_main">
    <input type="hidden" name="fnc" value="">
    <input type="hidden" name="oxid" value="[{$oxid}]">
    <input type="hidden" name="editval[oxshops__oxid]" value="[{$oxid}]">
    
    <div class="formbuilder-inner">
        [{block name="admin_shop_main_rightform"}]
        [{ $form }]
        [{/block}]
    </div>
</form>

[{include file="bottomnaviitem.tpl"}]
[{include file="bottomitem.tpl"}]
