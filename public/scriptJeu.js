$(document).ready(function(){

    $("#testJson").click(function(){
       
        $.post('recupJeu.php',function(data){
            $(".afficher").html(data);
        });
        return false;
    });


});