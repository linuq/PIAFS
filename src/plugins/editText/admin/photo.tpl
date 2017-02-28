{combine_css path=$EDIT_TEXT_PATH|@cat:"admin/style.css"}

<head>
  <meta charset="UTF-8">
</head>

<h2>{$TITLE} > {'Edit file'|translate} {$TABSHEET_TITLE}</h2>

<form method="post">
  <fieldset>
    <legend>{'File editor'|translate}</legend>

    <p>
    <textarea name="editText" id="editText">{$TXT}</textarea>
    </p>


    <p>

      <input type="submit" onclick="window.location.reload()" value="{'Save'|translate}" name="save_edit_text">
      <input type="reset" />

    </p>
  </fieldset>
</form>
