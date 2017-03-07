function saveNewInfo(){

  //Get form elements
  var dataToInsert = {};
  $(".newInfo").map(function (){
    dataToInsert[$(this).attr("id")] = $(this).val();
  });

  //Call the function to modify
  jQuery.ajax({
    type: "POST",
    url: 'plugins/medicMonitor/medic_monitor_page/medic_monitor_page.php',
    datatype: "json",
    data: {
      data : dataToInsert
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

function deleteRow(element_time){
  jQuery.ajax({
    type: "POST",
    url: 'plugins/medicMonitor/medic_monitor_page/medic_monitor_page.php',
    datatype: "json",
    data: {
      date_to_remove : element_time
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

function downloadInfo(){
  var category = $('select[name=category]').val();
  jQuery.ajax({
    type: "POST",
    url: 'plugins/medicMonitor/medic_monitor_page/medic_monitor_download.php',
    datatype: "json",
    data: {
      category_id : category
    },
    success: function (response) {
      console.log(response);
      location.reload();
    },
    error: function (response) {
      $("#errorForm").show();
    }
  });
}