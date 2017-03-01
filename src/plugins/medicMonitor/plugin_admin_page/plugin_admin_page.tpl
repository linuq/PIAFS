{html_head}
<link rel="stylesheet" type="text/css" href="{$MEDIC_MONITOR_PATH|@cat:'plugin_admin_page/plugin_admin_style.css'}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">">
<script type="text/javascript" src="{$MEDIC_MONITOR_PATH|@cat:'plugin_admin_page/plugin_admin_script.js'}"> </script>
{/html_head}

<!-- Show the title of the plugin -->
<div class="titlePage">
 <h2>{'Medic monitoring form plugin'|@translate}</h2>
</div>

<fieldset>
 <legend>{'List of the columns in the table'|@translate}</legend>
</fieldset>

<div id="errorForm">
  <p class="errorText"> There was an error processing your request. </p>
</div>

<div>
  <table border="1">
    <tr>
      <th> {"Form element name"|translate} </th>
    </tr>
    {foreach from=$COLUMNS item=columnName}
      <tr>
        <td>
          {$columnName}
        </td>
        <td>
          <a onclick="deleteColumn('{$columnName}')" > <i class="fa fa-trash"> </i> </a>
        </td>
      </tr>
    {/foreach}
  </table>
</div>

<!-- Show content in a nice box -->
<form method="POST">
  <div id="newForm">
    <label> {"Add new column to your table"|translate}: </label>
    <div>
      <label> {"New column name"|translate}: </label>
      <input type="text" id="column_name" />
    <div>
    <button type="button" onclick="addColumn()"> {'Add'|translate} </button>
</form>
