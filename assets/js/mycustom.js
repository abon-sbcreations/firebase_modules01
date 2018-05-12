$(document).ready(function(){
    $("#editRow").modal("hide");
});
$(document).on('click',".btnEdit", function () {
    
});
$(document).on('click',"#btnAdd", function () {
    $("#tblBody").append("<tr>"
            + "<td>1</td>"
            + "<td>2</td>"
            + "<td>3</td>"
            + "<td><button class='btn btn-info btn-primary btnEdit' data-toggle='modal'>Edit</button></td>"
            + "</tr>");
});


