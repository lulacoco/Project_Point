document.addEventListener("DOMContentLoaded", function(event)
{
    // button function

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
