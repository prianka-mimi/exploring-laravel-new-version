<style>
    /* CSS */
    .button-37 {
        background-color: #13aa52;
        border: 1px solid #13aa52;
        border-radius: 4px;
        box-shadow: rgba(0, 0, 0, .1) 0 2px 4px 0;
        box-sizing: border-box;
        color: #fff;
        cursor: pointer;
        font-family: "Akzidenz Grotesk BQ Medium", -apple-system, BlinkMacSystemFont, sans-serif;
        font-size: 16px;
        font-weight: 400;
        /* outline: none; */
        /* outline: 0; */
        padding: 10px 25px;
        text-align: center;
        transform: translateY(0);
        transition: transform 150ms, box-shadow 150ms;
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
    }

    .button-37:hover {
        box-shadow: rgba(0, 0, 0, .15) 0 3px 9px 0;
        transform: translateY(-2px);
    }

    @media (min-width: 768px) {
        .button-37 {
            padding: 10px 30px;
        }
    }

    /* button 2 for danger button part start */
    /* CSS */
    .button-44 {
        background: #e62143;
        /* border-radius: 11px; */
        border-radius: 4px;
        box-sizing: border-box;
        color: #fff;
        cursor: pointer;
        display: flex;
        font-family: Mija, -apple-system, BlinkMacSystemFont, Roboto, "Roboto Slab", "Droid Serif", "Segoe UI", system-ui, Arial, sans-serif;
        /* font-size: 1.15em; */
        font-size: 16px;
        font-weight: 700;
        justify-content: center;
        line-height: 33.4929px;
        /* padding: .8em 1em; */
        text-align: center;
        text-decoration: none;
        text-decoration-skip-ink: auto;
        text-shadow: rgba(0, 0, 0, .3) 1px 1px 1px;
        text-underline-offset: 1px;
        transition: all .2s ease-in-out;
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
        /* width: 100%; */
        word-break: break-word;
        border: 0;
    }

    .button-44:active,
    .button-44:focus {
        border-bottom-style: none;
        border-color: #dadada;
        box-shadow: rgba(0, 0, 0, .3) 0 3px 3px inset;
        outline: 0;
    }

    .button-44:hover {
        border-bottom-style: none;
        border-color: #dadada;
    }

    /* button 2 for danger button part end */
</style>

<!-- HTML !-->
{{ $slot }}
{{-- <button class="button-37" role="button"><i class="fa-solid fa-user-plus"></i> Add Patient</button> --}}
{{-- <button class="button-44" role="button">Cancle</button> --}}
