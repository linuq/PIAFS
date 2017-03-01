function addColumn(){
  jQuery.ajax({
    type: "POST",
    url: 'plugins/medicMonitor/plugin_admin_page/plugin_admin_page.php',
    datatype: "json",
    data: {
      column_name: $('#column_name').val()
    },
    success: function (response) {
      console.log(JSON.stringify(response));
    },
    error: function (response) {
      $("#errorForm").show();
    }
  });  
}

/*function deleteFormElement(formElementName){
    jQuery.ajax({
    type: "POST",
    url: 'plugins/medic_monitor/plugin_admin_page/plugin_admin_page.php',
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
}*/