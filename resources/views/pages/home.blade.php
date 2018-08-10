@extends('layouts.master')
@section('content')
    {{--<div class="essence">--}}
        <div id = "slide">
            <img class="img" src="https://scontent.fpoz2-1.fna.fbcdn.net/v/t1.0-9/35852499_978815935628901_3482892463268429824_o.jpg?_nc_cat=0&oh=c797dbcc4c12ed2cb8f5bfb8e2fa8e9d&oe=5BFEAD46" alt="Dancers">
            <img class="img" src="https://scontent.fpoz2-1.fna.fbcdn.net/v/t1.0-9/35922811_978814038962424_2454020875574312960_o.jpg?_nc_cat=0&oh=f1862605460760c4c0011ff6379cf0af&oe=5C0F7644" alt="Show">
            <img class="img" src="https://scontent.fpoz2-1.fna.fbcdn.net/v/t1.0-9/36031373_978810182296143_1896014064438476800_o.jpg?_nc_cat=0&oh=4bbd992c43a0c48b3696889f901ea3b3&oe=5C118D9C" alt="Marti">
            <img class="img" src="https://scontent.fpoz2-1.fna.fbcdn.net/v/t1.0-9/36176074_978811385629356_7112807008608190464_o.jpg?_nc_cat=0&oh=1ce7e63e53c837073e78a703c7bd7323&oe=5C03E1E7" alt="Punie-plecy">
            <img class="img" src="https://scontent.fpoz2-1.fna.fbcdn.net/v/t1.0-9/36200100_978815018962326_4046742792158838784_o.jpg?_nc_cat=0&oh=f7e2bc062b515966453d40a32954a95b&oe=5C0E2077" alt="Martin">
            <div id="scroll-trigger">
                <button class="button-left" onclick="plusIndex(-1)">
                    <span id="btn-wrapper">
                        <i class="fas fa-chevron-left"></i>
                    </span>
                </button>
                <button class="button-right" onclick="plusIndex(1)">
                    <span id="btn-wrapper">
                        <i class="fas fa-chevron-right"></i>
                    </span>
                </button>
            </div>
            <div class="description-on-picture">
                <p class="beginning"> Point Dance Studio - to poznańska szkoła tańca, miejsce w którym dzieci, młodzież i dorośli mogą doskonalić swoje umiejętności taneczne oraz aktywnie spędzić wolny czas.
                    Studio powstało w 2015 r. z inicjatywy Grzegorza Kuciaka. Obecnie o Pointa dbają Grzegorz i Mariusz Lubawy. </p>
            </div>
        </div>
        <div class="description-on-empty">
            <p class="end"> Point to miejsce, w którym poprzez zajęcia taneczne możesz rozwijać ciało, pobudzać kreatywność i kształtować charakter.
            Lekcje tańca to nie tylko ruch ciała, chcemy żeby świat więcej ruszał głową.
                Łączy nas przekonanie że taniec to coś więcej niż machanie rękami - Taniec to sztuka. Rozwijania swoich atutów. Pracowania nad niedoskonałościami. Czerpania radości z sukcesów. Radzenia sobie z porażkami. Jest to wspaniały środek do poznawania samego siebie i pracy nad własną osobowością. </p>
            <p> W naszym Studio poznasz style Street Dance - hip hop, popping, locking, house, waacking, jak również nowocześniejsze formy czerpiące ze Street Dance - new age, JFH, jazz-funk.
            Nasi instruktorzy to aktywni na polskiej i światowej scenie tancerze, którzy wciąż doskonalą swoje umiejętności. </p>
        </div>
    {{--</div>--}}


<script>
    var index = 1;

    function plusIndex(n)
    {
        index = index + n;
        showImage(index);
    }

    showImage(1);

    function showImage(n)
    {
        var i;
        var x = document.getElementsByClassName("img");
        if(n>x.length)
            index = 1;
        if(n<1)
            index = x.length;

        for(i=0;i<x.length;i++)
        {
            x[i].style.display = "none";
        }
        x[index-1].style.display = "block";
    }

    autoSlide();
    function autoSlide()
    {
        var i;
        var x = document.getElementsByClassName("img");
        for(i=0;i < x.length;i++)
        {
            x[i].style.display = "none";
        }
        if(index > x.length) {index = 1}
        x[index-1].style.display = "block";
        index++;
        setTimeout(autoSlide, 6000);
    }

</script>
@stop