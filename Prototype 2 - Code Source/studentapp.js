$(document).ready(function(){
var studentsList;
function getall() {
  $(".studentsList").html(" ");
  $.ajax({
    url:"api/getStudents.php",
    method:"GET",
    success:function(data) {
      studentsList = JSON.parse(data);
      console.log(studentsList);
      for (var i = 0; i < studentsList.length; i++) {
        $(".studentsList").append('<li><h3>'+"Name: "+studentsList[i]["name"]+'</h3><h3>'+"FatherName: "+studentsList[i]["fathername"]+'</h3><h3>'+"Rollno: "+studentsList[i]["rollno"]+'</h3><h3>'+"Degree: "+studentsList[i]["degree"]+'</h3><h3>'+"Branch: "+studentsList[i]["branch"]+'</h3><input type="hidden" value="" class="stdID"></li>');
      }
    }
  })
}
getall();

// Add a student to database
$(".submit-student").click(function() {
  var sName = $(".studentName").val();
  var sFname = $(".studentFname").val();
  var sRollno = $(".studentRollno").val();
  var sDegree = $(".studentDegree").val();
  var sBranch = $(".studentBranch").val();

  $.ajax({
    url:"api/addStudents.php",
    method:"POST",
    data:{
      name :sName,
      fathername :sFname,
      rollno :sRollno,
      degree :sDegree,
      branch :sBranch
    },
    success:function(data, status) {
      console.log(status);
    getall();
  }
  })
})
$(".downArrow").click(function() {
  $(".add-form").slideToggle("slow");
})
$(".submit-student").click(function() {
$(".add-form").hide();
})
$(".close").click(function() {
$(".add-form").hide();
})
$(".close").click(function() {
})
})
