{html_head}
<link rel="stylesheet" type="text/css" href="{$USER_INFO_PATH|@cat:'user_info_page/user_info_style.css'}">
<script type="text/javascript" src="{$USER_INFO_PATH|@cat:'user_info_page/user_info_script.js'}"> </script>
{/html_head}

<h1>{'User information'|translate}</h1>
<div id="errorForm">
  <p class="errorText"> There was an error processing your request. </p>
</div>
<div id="userInfoForm">
  <form class="userInfo">
    {foreach from=$FORM_ELEMENTS item=row}
        <div>
          <label> {$row[0]}: </label>
          {if $row[1] != 'choice'}
            <input id="{$row[0]}" type="{$row[1]}" class="formElement" value="{$row[3]}" />
            {if $row[1] == 'date'} (YYYY-MM-DD) {/if}
          {else}
            <select id={$row[0]} class="formElement">
              {foreach from=$row[2] item=option}
                <option value="{$option}" {if $row[3] == $option} selected {/if}> {$option} </option>
              {/foreach}
            </select>
          {/if}
        </div>
        <br>
    {/foreach}
    <br>
    <button type="button" onclick="sendUserInfo()"> {'Save'|translate} </button>
  </form>
</div>
