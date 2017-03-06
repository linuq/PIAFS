{combine_css path=$EDIT_TEXT_PATH|@cat:"admin/style.css"}

{include file='include/colorbox.inc.tpl'}
{include file='include/add_album.inc.tpl'}

{combine_script id='LocalStorageCache' load='footer' path='admin/themes/default/js/LocalStorageCache.js'}
{combine_script id='jquery.selectize' load='footer' path='themes/default/js/plugins/selectize.min.js'}

{footer_script}
{* <!-- CATEGORIES --> *}
var categoriesCache = new CategoriesCache({
  serverKey: '{$CACHE_KEYS.categories}',
  serverId: '{$CACHE_KEYS._hash}',
  rootUrl: '{$ROOT_URL}'
});

categoriesCache.selectize(jQuery('[data-selectize=categories]'), {
  filter: function(categories, options) {
    if (categories.length > 0) {
      jQuery("#albumSelection, .selectFiles, .showFieldset").show();
    }

    return categories;
  }
});

jQuery('[data-add-album]').pwgAddAlbum({
  afterSelect: function() {
    jQuery("#albumSelection, .selectFiles, .showFieldset").show();
  }
});

{/footer_script}

<head>
  <meta charset="UTF-8">
</head>

<h2>{'Create txt'|translate}</h2>

<form action="{$F_ACTION}" method="post">
  <fieldset>
    <legend>{'Txt File Creator'|translate}</legend>

    <p id="alert">{$CONTENT}</p>

    <fieldset class="selectAlbum">
      <legend>{'Drop into album'|@translate}</legend>

      <span id="albumSelection" style="display:none">
      <select data-selectize="categories" data-value="{$selected_category|@json_encode|escape:html}"
        data-default="first" name="category" style="width:600px"></select>
      <br>{'... or '|@translate}</span>
      <a href="#" data-add-album="category" title="{'create a new album'|@translate}">{'create a new album'|@translate}</a>
    </fieldset>

    <fieldset>
      <legend>{'Écrire le nom et le contenu'|@translate}</legend>

      <p><input type="text" name="nameTxt" id="nameTxt" placeholder="Nom"></p>

      <p><textarea name="createTxt" id="createTxt" placeholder="Contenu"></textarea></p>

      <p><input class="submit" type="submit" value="{'Publier'|translate}" name="save_skeleton"></p>
      <input type="hidden" name="form">
    </fieldset>

  </fieldset>
</form>
