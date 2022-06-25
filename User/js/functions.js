   function city_selection_function(){
      // alert($("#province_selection").val());
    $.ajax({
                url:'get_city.php',
                method:'post',
                data:
                {
                  province_name:$("#province_selection").val()
                },
                datatype:'json',
                success:function(data){
                  $("#city_selection").empty();
                  $("#city_selection").append("<option>Select City</option>");
                  $.each($.parseJSON(data), function(idx, obj) {
                  $("#city_selection").append("<option value="+obj.city_name+">"+obj.city_name+"</option>");
                });
              }
            })
}
function feedback_function(){
  $.ajax({
            url:'feedback.php',
            method:'post',
            data:{
                  feedback_email:$("#feedback_email").val(),
                  feedback_content:$("#feedback_content").val() 
            },
            datatype:'json',
            success:function(data){
              if (data == -1) {
                alert("Cannot Insert FeedBack Connection Error Please Try Again");
              }
              else if (data == 0) {
                alert("Cannot Insert FeedBack Please Try Again");
              }
              else if (data == 1) {}{
                alert('FeedBack Successfully Inserted');
              }
              $('#feedback_form')[0].reset();
            }
          })
}
function subscribe_function(){
  $.ajax({
            url:'subscribe.php',
            method:'post',
            data:{
                  subscribe_email:$("#subscribe_email").val(),
            },
            datatype:'json',
            success:function(data){
              if (data == -1) {
                alert("Cannot Subscribe Connection Error Please Try Again");
              }
              else if (data == 0) {
                alert("Cannot Subscribe Please Try Again");
              }
              else if (data == 1){
                alert('You Have Been Subscribe To Our NewsLetter Successfully');
              }
              $('#subscribe_form')[0].reset();
            }
          })
}
function onLoadFunction(){
  var check = document.getElementById('province_name').value;
  // alert(check);
  if (check=='Punjab') {
    $("p:nth-child(5)").addClass("Change_p_Styling");
    $("p:nth-child(9)").addClass("Change_p_Styling");
    $("p:nth-child(13)").addClass("Change_p_Styling");
    $("p:nth-child(17)").addClass("Change_p_Styling");
    $("p:nth-child(20)").addClass("Change_p_Styling");
    $("p:nth-child(23)").addClass("Change_p_Styling");
    $("p:nth-child(26)").addClass("Change_p_Styling");
    $("p:nth-child(29)").addClass("Change_p_Styling");
    $("p:nth-child(32)").addClass("Change_p_Styling");
    $("p:nth-child(35)").addClass("Change_p_Styling");
    $("p:nth-child(38)").addClass("Change_p_Styling");
    $("p:nth-child(41)").addClass("Change_p_Styling");
    $("p:nth-child(44)").addClass("Change_p_Styling");
  }
  else if (check=='Sindh') {
    $(".size-full").remove();

    $("p:nth-child(6)").addClass("Change_p_Styling");
    $("p:nth-child(13)").addClass("Change_p_Styling");
    $("p:nth-child(15)").addClass("Change_p_Styling");
    $("p:nth-child(18)").addClass("Change_p_Styling");
    $("p:nth-child(21)").addClass("Change_p_Styling");
    $("p:nth-child(24)").addClass("Change_p_Styling");
  }
  else if (check=='Balochistan') {
    $(".wp-image-3904").remove();

    $("p:nth-child(6)").addClass("Change_p_Styling");
    $("p:nth-child(27)").addClass("Change_p_Styling");
    $("p:nth-child(30)").addClass("Change_p_Styling");
    $("p:nth-child(33)").addClass("Change_p_Styling");
    $("p:nth-child(36)").addClass("Change_p_Styling");
    $("p:nth-child(39)").addClass("Change_p_Styling");
    $("p:nth-child(42)").addClass("Change_p_Styling");
  }
  else if (check=='KPK') {
    $("p:nth-child(6)").addClass("Change_p_Styling");
    $("p:nth-child(9)").addClass("Change_p_Styling");
    $("p:nth-child(15)").addClass("Change_p_Styling");
    $("p:nth-last-child(2)").addClass("Change_p_Styling");
  }
}
function onLoadFunctionForUniPage(){
  var check = document.getElementById('university_name').innerHTML;
  var check2 = document.getElementById('field_name').innerHTML;

  if (check==' IST' && check2==' BS(EE)') {
  $("table").addClass("zebra table table-bordered table-striped Change_table_Styling");
  $("td").addClass("Change_td_Styling");
  $("th").addClass("Change_th_Styling");
  
  $("#province_name").addClass("tr_after_heading");
  $("#city_name").addClass("tr_after_heading");
  $("#university_name").addClass("tr_after_heading");
  $("#field_name").addClass("tr_after_heading");

  $("tr > td > p ").addClass("Change_p_Styling");

  $("tr:nth-child(1) > td").addClass("Change_1_td_Styling");
  $("tr:nth-child(1) > td > p ").addClass("Change_p_Styling_1");
  $("tr:nth-child(2) > td").addClass("Change_2_td_Styling");
  $("span").addClass("Change_span_Styling");
  $("tr:nth-child(1) > td > p > strong > span").addClass("Change_span_Styling_1");

  $("tr:nth-child(14) > td > p ").addClass("Change_p_Styling_1");
  $("tr:nth-child(13) > td").addClass("Change_1_td_Styling");
  $("tr:nth-child(14) > td").addClass("Change_1_td_Styling");
  $("tr:nth-child(15) > td").addClass("Change_2_td_Styling");
  $("tr:nth-child(14) > td > p > strong > span").addClass("Change_span_Styling_1");
  $("tr:nth-child(15) > td > p > strong > span").addClass("Change_span_Styling_2");

  $("tr:nth-child(26) > td > p ").addClass("Change_p_Styling_1");
  $("tr:nth-child(25) > td").addClass("Change_1_td_Styling");
  $("tr:nth-child(26) > td").addClass("Change_1_td_Styling");
  $("tr:nth-child(27) > td").addClass("Change_2_td_Styling");
  $("tr:nth-child(26) > td > p > strong > span").addClass("Change_span_Styling_1");
  $("tr:nth-child(27) > td > p > strong > span").addClass("Change_span_Styling_2");

  $("tr:nth-child(38) > td > p ").addClass("Change_p_Styling_1");
  $("tr:nth-child(37) > td").addClass("Change_1_td_Styling");
  $("tr:nth-child(38) > td").addClass("Change_1_td_Styling");
  $("tr:nth-child(39) > td").addClass("Change_2_td_Styling");
  $("tr:nth-child(38) > td > p > strong > span").addClass("Change_span_Styling_1");
  $("tr:nth-child(39) > td > p > strong > span").addClass("Change_span_Styling_2");
  
  $("tr:nth-child(50) > td > p ").addClass("Change_p_Styling_1");
  $("tr:nth-child(49) > td").addClass("Change_1_td_Styling");
  $("tr:nth-child(50) > td").addClass("Change_1_td_Styling");
  $("tr:nth-child(51) > td").addClass("Change_2_td_Styling");
  $("tr:nth-child(50) > td > p > strong > span").addClass("Change_span_Styling_1");
  $("tr:nth-child(51) > td > p > strong > span").addClass("Change_span_Styling_2");

  $("tr:nth-child(62) > td > p ").addClass("Change_p_Styling_1");
  $("tr:nth-child(61) > td").addClass("Change_1_td_Styling");
  $("tr:nth-child(62) > td").addClass("Change_1_td_Styling");
  $("tr:nth-child(63) > td").addClass("Change_2_td_Styling");
  $("tr:nth-child(62) > td > p > strong > span").addClass("Change_span_Styling_1");
  $("tr:nth-child(63) > td > p > strong > span").addClass("Change_span_Styling_2");

  $("tr:nth-child(74) > td > p ").addClass("Change_p_Styling_1");
  $("tr:nth-child(73) > td").addClass("Change_1_td_Styling");
  $("tr:nth-child(74) > td").addClass("Change_1_td_Styling");
  $("tr:nth-child(75) > td").addClass("Change_2_td_Styling");
  $("tr:nth-child(74) > td > p > strong > span").addClass("Change_span_Styling_1");
  $("tr:nth-child(75) > td > p > strong > span").addClass("Change_span_Styling_2");

  $("tr:nth-child(85) > td > p ").addClass("Change_p_Styling_1");
  $("tr:nth-child(84) > td").addClass("Change_1_td_Styling");
  $("tr:nth-child(85) > td").addClass("Change_1_td_Styling");
  $("tr:nth-child(86) > td").addClass("Change_2_td_Styling");
  $("tr:nth-child(85) > td > p > strong > span").addClass("Change_span_Styling_1");
  $("tr:nth-child(86) > td > p > strong > span").addClass("Change_span_Styling_2");
  
  $("tr:nth-child(93) > td").addClass("Change_1_td_Styling");

  }
  else if (check==' IST' && check2==' BS(ME)') {
  $("table").addClass("zebra table table-bordered table-striped Change_table_Styling");
  $("td").addClass("Change_td_Styling");
  $("th").addClass("Change_th_Styling");
  
  $("#province_name").addClass("tr_after_heading");
  $("#city_name").addClass("tr_after_heading");
  $("#university_name").addClass("tr_after_heading");
  $("#field_name").addClass("tr_after_heading");

  $("tr > td > p ").addClass("Change_p_Styling");

  $("span").addClass("Change_span_Styling");

  $("tr:nth-child(3) > td").addClass("Change_1_td_Styling");
  $("tr:nth-child(3) > td > p ").addClass("Change_p_Styling_1");
  $("tr:nth-child(3) > td > p > span > strong").addClass("Change_span_Styling_1");

  $("tr:nth-child(14) > td").addClass("Change_1_td_Styling");
  $("tr:nth-child(14) > td > p ").addClass("Change_p_Styling_1");
  $("tr:nth-child(14) > td > p > strong > span").addClass("Change_span_Styling_1");

  $("tr:nth-child(25) > td").addClass("Change_1_td_Styling");
  $("tr:nth-child(25) > td > p ").addClass("Change_p_Styling_1");
  $("tr:nth-child(25) > td > p > strong > span").addClass("Change_span_Styling_1");

  $("tr:nth-child(35) > td").addClass("Change_1_td_Styling");
  $("tr:nth-child(35) > td > p ").addClass("Change_p_Styling_1");
  $("tr:nth-child(35) > td > p > strong > span").addClass("Change_span_Styling_1");

  $("tr:nth-child(44) > td").addClass("Change_1_td_Styling");
  $("tr:nth-child(44) > td > p ").addClass("Change_p_Styling_1");
  $("tr:nth-child(44) > td > p > strong > span").addClass("Change_span_Styling_1");

  $("tr:nth-child(55) > td").addClass("Change_1_td_Styling");
  $("tr:nth-child(55) > td > p ").addClass("Change_p_Styling_1");
  $("tr:nth-child(55) > td > p > strong > span").addClass("Change_span_Styling_1");

  $("tr:nth-child(65) > td").addClass("Change_1_td_Styling");
  $("tr:nth-child(65) > td > p ").addClass("Change_p_Styling_1");
  $("tr:nth-child(65) > td > p > strong > span").addClass("Change_span_Styling_1");

  $("tr:nth-child(76) > td").addClass("Change_1_td_Styling");
  $("tr:nth-child(76) > td > p ").addClass("Change_p_Styling_1");
  $("tr:nth-child(76) > td > p > strong > span").addClass("Change_span_Styling_1");
  }
  else if (check==' UMT' && check2==' BS(Chemistry)') {
  $("table").addClass("zebra table table-bordered table-striped Change_table_Styling");
  // $("td").addClass("Change_td_Styling");
  $(".heading_table > thead > tr > th").addClass("Change_th_Styling");

  $("#province_name").addClass("tr_after_heading");
  $("#city_name").addClass("tr_after_heading");
  $("#university_name").addClass("tr_after_heading");
  $("#field_name").addClass("tr_after_heading");

  $("tr:nth-child(1) > th").addClass("Change_1_th_Styling");
  
  $("tr:nth-child(2) > td").addClass("Change_p_Styling_1");
  $("tr:nth-child(2) > td > p > b").addClass("Change_b_Styling");
  
  $("tr:nth-child(9) > td").addClass("Change_p_Styling_1");
  $("tr:nth-child(9) > td > p > b").addClass("Change_b_Styling");
  
  $("tr:nth-child(17) > td").addClass("Change_p_Styling_1");
  $("tr:nth-child(17) > td > p > b").addClass("Change_b_Styling");
  
  $("tr:nth-child(24) > td").addClass("Change_p_Styling_1");
  $("tr:nth-child(24) > td > p > b").addClass("Change_b_Styling");

  }
  else if (check==' UMT' && check2==' BS(Industrial Engineering)') {
  $("table").addClass("zebra table table-bordered table-striped Change_table_Styling");
  $("td").addClass("Change_td_Styling");
  $("#province_name_heading").addClass("Change_th_Styling");
  $("#city_name_heading").addClass("Change_th_Styling");
  $("#university_name_heading").addClass("Change_th_Styling");
  $("#field_name_heading").addClass("Change_th_Styling");
  
  $("#province_name").addClass("tr_after_heading");
  $("#city_name").addClass("tr_after_heading");
  $("#university_name").addClass("tr_after_heading");
  $("#field_name").addClass("tr_after_heading");

  $("tr > td > p ").addClass("Change_p_Styling");

  $("span").addClass("Change_span_Styling");

  $("tr:nth-child(1) > td").addClass("Change_1_td_Styling");
  $("tr:nth-child(3) > th").addClass("Change_th_Styling_1");
  $("tr:nth-child(1) > td > strong ").addClass("Change_span_Styling_2");
  $("tr:nth-child(2) > td > strong ").addClass("Change_span_Styling_2");

  }
  else if (check==' FAST' && check2==' BS(CS)') {
  $("table").addClass("zebra table table-bordered table-striped Change_table_Styling");
  $("td").addClass("Change_td_Styling");
  $("th").addClass("Change_th_Styling2");
  
  $("#province_name_heading").addClass("Change_th_Styling");
  $("#city_name_heading").addClass("Change_th_Styling");
  $("#university_name_heading").addClass("Change_th_Styling");
  $("#field_name_heading").addClass("Change_th_Styling");
  
  $("#province_name").addClass("tr_after_heading");
  $("#city_name").addClass("tr_after_heading");
  $("#university_name").addClass("tr_after_heading");
  $("#field_name").addClass("tr_after_heading");

  $("table:nth-child(3) > thead:nth-child(1) > tr:nth-child(1) > th").addClass("Change_1_td_Styling");
  $("table:nth-child(3) > thead:nth-child(1) > tr:nth-child(1) > th").addClass("SemesterStyling");
  $("table:nth-child(3) > thead:nth-child(1) > tr:nth-child(1) > th").removeClass("Change_th_Styling2");
  $("table:nth-child(3) > thead:nth-child(1) > tr:nth-child(1) > th").attr('colspan',5);

  $("table:nth-child(3) > thead:nth-child(4) > tr:nth-child(1) > th").addClass("Change_1_td_Styling");
  $("table:nth-child(3) > thead:nth-child(4) > tr:nth-child(1) > th").addClass("SemesterStyling");
  $("table:nth-child(3) > thead:nth-child(4) > tr:nth-child(1) > th").removeClass("Change_th_Styling2");

  $("table:nth-child(3) > thead:nth-child(4) > tr:nth-child(1) > th").attr('colspan',5);
 
  $("table:nth-child(3) > thead:nth-child(7) > tr:nth-child(1) > th").addClass("Change_1_td_Styling");
  $("table:nth-child(3) > thead:nth-child(7) > tr:nth-child(1) > th").addClass("SemesterStyling");
  $("table:nth-child(3) > thead:nth-child(7) > tr:nth-child(1) > th").removeClass("Change_th_Styling2");
  $("table:nth-child(3) > thead:nth-child(7) > tr:nth-child(1) > th").attr('colspan',5);

  $("table:nth-child(3) > thead:nth-child(10) > tr:nth-child(1) > th").addClass("Change_1_td_Styling");
  $("table:nth-child(3) > thead:nth-child(10) > tr:nth-child(1) > th").addClass("SemesterStyling");
  $("table:nth-child(3) > thead:nth-child(10) > tr:nth-child(1) > th").removeClass("Change_th_Styling2");
  $("table:nth-child(3) > thead:nth-child(10) > tr:nth-child(1) > th").attr('colspan',5);

  $("table:nth-child(3) > thead:nth-child(13) > tr:nth-child(1) > th").addClass("Change_1_td_Styling");
  $("table:nth-child(3) > thead:nth-child(13) > tr:nth-child(1) > th").addClass("SemesterStyling");
  $("table:nth-child(3) > thead:nth-child(13) > tr:nth-child(1) > th").removeClass("Change_th_Styling2");
  $("table:nth-child(3) > thead:nth-child(13) > tr:nth-child(1) > th").attr('colspan',5);
  
  $("table:nth-child(3) > thead:nth-child(16) > tr:nth-child(1) > th").addClass("Change_1_td_Styling");
  $("table:nth-child(3) > thead:nth-child(16) > tr:nth-child(1) > th").addClass("SemesterStyling");
  $("table:nth-child(3) > thead:nth-child(16) > tr:nth-child(1) > th").removeClass("Change_th_Styling2");
  $("table:nth-child(3) > thead:nth-child(16) > tr:nth-child(1) > th").attr('colspan',5);
 
  $("table:nth-child(3) > thead:nth-child(19) > tr:nth-child(1) > th").addClass("Change_1_td_Styling");
  $("table:nth-child(3) > thead:nth-child(19) > tr:nth-child(1) > th").addClass("SemesterStyling");
  $("table:nth-child(3) > thead:nth-child(19) > tr:nth-child(1) > th").removeClass("Change_th_Styling2");
  $("table:nth-child(3) > thead:nth-child(19) > tr:nth-child(1) > th").attr('colspan',5);
 
  $("table:nth-child(3) > thead:nth-child(22) > tr:nth-child(1) > th").addClass("Change_1_td_Styling");
  $("table:nth-child(3) > thead:nth-child(22) > tr:nth-child(1) > th").addClass("SemesterStyling");
  $("table:nth-child(3) > thead:nth-child(22) > tr:nth-child(1) > th").removeClass("Change_th_Styling2");
  $("table:nth-child(3) > thead:nth-child(22) > tr:nth-child(1) > th").attr('colspan',5);
 
  }

}
//    function field_selection_function(){
//    var addedProductCodes = [];
//     $.ajax({
//                 url:'get_field.php',
//                 method:'post',
//                 data:
//                 {
//                   city_name:$("#city_selection").val()
//                 },
//                 datatype:'json',
//                 success:function(data){
//                   $("#field_selection").empty();
//                   $("#field_selection").append("<option>Select Field</option>");
//                   $.each($.parseJSON(data), function(idx, obj) {
//                   var td_productCode = obj.field;
//                   var index = $.inArray(td_productCode, addedProductCodes);
//                     if (index >= 0) {

//                     }
//                     else{
//                       $("#field_selection").append("<option value="+obj.field+">"+obj.field+"</option>");
//                         addedProductCodes.push(td_productCode);
//                     }
//                 });
//               }
//             })
// }
// function province_selection_function(){
//   $("#province_selection").empty();
//   $("#province_selection").append("<option>Select Province</option>");
// }