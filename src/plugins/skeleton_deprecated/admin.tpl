{* <!-- add inline JS --> *}
{footer_script}
  var i = 0;
  function buttonClick() {
      document.getElementById('number').value = ++i;
  }
{/footer_script}

<!-- Show the title of the plugin -->
<div class="titlePage">
 <h2>{'Skeleton plugin'|@translate}</h2>
</div>

<!-- Show content in a nice box -->
<fieldset>
 <legend>{'A minimal plugin'|@translate}</legend>

 {'Hello world!'|@translate}
</fieldset>
<form>
  <input type="text" id="number" value="0"/>
  <input type="button" onclick="buttonClick()" value="Increment Value" />
</form>
