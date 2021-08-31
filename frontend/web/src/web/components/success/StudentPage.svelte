<script>
    import Header from '../presentational/Header.svelte';
    import Footer from '../presentational/Footer.svelte';
    import Modal, {getModal} from '../presentational/Modal.svelte';
    import HandleFetch from "../../services/handle-fetch.ts";
    import {t, locale} from "../../lang/i18n.js";
    import StudentFormData from "../../elements/formdata/StudentFormData.ts";
    import {semesters, participate, szakos_tajekoztatok, majors} from "../../elements/constants.js";
    import {Button} from 'svelma';

    let privacy = false;
    let oath = false;
    let code = [];
    let lang = '';

    fetch('/major/majorsget')
        .then(res => res.json())
        .then(data => {
            code = data;
        });

    let formData = new StudentFormData();

    function onRegister() {
        if ($locale === 'hu') {
            lang = 'hu';
            formData._lang = lang;
        } else if ($locale === 'en') {
            lang = 'en';
            formData._lang = lang;
        }


        fetch('/post/studentPost', {
            method: 'POST',
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(formData)

        }).then(HandleFetch)

            .then(res => {
                if (res.statusCode === 200) {
                    getModal().open();
                }
            })
    }

</script>

<Header title="{$t('hero_title')} - {$t('hero_nav_registration')}"/>

<div class='container'>
    <div class='columns is-mobile is-centered'>
        <div class='column is-7-desktop column is-10-mobile has-background-info-light'>
            <div class="card mb-6">
                <div class="card-content">
                    <p class="title has-text-centered is-size-4-mobile">{$t("card_content_title_student")}</p>
                    <p class="subtitle is-5 has-text-left"></p>
                </div>
                <div class="is-divider is-info" data-content={$t('form_divider_personal_data')}></div>
                <div class="content">
                    <div class="field ml-5 mr-5">
                        <label class="label has-text-left">{$t('form_content_name')}<b
                                class="has-text-danger">*</b></label>
                        <div class="control">
                            <input class="input" type="text" placeholder="{$t('form_content_name')}"
                                   bind:value={formData.name}/>
                        </div>
                    </div>

                    <div class="field ml-5 mr-5">
                        <label class="label has-text-left">{$t('form_content_neptun')}<b
                                class="has-text-danger">*</b></label>
                        <div class="control">
                            <input class="input" type="text" placeholder="abcdef" bind:value={formData.neptun}/>
                        </div>
                    </div>
                    <div class="field ml-5 mr-5">
                        <label class="label has-text-left">{$t('form_content_email')}<b
                                class="has-text-danger">*</b></label>
                        <div class="control">
                            <input
                                    class="input"
                                    type="email"
                                    placeholder="example@example.com"
                                    bind:value={formData.email}
                            />

                        </div>
                    </div>
                    <div class="field ml-5 mr-5">
                        <label class="label has-text-left">{$t('form_content_mobile')}</label>
                        <div class="control">
                            <input class="input" type="text" bind:value={formData.mobile}
                                   placeholder="36301234567"/>
                        </div>
                    </div>
                    <div class="field ml-5 mr-5">
                        <label class="label has-text-left">{$t('form_content_major')}<b
                                class="has-text-danger">*</b></label>
                        <div class="control">
                            <div class="select is-fullwidth">
                                <select name="szak" class="full-width" bind:value={formData.major}>
                                    <option class="full-width"
                                            value="0">{$t('form_dropdown_first_element')}</option>
                                    {#each code as majors}
                                        {#if $locale === 'en'}
                                            {#if majors.name_en.length > 1}
                                                <option class="full-width"
                                                        value="{majors.id}">{ majors.name_en}</option>
                                            {/if}
                                        {/if}
                                        {#if $locale === 'hu'}
                                            <option class="full-width"
                                                    value="{majors.id}">{ majors.name_hu}</option>
                                        {/if}
                                    {/each}
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="field ml-5 mr-5">
                        <label class="label has-text-left">{$t('form_content_semester')}<b
                                class="has-text-danger">*</b></label>
                        <div class="control">
                            <div class="select is-fullwidth">
                                <select name="semester" class="full-width" bind:value={formData.semester}>
                                    <option class="full-width"
                                            value="0">{$t('form_dropdown_first_element')}</option>
                                    {#each semesters as semester }
                                        {#if $locale === 'en'}
                                            <option class="full-width"
                                                    value={semester.id}>{ semester.name_en}</option>
                                        {/if}
                                        {#if $locale === 'hu'}
                                            <option class="full-width"
                                                    value={semester.id}>{ semester.name_hu}</option>
                                        {/if}
                                    {/each}
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="is-divider is-info mt-6" data-content={$t('form_divider_school_opening')}></div>
                <div class="field ml-5 mr-5 mt-6">
                    <label class="label has-text-left">{$t('form_content_participate')}<b
                            class="has-text-danger">*</b></label>
                    <div class="control">
                        <div class="select is-fullwidth">
                            <select name="semester" class="full-width" bind:value={formData.participate}>
                                <option class="full-width" value=0>{$t('form_dropdown_first_element')}</option>
                                {#each participate as parti }
                                    {#if $locale === 'hu'}
                                        <option class="full-width" value={parti.id}>{ parti.name_hu}</option>
                                    {/if}
                                    {#if $locale === 'en'}
                                        <option class="full-width" value={parti.id}>{ parti.name_en}</option>
                                    {/if}
                                {/each}
                            </select>
                        </div>
                    </div>
                </div>
                <div class="field ml-5 mr-5 mt-6">
                    <label class="label has-text-left">{$t('form_content_orientation')}<b
                            class="has-text-danger">*</b></label>
                    <div class="control">
                        <div class="select is-fullwidth">
                            <select name="semester" class="full-width" bind:value={formData.orientation}>
                                <option class="full-width" value=0>{$t('form_dropdown_first_element')}</option>
                                {#each szakos_tajekoztatok as ori }
                                    {#if $locale === 'hu'}
                                        <option class="full-width"
                                                value={ori.id}>{ori.time } { ori.name_hu}</option>
                                    {/if}
                                    {#if $locale === 'en'}
                                        <option class="full-width"
                                                value={ori.id}>{ori.time } { ori.name_en}</option>
                                    {/if}
                                {/each}
                            </select>
                        </div>
                    </div>
                </div>
                <div class="ml-5 mt-6 is-offset-3-mobile">
                    <label class="label has-text-left">
                    </label>
                    <div class="control">
                        <label class="checkbox">
                            <br><input type="checkbox" bind:checked={oath}>
                            {@html $t('form_content_oath')}<b class="has-text-danger">*</b>
                        </label>
                    </div>
                </div>
                <div class="field ml-5 mt-6 is-offset-3-mobile">
                    <div class="control">
                        <label class="checkbox">
                            <br><input type="checkbox" bind:checked={privacy}>
                            {@html $t('form_content_privacy_notice')}<b class="has-text-danger">*</b>
                        </label>
                    </div>
                </div>
                <div class="buttons ml-5 mt-6">
                    <Button type="is-info" on:click={onRegister} outlined
                            disabled={!privacy | !oath}>{$t('form_content_registration_button')}</Button>
                </div>
            </div>
        </div>
    </div>
</div>

<Modal modalTitle={$t('confirmation_text_1')}>
    <!--    <h1 class="has-text-success">{$t('confirmation_text_1')}</h1>-->

    <p>{$t('confirmation_text_3')}</p>
    <p>{$t('confirmation_text_warning')}</p>

</Modal>

<Footer/>