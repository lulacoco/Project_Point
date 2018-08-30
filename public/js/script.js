function openEventDesc(eventId)
{
    var eventIdDesc = 'event-desc-' + eventId;
    var eventIdButton = 'event-button-' + eventId;

    var descElement = $('#'+eventIdDesc);

    if(descElement.hasClass("open"))
    {
        document.getElementById(eventIdButton).innerText = 'Opis';
        descElement.removeClass("open");
    }
    else
    {
        document.getElementById(eventIdButton).innerText = 'Zwiń';
        descElement.addClass("open");
    }
}

function openEventSignUps(eventId)
{
    var eventIdSign = 'event-sign-up-' + eventId;
    if(document.getElementById(eventIdSign).style.display === "none")
    {
        document.getElementById(eventIdSign).style.display = "block";
        window.location.href = "events/sign-up-" + eventId;
    }
    else
    {
        document.getElementById(eventIdSign).style.display = "none";
    }
}

function openEventSignOffs(eventId)
{
    var eventIdSign = 'event-sign-off-' + eventId;
    if(document.getElementById(eventIdSign).style.display === "none")
    {
        document.getElementById(eventIdSign).style.display = "block";
        window.location.href = "events/sign-off-" + eventId;
    }
    else
    {
        document.getElementById(eventIdSign).style.display = "none";
    }
}

function openWorkshopDesc(workshopId)
{
    var workshopIdDesc = 'workshop-desc-' + workshopId;
    var workshopIdButton = 'workshop-button-' + workshopId;

    var descElement = $('#'+workshopIdDesc);


    if(descElement.hasClass("open"))
    {
        document.getElementById(workshopIdButton).innerText = 'Opis';
        descElement.removeClass("open");
    }
    else
    {
        document.getElementById(workshopIdButton).innerText = 'Zwiń';
        descElement.addClass("open");
    }
}


function openWorkshopSignUps(workshopId)
{
    var workshopIdSign = 'workshop-sign-up-' + workshopId;
    if(document.getElementById(workshopIdSign).style.display === "none")
    {
        document.getElementById(workshopIdSign).style.display = "block";
        window.location.href = "workshops/sign-up-" + workshopId;
    }
    else
    {
        document.getElementById(workshopIdSign).style.display = "none";
    }
}

document.addEventListener("DOMContentLoaded", function(event)
{
    // menu button function

    document.getElementById("dropdown-trigger").addEventListener("click", function (e)
    {
        e.preventDefault();
        e.stopPropagation();

        if(document.getElementById("dropdown-menu").style.display === "none") {
            document.getElementById("dropdown-menu").style.display = "block";
        }
        else {
            document.getElementById("dropdown-menu").style.display = "none";
        }
    });

    document.body.addEventListener("click", function ()
    {
        if(document.getElementById("dropdown-menu").style.display === "block"){
            document.getElementById("dropdown-menu").style.display = "none";
        }
    });
});



    // pictures slideshow

    // var index = 1;
    //
    // function plusIndex(n)
    // {
    //     index = index + n;
    //     showImage(index);
    // }
    //
    // document.getElementsByClassName("button-left").addEventListener("onclick", function ()
    // {
    //     plusIndex(-1);
    // })
    //
    // document.getElementsByClassName("button-right").addEventListener("onclick", function ()
    // {
    //     plusIndex(1);
    // })
    //
    // showImage(1);
    //
    // function showImage(n)
    // {
    //     var i;
    //     var x = document.getElementsByClassName("img");
    //     if(n>x.length)
    //         index = 1;
    //     if(n<1)
    //         index = x.length;
    //
    //     for(i=0;i<x.length;i++)
    //     {
    //         document.getElementsByClassName("img").x[i].style.display = "none";
    //     }
    //     document.getElementsByClassName("img").x[index-1].style.display = "block";
    // }
    //
    // autoSlide();
    // function autoSlide()
    // {
    //     alert("hi");
    //  setTimeout(autoSlide, 5000);
    // }
