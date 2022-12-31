$(document).ready(function ()
{
    //alert("hey im ready")
    var inputs = $("#code")
    var file_name= $("#save");
    
    var e =ace.edit("code");
    e.getSession().setMode("ace/mode/html");
    e.setTheme("ace/theme/xcode");
    e.setValue(`
    <!DOCTYPE html>
    <html lang="en">
    <head>
         <meta charset="UTF-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <title>Document</title>
     </head>
    <body>

    
   </body>
</html>

    
    `);//test_alert=$('#code').val();
    //alert(test_alert);
$("#btn").on("click",function(){
    $("#output").html(e.getValue());
    
});

$("#saving").click(function(){
    alert("saving");
    console.log("Hi")
    var output = $('#output').text()
    $.ajax({
        url:"sqlserver.php",
        method:"POST",
        data:{
            code: e.getSession().getValue(),
            input: inputs.val(),
            filename: file_name.val(),
            outputs:output
        },
        success:function(response){
            console.log(response);
        }
    })
})

});