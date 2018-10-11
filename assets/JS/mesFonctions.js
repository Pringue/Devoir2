function CreationConference()
{
    $.ajax
    (
        {
            type:"get",
            url:"index.php/Welcome/CreationConference",
            success:function(data)
            {
                $("#creationConference").empty();
                $("#creationConference").append(data);
            },
            error:function()
            {
                alert('Erreur: Creation conference')
            }
        }
    )
}

function insertionConference()
{
    var tabTechno = Array();
    var tabTechnoUtil = Array();
    $('input[type=checkbox]').each
    (
        function()
        {
            tabTechno.push($(this).val());
            tabTechnoUtil.push($(this).is(":checked"));
        }
    );
    $.ajax
    (
        {
            url:"index.php/Welcome/InsertionConference",
            type:'get',
            data:'tab1='+tabTechno+"&tab2="+tabTechnoUtil+"&num="+$("#num").val()+"&titre="+$("#titre").val()+"&contenu="+$("#contenu").val()+"&niveau="+$("#niv").val()+"&theme="+$("#theme").val(),
            success:function(data)
            {
                alert("Conférence créée");
                $("#creationConference").empty();
                $("#creationConference").append(data);
            },
            error:function()
            {
                alert("Erreur : Insertion conference");
            }
        }
    );
}