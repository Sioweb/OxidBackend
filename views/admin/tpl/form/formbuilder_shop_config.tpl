[{include file="headitem.tpl" title="GENERAL_ADMIN_TITLE"|oxmultilangassign}]

<script type="text/javascript">
<!--
function _groupExp(el) {
    var _cur = el.parentNode;

    if (_cur.className == "exp") _cur.className = "";
      else _cur.className = "exp";
}
function showBasketReserved()
{
  if( document.getElementById('basketreserved').value == 1)
  {
    document.getElementById('basketreservedtime').className = 'rowexp';
  }
  else
  {
    document.getElementById('basketreservedtime').className = 'rowhide';
  }
}
function showInvitations()
{
  if( document.getElementById('invitations').value == 1)
  {
    document.getElementById('pointsforinvitation').className = 'rowexp';
    document.getElementById('pointsforregistration').className = 'rowexp';
  }
  else
  {
    document.getElementById('pointsforinvitation').className = 'rowhide';
    document.getElementById('pointsforregistration').className = 'rowhide';
  }
}
function editThis(sID)
{
    var oTransfer = top.basefrm.edit.document.getElementById("transfer");
    oTransfer.oxid.value = '';
    oTransfer.cl.value = top.oxid.admin.getClass( sID );

    //forcing edit frame to reload after submit
    top.forceReloadingEditFrame();

    var oSearch = top.basefrm.list.document.getElementById("search");
    oSearch.oxid.value = sID;
    oSearch.updatenav.value = 1;
    oSearch.submit();
}
//-->
</script>

[{if $readonly}]
    [{assign var="readonly" value="readonly disabled"}]
[{else}]
    [{assign var="readonly" value=""}]
[{/if}]

[{cycle assign="_clear_" values=",2"}]

<form name="transfer" id="transfer" action="[{$oViewConf->getSelfLink()}]" method="post">
    [{$oViewConf->getHiddenSid()}]
    <input type="hidden" name="oxid" value="[{$oxid}]">
    <input type="hidden" name="cl" value="shop_config">
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


<form class="formbuilder" name="myedit" id="myedit" action="[{$oViewConf->getSelfLink()}]" method="post">
    [{$oViewConf->getHiddenSid()}]
    <input type="hidden" name="cl" value="shop_config">
    <input type="hidden" name="fnc" value="">
    <input type="hidden" name="oxid" value="[{$oxid}]">
    <input type="hidden" name="editval[oxshops__oxid]" value="[{$oxid}]">

    [{include file="include/update_views_notice.tpl"}]
    [{block name="admin_shop_config_options"}]
    
    <div class="formbuilder-inner">
        [{block name="admin_shop_main_rightform"}]
        [{ $form }]
        [{/block}]
    </div>
    [{/block}]
</form>

[{include file="bottomnaviitem.tpl"}]
[{include file="bottomitem.tpl"}]
