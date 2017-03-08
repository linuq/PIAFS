{combine_css path=$USER_INFO_PATH|@cat:"admin/style.css"}

<head>
  <meta charset="UTF-8">
</head>

<h2>{$TITLE} > {'Export users infos'|translate}</h2>

<form action="{$F_ACTION}" method="post">
  <fieldset>
    <legend>{'Export form'|translate}</legend>

    <p id="alert">{$CONTENT}</p>

    <p>Pour télécharger les formulaires de santé des familles sous ce contrat, appuyez sur ce bouton :</p>
    <input type="hidden" name="confirm">
    <p><input class="submit" type="submit" value="{'Télécharger'|translate}" name="save_skeleton"></p>

  </fieldset>
</form>
