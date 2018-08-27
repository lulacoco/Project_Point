function openEventDesc(eventId)
{
    var eventIdDesc = 'event-desc-' + eventId;
    var eventIdButton = 'event-button-' + eventId;
    if(document.getElementById(eventIdDesc).style.display === "none")
    {
        document.getElementById(eventIdButton).innerText = 'Zwiń';
        document.getElementById(eventIdDesc).style.display = "block";
    }
    else
    {
        document.getElementById(eventIdDesc).style.display = "none";
        document.getElementById(eventIdButton).innerText = 'Rozwiń';
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

function openWorkshopDesc(workshopId)
{
    var workshopIdDesc = 'workshop-desc-' + workshopId;
    var workshopIdButton = 'workshop-button-' + workshopId;
    if(document.getElementById(workshopIdDesc).style.display === "none")
    {
        document.getElementById(workshopIdButton).innerText = 'Zamknij opis';
        document.getElementById(workshopIdDesc).style.display = "block";
    }
    else
    {
        document.getElementById(workshopIdDesc).style.display = "none";
        document.getElementById(workshopIdButton).innerText = 'Opis';
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

    document.getElementById("dropdown-trigger").addEventListener("click", function ()
    {
        if(document.getElementById("dropdown-menu").style.display === "none")
            document.getElementById("dropdown-menu").style.display = "block";
        else
            document.getElementById("dropdown-menu").style.display = "none";
    })
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
