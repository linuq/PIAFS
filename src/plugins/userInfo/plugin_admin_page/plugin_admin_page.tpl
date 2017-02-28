{html_head}
<link rel="stylesheet" type="text/css" href="{$USER_INFO_PATH|@cat:'plugin_admin_page/plugin_admin_style.css'}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">">
<script type="text/javascript" src="{$USER_INFO_PATH|@cat:'plugin_admin_page/plugin_admin_script.js'}"> </script>
{/html_head}

<!-- Show the title of the plugin -->
<div class="titlePage">
 <h2>{'User info form plugin'|@translate}</h2>
</div>

<!-- Show content in a nice box -->
<fieldset>
 <legend>{'List of the elements in the form'|@translate}</legend>
</fieldset>
<div id="errorForm">
  <p class="errorText"> There was an error processing your request. </p>
</div>
<div>
  <table border="1">
    <tr>
      <th> {"Form element name"|translate} </th>
      <th> {"Form element type"|translate} </th>
      <th> {"Form element options"|translate} </th>
    </tr>
    {foreach from=$FORM_ELEMENTS item=row}
        <tr>
          {foreach from=$row item=column}
            <td> {$column} </td>
          {/foreach}
          <td> <a onclick="deleteFormElement( '{$row[0]}' )" > <i class="fa fa-trash" onclick="deleteFormElement( '{$row[0]}' )" > </i> </a> </td>
          <!-- <td> <a onclick="editFormElement( '{$row[0]}' )" > <i class="fa fa-pencil" > edit </i> </a> </td> -->
        </tr>
    {/foreach}
  </table>
</div>
<br>
<form method="POST">

   <div id="editForm">
    <label> {"Edit element"|translate}: </label>
    <div>
      <label> {"Old element name"|translate}: </label>
      <input type="text" id="old_form_element_name" disabled/>
    </div>
    <div>
      <label> {"New element name"|translate}: </label>
      <input type="text" id="edit_form_element_name" />
    </div>
    <div>
      <label> {"New element type"|translate}: </label>
      <select id="edit_form_element_type">
        <option value="text"> {"Text"|translate} </option>
        <option value="number"> {"Number"|translate} </option>
        <option value="date"> {"Date"|translate} </option>
        <!-- <option value="radio_button"> {"Radio Button"|translate} </option> -->
      </select>
    </div>
    <button onclick="modifyFormElement()"> {'Edit'|translate} </button>
  </div> 

  <br>

  <div id="newForm">
    <label> {"Add new element to your form"|translate}: </label>
    <div>
      <label> {"New element name"|translate}: </label>
      <input type="text" id="form_element_name" />
    <div>
    <div>
      <label> {"New element type"|translate}: </label>
      <select id="form_element_type" onchange="showElementsChoice()">
        <option value="text"> {"Text"|translate} </option>
        <option value="number"> {"Number"|translate} </option>
        <option value="date"> {"Date"|translate} </option>
        <option value="choice"> {"Choice"|translate} </option>
      </select>
    </div>

    <div id="selectElementsName">
      <label> {"Choices name"|translate}: </label>
      <ul id="choices">
      </ul>
      <input type="text" id="choiceToAdd"> </input> <button type="button" onclick="addToChoiceList()"> {"Add choice"|translate} </button>
      <br>
    </div>

  </div>
  <br>
  <button type="button" onclick="addFormElement()"> {'Add'|translate} </button>
</form>
