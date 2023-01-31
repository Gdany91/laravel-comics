@extends("layouts.main_layout")
@section("content")

<div class="conteiner-fluid ">

    <div class="conteiner  my_cont_second d-flex justify-content-between ">
        <div class="left">
            <h2>
                ACTION COMICS #1000: THE DELUXE EDITION
            </h2>
            <div class="my_price d-flex justify-content-between bg-success p-2">
                <div>
                    U.S. Price <span>$19.99</span>
                </div>
                
                <div class="my_availabile d-flex gap-4">
                    <div class="my_availabile-left">
                        AVAILABLE
                    </div>
                    <span class="my_availabile-right border px-2">
                        check Availability
                    </span>
                </div>
            </div>
            <p>
                The celebration of 1,000 Issues or Action Comics continues with a new, Deluxe Edition or the comic that won raves when it hit comics shops in April! This hardcover includes all the stories fromthatIssue, DIus the tale LevI an artst1s that appeared in the Actioncomics. o rears Ur supermanars, design sketches by ImLee tor subermans ne lo, scripts for the storles, the original art Trom the lost story turInby Curt Swan and more! Plus: a complete reprint of the stories that started it all-the Supermarstories Action Comics #1 and 2 from 1938!
            </p>
        </div>
        <div class="right">
            <h4>ADVERTISEMENT</h4>
            <img src="{{Vite::asset('resources/img/adv.jpg')}}" alt="">
        </div>
    </div>
    
</div>


@endsection