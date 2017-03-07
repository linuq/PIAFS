{html_head}
  <link rel="stylesheet" type="text/css" href="{$MEDIC_MONITOR_PATH|@cat:'medic_monitor_page/medic_monitor_style.css'}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script type="text/javascript" src="{$MEDIC_MONITOR_PATH|@cat:'medic_monitor_page/medic_monitor_script.js'}"> </script>
{/html_head}

<h1>{'Medical monitoring'|translate}</h1>
<div id="errorForm">
  <p class="errorText"> There was an error processing your request. </p>
</div>
<div id="medicMonitorForm">
  <form class="medicMonitor">
    <table border=1>
      <tr>
        {foreach from=$COLUMNS item=columnName}
          <th>
            {$columnName}
          </th>
        {/foreach}
      </tr>
      {foreach from=$DATA item=row}
        <tr>
          {foreach from=$row item=info}
            <td>
              {$info}
            </td>
          {/foreach}
          <td>
            <a><i onclick="deleteRow('{$row["date"]}')" class="fa fa-times"></i></a>
          </td>
        </tr>
      {/foreach}
      <tr>
        {foreach from=$COLUMNS item="columnName"}
          {if $columnName != 'date'}
            <td>
              <input type="text" class="newInfo" id="{$columnName}"> </input>
            </td>
          {else}
            <td>
            </td>
          {/if}
        {/foreach}
        <td>
          <button type="button" onclick="saveNewInfo()"> {'Add'|translate} </button>
        </td>
      </tr>
    </table>
  </form>
  <br>
  <form>
    <fieldset>
      <legend>{'Upload table Form'|translate}</legend>
      {if $category_options|@count gt 0}
        <fieldset class="selectAlbum">
          <legend>{'Drop into album'|@translate}</legend>

          <select id="albumSelect" name="category">
            {html_options options=$category_options selected=$category_options_selected}
          </select>
              
        </fieldset>
        <button type="button" onclick="downloadInfo()"> {'Upload table'|translate} </button>
        {else}
          <p> {'You are not allowed to upload documents'|@translate} </p>
      {/if}
    </fieldset>
  </form>
</div>
