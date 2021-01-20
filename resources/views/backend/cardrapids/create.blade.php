@extends('adminlte::page')

@section('title', 'AdminLTE')



@section('content')
<div class="container">
    <form action="{{ route("cardrapid.store") }}" method="POST">
        
        @csrf
    
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    
    
        <select name="font" class="form-control mb-3" style="width: max-content; font-family: 'FontAwesome', 'Second Font name';">
            {{-- <option value="flaticon-023-flask"> <i class="flaticon-023-flask"></i></option>
            <option value="flaticon-011-compass"><i class="flaticon-011-compass"></i></option>
            <option value="flaticon-037-idea"><i class="flaticon-037-idea"></i></option> --}}


            
            <option value='fa-500px'>&#xf26e; fa-500px</option>
            <option value='fa-address-book'>&#xf2b9; fa-address-book</option>
            <option value='fa-address-book-o'>&#xf2ba; fa-address-book-o</option>
            <option value='fa-address-card'>&#xf2bb; fa-address-card</option>
            <option value='fa-address-card-o'>&#xf2bc; fa-address-card-o</option>
            <option value='fa-adjust'>&#xf042; fa-adjust</option>
            <option value='fa-adn'>&#xf170; fa-adn</option>
            <option value='fa-align-center'>&#xf037; fa-align-center</option>
            <option value='fa-align-justify'>&#xf039; fa-align-justify</option>
            <option value='fa-align-left'>&#xf036; fa-align-left</option>
            <option value='fa-align-right'>&#xf038; fa-align-right</option>
            <option value='fa-amazon'>&#xf270; fa-amazon</option>
            <option value='fa-ambulance'>&#xf0f9; fa-ambulance</option>
            <option value='fa-american-sign-language-interpreting'>&#xf2a3; fa-american-sign-language-interpreting</option>
            <option value='fa-anchor'>&#xf13d; fa-anchor</option>
            <option value='fa-android'>&#xf17b; fa-android</option>
            <option value='fa-angellist'>&#xf209; fa-angellist</option>
            <option value='fa-angle-double-down'>&#xf103; fa-angle-double-down</option>
            <option value='fa-angle-double-left'>&#xf100; fa-angle-double-left</option>
            <option value='fa-angle-double-right'>&#xf101; fa-angle-double-right</option>
            <option value='fa-angle-double-up'>&#xf102; fa-angle-double-up</option>
            <option value='fa-angle-down'>&#xf107; fa-angle-down</option>
            <option value='fa-angle-left'>&#xf104; fa-angle-left</option>
            <option value='fa-angle-right'>&#xf105; fa-angle-right</option>
            <option value='fa-angle-up'>&#xf106; fa-angle-up</option>
            <option value='fa-apple'>&#xf179; fa-apple</option>
            <option value='fa-archive'>&#xf187; fa-archive</option>
            <option value='fa-area-chart'>&#xf1fe; fa-area-chart</option>
            <option value='fa-arrow-circle-down'>&#xf0ab; fa-arrow-circle-down</option>
            <option value='fa-arrow-circle-left'>&#xf0a8; fa-arrow-circle-left</option>
            <option value='fa-arrow-circle-o-down'>&#xf01a; fa-arrow-circle-o-down</option>
            <option value='fa-arrow-circle-o-left'>&#xf190; fa-arrow-circle-o-left</option>
            <option value='fa-arrow-circle-o-right'>&#xf18e; fa-arrow-circle-o-right</option>
            <option value='fa-arrow-circle-o-up'>&#xf01b; fa-arrow-circle-o-up</option>
            <option value='fa-arrow-circle-right'>&#xf0a9; fa-arrow-circle-right</option>
            <option value='fa-arrow-circle-up'>&#xf0aa; fa-arrow-circle-up</option>
            <option value='fa-arrow-down'>&#xf063; fa-arrow-down</option>
            <option value='fa-arrow-left'>&#xf060; fa-arrow-left</option>
            <option value='fa-arrow-right'>&#xf061; fa-arrow-right</option>
            <option value='fa-arrow-up'>&#xf062; fa-arrow-up</option>
            <option value='fa-arrows'>&#xf047; fa-arrows</option>
            <option value='fa-arrows-alt'>&#xf0b2; fa-arrows-alt</option>
            <option value='fa-arrows-h'>&#xf07e; fa-arrows-h</option>
            <option value='fa-arrows-v'>&#xf07d; fa-arrows-v</option>
            <option value='fa-asl-interpreting'>&#xf2a3; fa-asl-interpreting</option>
            <option value='fa-assistive-listening-systems'>&#xf2a2; fa-assistive-listening-systems</option>
            <option value='fa-asterisk'>&#xf069; fa-asterisk</option>
            <option value='fa-at'>&#xf1fa; fa-at</option>
            <option value='fa-audio-description'>&#xf29e; fa-audio-description</option>
            <option value='fa-automobile'>&#xf1b9; fa-automobile</option>
            <option value='fa-backward'>&#xf04a; fa-backward</option>
            <option value='fa-balance-scale'>&#xf24e; fa-balance-scale</option>
            <option value='fa-ban'>&#xf05e; fa-ban</option>
            <option value='fa-bandcamp'>&#xf2d5; fa-bandcamp</option>
            <option value='fa-bank'>&#xf19c; fa-bank</option>
            <option value='fa-bar-chart'>&#xf080; fa-bar-chart</option>
            <option value='fa-bar-chart-o'>&#xf080; fa-bar-chart-o</option>
            <option value='fa-barcode'>&#xf02a; fa-barcode</option>
            <option value='fa-bars'>&#xf0c9; fa-bars</option>
            <option value='fa-bath'>&#xf2cd; fa-bath</option>
            <option value='fa-bathtub'>&#xf2cd; fa-bathtub</option>
            <option value='fa-battery'>&#xf240; fa-battery</option>
            <option value='fa-battery-0'>&#xf244; fa-battery-0</option>
            <option value='fa-battery-1'>&#xf243; fa-battery-1</option>
            <option value='fa-battery-2'>&#xf242; fa-battery-2</option>
            <option value='fa-battery-3'>&#xf241; fa-battery-3</option>
            <option value='fa-battery-4'>&#xf240; fa-battery-4</option>
            <option value='fa-battery-empty'>&#xf244; fa-battery-empty</option>
            <option value='fa-battery-full'>&#xf240; fa-battery-full</option>
            <option value='fa-battery-half'>&#xf242; fa-battery-half</option>
            <option value='fa-battery-quarter'>&#xf243; fa-battery-quarter</option>
            <option value='fa-battery-three-quarters'>&#xf241; fa-battery-three-quarters</option>
            <option value='fa-bed'>&#xf236; fa-bed</option>
            <option value='fa-beer'>&#xf0fc; fa-beer</option>
            <option value='fa-behance'>&#xf1b4; fa-behance</option>
            <option value='fa-behance-square'>&#xf1b5; fa-behance-square</option>
            <option value='fa-bell'>&#xf0f3; fa-bell</option>
            <option value='fa-bell-o'>&#xf0a2; fa-bell-o</option>
            <option value='fa-bell-slash'>&#xf1f6; fa-bell-slash</option>
            <option value='fa-bell-slash-o'>&#xf1f7; fa-bell-slash-o</option>
            <option value='fa-bicycle'>&#xf206; fa-bicycle</option>
            <option value='fa-binoculars'>&#xf1e5; fa-binoculars</option>
            <option value='fa-birthday-cake'>&#xf1fd; fa-birthday-cake</option>
            <option value='fa-bitbucket'>&#xf171; fa-bitbucket</option>
            <option value='fa-bitbucket-square'>&#xf172; fa-bitbucket-square</option>
            <option value='fa-bitcoin'>&#xf15a; fa-bitcoin</option>
            <option value='fa-black-tie'>&#xf27e; fa-black-tie</option>
            <option value='fa-blind'>&#xf29d; fa-blind</option>
            <option value='fa-bluetooth'>&#xf293; fa-bluetooth</option>
            <option value='fa-bluetooth-b'>&#xf294; fa-bluetooth-b</option>
            <option value='fa-bold'>&#xf032; fa-bold</option>
            <option value='fa-bolt'>&#xf0e7; fa-bolt</option>
            <option value='fa-bomb'>&#xf1e2; fa-bomb</option>
            <option value='fa-book'>&#xf02d; fa-book</option>
            <option value='fa-bookmark'>&#xf02e; fa-bookmark</option>
            <option value='fa-bookmark-o'>&#xf097; fa-bookmark-o</option>
            <option value='fa-braille'>&#xf2a1; fa-braille</option>
            <option value='fa-briefcase'>&#xf0b1; fa-briefcase</option>
            <option value='fa-btc'>&#xf15a; fa-btc</option>
            <option value='fa-bug'>&#xf188; fa-bug</option>
            <option value='fa-building'>&#xf1ad; fa-building</option>
            <option value='fa-building-o'>&#xf0f7; fa-building-o</option>
            <option value='fa-bullhorn'>&#xf0a1; fa-bullhorn</option>
            <option value='fa-bullseye'>&#xf140; fa-bullseye</option>
            <option value='fa-bus'>&#xf207; fa-bus</option>
            <option value='fa-buysellads'>&#xf20d; fa-buysellads</option>
            <option value='fa-cab'>&#xf1ba; fa-cab</option>
            <option value='fa-calculator'>&#xf1ec; fa-calculator</option>
            <option value='fa-calendar'>&#xf073; fa-calendar</option>
            <option value='fa-calendar-check-o'>&#xf274; fa-calendar-check-o</option>
            <option value='fa-calendar-minus-o'>&#xf272; fa-calendar-minus-o</option>
            <option value='fa-calendar-o'>&#xf133; fa-calendar-o</option>
            <option value='fa-calendar-plus-o'>&#xf271; fa-calendar-plus-o</option>
            <option value='fa-calendar-times-o'>&#xf273; fa-calendar-times-o</option>
            <option value='fa-camera'>&#xf030; fa-camera</option>
            <option value='fa-camera-retro'>&#xf083; fa-camera-retro</option>
            <option value='fa-car'>&#xf1b9; fa-car</option>
            <option value='fa-caret-down'>&#xf0d7; fa-caret-down</option>
            <option value='fa-caret-left'>&#xf0d9; fa-caret-left</option>
            <option value='fa-caret-right'>&#xf0da; fa-caret-right</option>
            <option value='fa-caret-square-o-down'>&#xf150; fa-caret-square-o-down</option>
            <option value='fa-caret-square-o-left'>&#xf191; fa-caret-square-o-left</option>
            <option value='fa-caret-square-o-right'>&#xf152; fa-caret-square-o-right</option>
            <option value='fa-caret-square-o-up'>&#xf151; fa-caret-square-o-up</option>
            <option value='fa-caret-up'>&#xf0d8; fa-caret-up</option>
            <option value='fa-cart-arrow-down'>&#xf218; fa-cart-arrow-down</option>
            <option value='fa-cart-plus'>&#xf217; fa-cart-plus</option>
            <option value='fa-cc'>&#xf20a; fa-cc</option>
            <option value='fa-cc-amex'>&#xf1f3; fa-cc-amex</option>
            <option value='fa-cc-diners-club'>&#xf24c; fa-cc-diners-club</option>
                    
                
                
                

                
                
                
                
                
                {{-- <option>&#xf043;</option>
                <option>&#xf044;</option>
                <option>&#xf045;</option>
                <option>&#xf046;</option> --}}
              
        </select>
        {{-- @foreach ($cardrapids as $e)
        <div>
            <i class="{{ $e->font }}"></i>
        </div>
            
        @endforeach --}}

        


        <div class="form-group">
            <label for="exampleInputPassword1">Title</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="title" >
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">description</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="description" >
        </div>
        
    
        

        

        
        
        
    
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@stop