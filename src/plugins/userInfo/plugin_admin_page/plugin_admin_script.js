function addFormElement(){
  jQuery.ajax({
    type: "POST",
    url: 'plugins/userInfo/plugin_admin_page/form_element/form_element_add.php',
    datatype: "json",
    data: {
      form_element_name: $('#form_element_name').val(),
      form_element_type: $('#form_element_type').val()
    },
    complete: function (response) {
      console.log(JSON.stringify(response));
    },
    error: function (response) {
      console.log(response);
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
    complete: function (response) {
      console.log(JSON.stringify(response));
      location.reload();
    },
    error: function (response) {
      console.log(response);
    }
  });
}

function modifyFormElement(){
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
}

function editFormElement(formElementPreviousName){
  $("#editForm").show();

  $("#old_form_element_name").val(formElementPreviousName);
}