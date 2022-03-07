//insert DB
$("#btnSubmit").on("click", function(){
    //variaveis post
    var dataInsert = $("form#formList #dataList").val();
    var qtdInsert = $("form#formList #qtd").val();
    var prodInsert = $("form#formList #prod").val();
    var precoUniInsert = $("form#formList #precoUni").val();
    
    //empty
    if(dataInsert.trim() == "" || qtdInsert.trim() == "" || prodInsert.trim() == "" || precoUniInsert.trim() == ""){
        $("#msg").show().addClass("text-danger").html("Preencha todos os campos");
   }

    //ajax
    $.ajax({
        url: "./controllers/ControllersInsertDB.php",
        type: "POST",
        data: {
            dataList:dataInsert,
            qtd:qtdInsert,
            prod:prodInsert,
            precoUni:precoUniInsert
        },
    }).done( function(data){
        console.log(data);
        $("#formList").trigger("reset");
    });
});
//deleteDB
function deleteId(id){
    
    $.ajax({
        url: "../controllers/ControllerDelete.php",
        type: "GET",
        data: {
            id:id
        },
        success: function(data){
            console.log(data);
            setTimeout(function(){
            $('#msg').fadeOut('Slow');
            window.location="http://127.0.0.1/list/views/visualizar.php";
          },1000);
        }
    });
}
//updateDB
$(document).on('click','#btnUpdate',function() {
    var data = $("#formListUpdate").serialize();
    //ajax
    $.ajax({
        url: "../controllers/ControllerUpdate.php",
        type: "POST",
        data: data,
        success: function(data){
                console.log(data);
                setTimeout(function(){
                $('#msg').fadeOut('Slow');
                window.location="http://127.0.0.1/list/views/visualizar.php";
            },1000);						
        }
    });
});