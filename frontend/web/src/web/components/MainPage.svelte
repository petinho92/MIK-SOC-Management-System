<script>

    import Header from './presentational/Header.svelte';
    import Footer from './presentational/Footer.svelte';
    import Menu from "./presentational/Menu.svelte";
    import {Button} from 'svelma';
    import {push} from 'svelte-spa-router';
    import {t} from '../lang/i18n.js';

</script>
<div id="app">
    <Header title="{$t('hero_title')} - {$t('hero_nav_home')}"/>

    <div class='columns is-mobile is-centered'>
        <div class='column is-7-desktop column is-10-mobile'>
            <div class="card mb-6">
                <div class="card-content">

                    <p class="title has-text-centered is-size-4-mobile mb-6">{$t('mainpage_title')}</p>

                    <p class="subtitle is-5 has-text-justified">
                        {$t('mainpage_greeting')}
                    </p>
                    <p class="subtitle is-5 has-text-justified">
                        {@html $t('mainpage_event_date')}
                    </p>
                    <p class="subtitle is-5 has-text-justified">
                        {@html $t('mainpage_event_location')}
                    </p>
                    <p class="subtitle is-5 has-text-justified">
                        {@html $t('mainpage_event_program')}
                    </p>
                    <p class="subtitle is-5 has-text-justified">
                        {@html $t('mainpage_event_orientation_info')} <a href="https://golya.mik.pte.hu/"
                                                                         target="_blank">https://golya.mik.pte.hu/</a>
                    </p>
                    <Button type="is-info"
                            on:click={() => push('/registration')}>{$t('form_content_registration_button')}</Button>
                </div>
            </div>
        </div>
    </div>
    <Footer/>
</div>