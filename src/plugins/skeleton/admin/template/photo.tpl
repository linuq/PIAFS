{combine_css path=$SKELETON_PATH|@cat:"admin/template/style.css"}

<head>
  <meta charset="UTF-8">
</head>

<h2>{$TITLE} &#8250; {'Edit file'|translate} {$TABSHEET_TITLE}</h2>

<form action="{$F_ACTION}" method="post">
  <fieldset>
    <legend>{'File editor'|translate}</legend>

    <p>
    <textarea name="editText" id="editText">{$TXT}</textarea>
    </p>

    <p>
      <input class="submit" type="submit" value="{'Save'|translate}" name="save_skeleton">
      <input type="reset" />
    </p>

  </fieldset>
</form>
