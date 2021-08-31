<script>

    import {writable} from "svelte/store";

    let done = writable(false);
    let responseData = writable({});
    let code = writable({});
    //let text = writable("");
    export let params = {};

    fetch('http://thanos.localhost:8080/info/' + params.code)
        .then(res => res.json())
        .then(data => {
            if (data !== false && data !== null) {
                $code = data;
                console.log("Code értéke");
                console.log($code);
                $done = true;
            }
        });

</script>


<div class='container has-text-centered'>
    <div class='columns is-mobile is-centered'>
        <div class='column is-5'>
            <div class="card">
                <div class="card-content">

                    <p class='is-success'>
                        Regisztrált hallgatók száma:
                    </p>
                    {#if $done}
                        <p class='has-text-success'>
                            {$code.student}
                        </p>
                    {/if}
                    {#if $done === false}
                        <p class='has-text-danger'>
                            Nincs adat
                        </p>
                    {/if}
                </div>
            </div>
        </div>
    </div>
</div>

<div class='container has-text-centered'>
    <div class='columns is-mobile is-centered'>
        <div class='column is-5'>
            <div class="card">
                <div class="card-content">

                    <p class='is-success'>
                        Regisztrált előadók száma:
                    </p>
                    {#if $done}
                        <p class='has-text-success'>
                            {$code.instructor}
                        </p>
                    {/if}
                    {#if $done === false}
                        <p class='has-text-danger'>
                            Nincs adat
                        </p>
                    {/if}
                </div>
            </div>
        </div>
    </div>
</div>

<div class='container has-text-centered'>
    <div class='columns is-mobile is-centered'>
        <div class='column is-5'>
            <div class="card">
                <div class="card-content">
                    <p class='is-success'>
                        Regisztrált vendégek száma:
                    </p>
                    {#if $done}
                        <p class='has-text-success'>
                            {$code.guest}
                        </p>
                    {/if}
                    {#if $done === false}
                        <p class='has-text-danger'>
                            Nincs adat
                        </p>
                    {/if}
                </div>
            </div>
        </div>
    </div>
</div>
<div class='container has-text-centered'>
    <div class='columns is-mobile is-centered'>
        <div class='column is-5'>
            <div class="card">
                <div class="card-content">
                    <p class='is-success'>
                        Regisztrált kamarai tagok száma:
                    </p>
                    {#if $done}
                        <p class='has-text-success'>
                            {$code.chamber}
                        </p>
                    {/if}
                    {#if $done === false}
                        <p class='has-text-danger'>
                            Nincs adat
                        </p>
                    {/if}
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    html, body {
        background-image: none;
    }
</style>