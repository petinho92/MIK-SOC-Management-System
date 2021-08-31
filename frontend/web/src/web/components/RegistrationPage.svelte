<script>
    import StudentReg from "./registration/StudentRegTNY.svelte";
    import StudentSuccess from "./success/StudentSuccess.svelte";
    import Header from "./presentational/Header.svelte";
    import Menu from "./presentational/Menu.svelte"
    import Notification from "./presentational/Notification.svelte";
    import Footer from "./presentational/Footer.svelte";
    import HandleFetch from "../services/handle-fetch.ts";
    import {writable} from "svelte/store";
    import {location} from 'svelte-spa-router';
    import "bulma-extensions/bulma-pageloader/dist/css/bulma-pageloader.min.css";
    import {langchecked} from "../lang/location.js";
    import {t} from '../lang/i18n.js';

    export let pathApi = writable("");
    let done = writable(false);
    let data = writable({});
    let type = writable({});
    let responseData = writable({});

    let studentApi = "/post/studentPost";
    let pageLoader = false;


    function handleMessage(event) {
        $type = event.detail.text;
        $data = event.detail.data;

        pageLoader = true
        fetch(studentApi, {
            method: 'POST',
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            body: JSON.stringify($data)

        }).then(HandleFetch)

            .then(res => {
                if (res.statusCode === 200) {
                    $responseData = res;
                    $done = true;

                }
            }).finally(()=> pageLoader=false)
    }
</script>

<div class="pageloader is-info is-bottom-to-top" class:is-active={pageLoader} class:is-hidden={!pageLoader}><span class="title">Kérlek várj!<br>Email küldése folyamatban!</span></div>

{#if $done}
    {#if $location === "/student"}
        <Notification text="Sikeres regisztráció" />
        <div id="app">
            <div class='columns is-mobile is-centered'>
                <div class='column is-7-desktop column is-10-mobile'>
                    <div class="card mb-6">
                        <div class="card">
                            <header class="card-header">
                                <p class="card-header-title">

                                </p>
                            </header>
                            <div class="card-content">
                                <p>$t('confirmation_text_1')}</p>
                                <p>$t('confirmation_text_2')}</p>
                                <p>$t('confirmation_text_3')}</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {/if}
{/if}
{#if $done === false}
    {#if $location === "/student"}
        <Header title="Hallgatói Regisztráció"/>
        <Menu/>
        <StudentReg on:message={handleMessage}/>
        <Footer/>
    {/if}
{/if}
