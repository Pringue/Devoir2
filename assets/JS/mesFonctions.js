function CreationConference()
{
    $.ajax
    (
        {
            type:"get",
            url:"index.php/Welcome/CreationConference",
            success:function(data)
            {
                $("#listeConference").empty();
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
                $("#listeConference").empty();
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

function VoterConference()
{
    $.ajax
    (
        {
            type:"get",
            url:"index.php/Welcome/ListeConference",
            success:function(data)
            {
                $("#creationConference").empty();
                $("#listeConference").empty();
                $("#listeConference").append(data);
            },
            error:function()
            {
                alert('Erreur: Creation conference')
            }
        }
    )
}

function AjouterVote()
{
    var tabConference = Array();
    var tabConferenceVote = Array();
    $('input[type=checkbox]').each
    (
        function()
        {
            tabConference.push($(this).val());
            tabConferenceVote.push($(this).is(":checked"));
        }
    );
    $.ajax
    (
        {
            url:"index.php/Welcome/AddVote",
            type:'get',
            data:'tab1='+tabConference+"&tab2="+tabConferenceVote,
            success:function(data)
            {
                alert("Votes mis à jour");
                $("#creationConference").empty();
                $("#listeConference").empty();
                $("#listeConference").append(data);
            },
            error:function()
            {
                alert("Erreur : Insertion conference");
            }
        }
    );
}