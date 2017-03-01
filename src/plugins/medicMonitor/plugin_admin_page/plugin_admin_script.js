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
      location.reload();
    },
    error: function (response) {
      $("#errorForm").show();
    }
  });  
}

function deleteColumn(columnName){
    jQuery.ajax({
    type: "POST",
    url: 'plugins/medicMonitor/plugin_admin_page/plugin_admin_page.php',
    datatype: "json",
    data: {
      column_to_delete: columnName
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