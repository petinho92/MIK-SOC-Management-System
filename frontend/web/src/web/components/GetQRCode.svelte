<script>
    import {writable} from "svelte/store";
    import QR from "./presentational/showQRCode.svelte";


    let done = writable(false);
    let responseData = writable({});
    let code = writable("");
    //let text = writable("");
    export let params = {};

    fetch('/get/qr/'+params.code)
        .then(res => res.json())
        .then(data => {
            if(data !== false) {
                $code = data;
           //     $text = data;
                console.log("Code értéke");
                console.log($code);
                $done = true;
            }
        });
</script>
<!--{#await fetchImage}
    <p>várakozunk</p>
{:then data}-->

    {#if $done}
        <div id="app">
            <div class='columns is-mobile is-centered'>
                <div class='column is-7-desktop column is-10-mobile'>
                    <div class="card mb-6">
                        <div class="is-divider is-info mt-6" data-content="QR KÓD"></div>
                        <div class="card">
                            <header class="card-header">
                                <p class="card-header-title">
                                    Az alábbi QR kód használatával tud résztvenni az eseményen.
                                </p>
                            </header>
                            <div class="card-content">
                                <QR text={code}/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {/if}
    {#if $done === false}
            <div class='columns is-mobile is-centered'>
                <div class='column is-7-desktop column is-10-mobile'>
                    <div class="card mb-6">
                        <div class="is-divider is-info mt-6" data-content="QR KÓD"></div>
                        <div class="card">
                            <header class="card-header">
                                <p class="card-header-title">
                                    Az alábbi QR kód használatával tud résztvenni az eseményen.
                                </p>
                            </header>
                            <div class="card-content">
                                <h1 class="has-text-centered">Hiba történt!</h1>
                                <p class="has-text-danger has-text-centered">Nincs ilyen QR kód</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    {/if}
<!--{:catch error}
    <p>hiba van</p>
{/await}-->
