$(document).ready(function(){
var studentsList;
function getall() {
  $(".studentsList").html("");
  $.ajax({
    url:"http://localhost:8080/api/getStudents.php",
    method:"GET",
    success:function(data) {
      studentsList = JSON.parse(data);
      console.log(studentsList);
      for (var i = 0; i < studentsList.length; i++) {
        $(".studentsList").append('<li><h3>'+"Last Name: "+studentsList[i]["name"]+'</h3><h3>'+"First Name: "+studentsList[i]["fathername"]+'</h3><h3>'+"Rollno: "+studentsList[i]["rollno"]+'</h3><h3>'+"Degree: "+studentsList[i]["degree"]+'</h3><h3>'+"Branch: "+studentsList[i]["branch"]+'</h3></li>');
      }
    }
  })
}
getall();
});
