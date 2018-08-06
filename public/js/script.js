document.addEventListener("DOMContentLoaded", function(event)
{
    console.log(document.documentElement.clientWidth);
    document.getElementById("dropdown-trigger").addEventListener("click", function ()
    {
        if(document.getElementById("dropdown-menu").style.display === "block")
            document.getElementById("dropdown-menu").style.display = "none";
        else
            document.getElementById("dropdown-menu").style.display = "block";
    })
});