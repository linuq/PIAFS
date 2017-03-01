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
