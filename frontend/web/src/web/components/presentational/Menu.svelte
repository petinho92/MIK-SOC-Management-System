<script>
    import {push} from 'svelte-spa-router';
    import "@vizuaalog/bulmajs/dist/bulma.js";
    import "@vizuaalog/bulmajs/dist/navbar.js";
    import {Switch} from 'svelma'
    import {writable} from "svelte/store";
    import {langchecked} from "../../lang/location.js";
    import {t, locale, locales} from "../../lang/i18n.js";

    export let switcher = false;
    let langbutton = false;


    function changeLang() {
        $langchecked = !switcher;
        console.log("menu switcher erteke");
        console.log(switcher);
        console.log("store erteke");
        console.log($langchecked);
    }

    let click = "";

    function handleclick() {
        if (click === "") {
            click = "is-active";
        } else {
            click = "";
        }
    }

    function langEvent() {
        langbutton = !langbutton;
        if (langbutton) {
            push("/hu/");
        } else if (!langbutton) {
            push("/en/");
        }
    }

</script>

<nav class="navbar is-transparent is-fixed-top" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" on:click={ () => push("/")}>
            <img src="/~web/image/mik_favico.png" alt="home" width="35" height="40">
        </a>

        <a role="button" class="navbar-burger {click}" on:click={handleclick} aria-label="menu" aria-expanded="false"
           data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu {click}">
        <div class="navbar-start">
            <a class="navbar-item" on:click={ () => push("/registration") }>
                {$t('menu_item_registration')}
            </a>
        </div>

        <div class="navbar-end">
            <div class="navbar-item">
                <select bind:value={$locale}>
                    {#each locales as l}
                        <option value={l}>{l}</option>
                    {/each}
                </select>
            </div>
        </div>
        <!--        <div class="navbar-end">-->
        <!--            <div class="navbar-item">-->
        <!--                <button class="button is-ghost is-inverted" disabled={langbutton} on:click={langEvent}>hu </button> /-->
        <!--                <button class="button is-ghost is-inverted" disabled={!langbutton} on:click={langEvent}>eng</button>-->

        <!--                &lt;!&ndash;                        <Switch bind:checked={switcher} on:click={changeLang}>{#if switcher}En{:else}Hu{/if}</Switch>&ndash;&gt;-->

        <!--            </div>-->
        <!--        </div>-->
    </div>


</nav>