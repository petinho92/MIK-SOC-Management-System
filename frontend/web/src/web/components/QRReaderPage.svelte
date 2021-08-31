<script>
    import Form from './form/QRScannerForm.svelte';
    import handleFetch from "../services/handle-fetch.ts";
    import {writable} from "svelte/store";

    let data = writable({});
    let success = true;
    let visible = false;

    function onMessage(event){
        $data = event.detail.data;

        fetch('/scanner/scannerPost', {
            method: 'POST',
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            body: JSON.stringify($data)
            }).then(handleFetch)
        .then(res => {
            if(res.statusCode===422){
                success = false;
                visible = true;
            }else if(res.statusCode===200){
                success = true;
                visible = true;
            }
        })
    }
</script>

<Form on:message={onMessage}/>
<div class='container'>
    <div class='columns is-mobile is-centered is-bold'>
        <div class='column is-7-desktop column is-10-mobile is-bold' class:is-hidden={!visible} class:has-background-success={success} class:has-background-danger={!success}>
            {#if success}
            <h1 class="has-text-centered has-text-white"><br>Sikeres<br></h1>
                {/if}
            {#if !success}
                <h1 class="has-text-centered has-text-white"><br>Nincs kiválasztva állomás és/vagy előadás<br>Vagy hibás QR kód</h1>
            {/if}
        </div>
    </div>
</div>

