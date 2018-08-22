function openDesc(eventId)
{
    var eventIdDesc = 'event-desc-'+eventId;
    var eventIdButton = 'event-button-'+eventId;
    if(document.getElementById(eventIdDesc).style.display === "none")
    {
        document.getElementById(eventIdButton).innerText = 'Zamknij opis';
        document.getElementById(eventIdDesc).style.display = "block";
    }
    else
    {
        document.getElementById(eventIdDesc).style.display = "none";
        document.getElementById(eventIdButton).innerText = 'Opis';
    }
}

function openSignUps(eventId)
{
    var eventIdSign = 'event-sign-up-'+eventId;
    if(document.getElementById(eventIdSign).style.display === "none")
    {
        document.getElementById(eventIdSign).style.display = "block";

        axios.post('/save', { firstName: 'Marlon', lastName: 'Bernardes' })
            .then(function(response){
                console.log('saved successfully')
            });
    }
    else
    {
        document.getElementById(eventIdSign).style.display = "none";
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
