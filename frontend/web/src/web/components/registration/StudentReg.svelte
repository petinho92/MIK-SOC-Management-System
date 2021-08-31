<script>
    import {Button} from 'svelma';
    import {createEventDispatcher} from 'svelte';
    import {plen1, plen2, semesters} from "../../elements/constants";
    import StudentFormData from "../../elements/formdata/StudentFormData.ts";
    import {writable} from "svelte/store";
    import {langchecked} from "../../lang/location.js";
    import {register, _, addMessages, init, getLocaleFromNavigator} from "svelte-i18n";
    import hu from '../../lang/hu.json';
    import en from '../../lang/en.json';



    addMessages('hu', hu);
    addMessages('en', en);
    let lang = "";

    if($langchecked === true)
    {
        init({
            fallbackLocale: 'en',
            initialLocale: 'en',
        });
    }else{
        init({
            fallbackLocale: 'hu',
            initialLocale: 'hu',
        });
    }







    export let code = [];

    fetch('/major/majorsget')
        .then(res => res.json())
        .then(data => {
            code = data;
        });



    let enabled = false;
    let formData = new StudentFormData();

    const dispatch = createEventDispatcher();

    function onRegister() {
        dispatch('message', {
            text: 'student',
            data: formData
        });
    }
</script>


    <div class='container'>
        <div class='columns is-mobile is-centered'>
            <div class='column is-7-desktop column is-10-mobile has-background-info-light'>
                <div class="card mb-6">
                    <div class="card-content">

                        <p class="title has-text-centered is-size-4-mobile">{$_('card_content_title_student')}</p>
                            <p class="subtitle is-5 has-text-left"></p>

                    </div>
                    <div class="is-divider is-info" data-content={$_('form_divider_personal_data')}></div>
                    <div class="content">
                        <div class="field ml-5 mr-5">
                            <label class="label has-text-left">{$_('form_content_name')}<b class="has-text-danger">*</b></label>
                            <div class="control">
                                <input class="input" type="text" bind:value={formData.name} placeholder="{$_('form_content_name')}"/>
                            </div>
                        </div>

                        <div class="field ml-5 mr-5">
                            <label class="label has-text-left">{$_('form_content_neptun')}<b class="has-text-danger">*</b></label>
                            <div class="control">
                                <input class="input" type="text" bind:value={formData.neptun} placeholder="abcdef"/>
                            </div>
                        </div>
                        <div class="field ml-5 mr-5">
                            <label class="label has-text-left">{$_('form_content_email')}<b class="has-text-danger">*</b></label>
                            <div class="control">
                                <input
                                        class="input"
                                        type="email"
                                        bind:value={formData.email}
                                        placeholder="example@example.com"
                                />
                            </div>
                        </div>
                        <div class="field ml-5 mr-5">
                            <label class="label has-text-left">{$_('form_content_mobile')}</label>
                            <div class="control">
                                <input class="input" type="text" bind:value={formData.mobile}
                                       placeholder="36301234567"/>
                            </div>
                        </div>
                        <div class="field ml-5 mr-5">
                            <label class="label has-text-left">{$_('form_content_major')}<b class="has-text-danger">*</b></label>
                            <div class="control">
                                <div class="select is-fullwidth">
                                    <select name="szak" class="full-width" bind:value={formData.major}>
                                        <option class="full-width" value="0">{$_('form_dropdown_first_element')}</option>
                                        {#each code as major }
                                            <option class="full-width" value="{major.id}">{ major.name}</option>
                                        {/each}
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="field ml-5 mr-5">
                            <label class="label has-text-left">{$_('form_content_semester')}<b class="has-text-danger">*</b></label>

                            <div class="control">
                                <div class="select is-fullwidth">
                                    <select name="semester" class="full-width" bind:value={formData.semester}>
                                        {#each semesters as semester }
                                            <option class="full-width" value="{semester.id}">{ semester.name}</option>
                                        {/each}
                                    </select>
                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="is-divider is-info mt-6" data-content={$_('form_divider_section')}></div>

                        <p class="title is-4"></p>
                        <p class="subtitle is-6 ml-5 mt-6"><b>Az alábbi szekciók érdekelnek:</b></p>

                    <label class="label has-text-left ml-5">12.30-14.30</label>
                    {#each plen1 as plen}
                        <br>
                        <label class="is-pulled-left ml-5"><input type="checkbox" bind:group={formData.plen1}
                                                                  value={plen.id}/> {plen.name}</label>
                    {/each}
                    <br>
                    <label class="label has-text-left ml-5 mt-6">15.00-17.00</label>
                    {#each plen2 as plen}
                        <br>
                        <label class="is-pulled-left ml-5"><input type="checkbox" bind:group={formData.plen2}
                                                                  value="{plen.id}"/> {plen.name}</label>
                    {/each}

                    <div class="field ml-5 mt-6 is-offset-3-mobile">
                        <div class="control">
                            <label class="checkbox">
                                <br><input type="checkbox" bind:checked={enabled}>
                                Elfogadom az <a href="#">adatvédelmi tájákoztatót.<b class="has-text-danger">*</b></a>
                            </label>
                        </div>
                    </div>
                    <div class="buttons ml-5 mt-6">
                        <Button type="is-info" outlined on:click={onRegister} disabled={!enabled}>{$_('form_content_registration_button')}</Button>
                    </div>
                </div>
            </div>
        </div>
    </div>



