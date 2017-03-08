function addFormElement(){

  var choices=[];
  if($("#form_element_type").val() == 'choice'){
    choices = getAllChoicesNames();
  }

  if(choices.length > 0){
    addFormElementWithChoices(choices);
  }
  else{
    addFormElementWithoutChoices();
  }
}

function addFormElementWithChoices(choices){
  jQuery.ajax({
    type: "POST",
    url: 'plugins/userInfo/plugin_admin_page/form_element/form_element_add.php',
    datatype: "json",
    data: {
      form_element_name: $('#form_element_name').val(),
      form_element_type: $('#form_element_type').val(),
      form_element_choices: choices
    },
    success: function (response) {
      location.reload();
      console.log(JSON.stringify(response));
    },
    error: function (response) {
      $("#errorForm").show();
    }
  });  
}

function addFormElementWithoutChoices(){
  jQuery.ajax({
    type: "POST",
    url: 'plugins/userInfo/plugin_admin_page/form_element/form_element_add.php',
    datatype: "json",
    data: {
      form_element_name: $('#form_element_name').val(),
      form_element_type: $('#form_element_type').val()
    },
    success: function (response) {
      location.reload();
      console.log(JSON.stringify(response));
    },
    error: function (response) {
      $("#errorForm").show();
    }
  });  
}

function deleteFormElement(formElementName){
    jQuery.ajax({
    type: "POST",
    url: 'plugins/userInfo/plugin_admin_page/form_element/form_element_delete.php',
    datatype: "json",
    data: {
      form_element_name: formElementName
    },
    success: function (response) {
      console.log(JSON.stringify(response));
      location.reload();
    },
    error: function (response) {
      $("#errorForm").show();
    }
  });
}

/*function modifyFormElement(){
    jQuery.ajax({
    type: "POST",
    url: 'plugins/userInfo/plugin_admin_page/form_element/form_element_modify.php',
    datatype: "json",
    data: {
      form_element_previous_name: $('#old_form_element_name').val(),
      form_element_name: $('#edit_form_element_name').val(),
      form_element_type: $('#edit_form_element_type').val()
    },
    complete: function (response) {
      location.reload();
      console.log(JSON.stringify(response));
    },
    error: function (response) {
      console.log(response);
    }
  });
}*/

function getAllChoicesNames(){
  var choices = [];
  $('#choices li').each(function(){
    choices.push($(this).text());
  });
  return choices;
}

/*function editFormElement(formElementPreviousName){
  $("#editForm").show();

  $("#old_form_element_name").val(formElementPreviousName);
}*/

function showElementsChoice(){
  if($("#form_element_type").val() == 'choice'){
    $("#selectElementsName").show();
  }
  else{
    $("#selectElementsName").hide();
  }
}

function addToChoiceList(){
  var elementName = $("#choiceToAdd").val();
  $("#choices").show();
  $("#choices").append('<li id="choice'+elementName+'">'+ elementName +'<a onclick="deleteChoice(\''+ elementName +'\')"><i class="fa fa-times"></i></a></li>');
  $("#choiceToAdd").val('');
}

function deleteChoice(choiceName){
  $('#choice'+choiceName).remove();
}

function editFormElement(formElementPreviousName){
  $("#editForm").show();

  $("#old_form_element_name").val(formElementPreviousName);
}