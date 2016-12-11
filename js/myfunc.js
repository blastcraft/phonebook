function getlist(){
    var name = $('#name').val();
    var phone = $('#phone').val();
    $.ajax({
        type: "POST",
        url: "/showlist",
        data: {name:name, phone:phone}
    }).done(function( result )
    {
        $("#searchlist").html(result);
    });
}