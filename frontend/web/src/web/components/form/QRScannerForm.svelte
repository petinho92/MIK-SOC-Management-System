<script>
    import {Button} from 'svelma';
    import QRScannerFormData from "../../elements/formdata/QRScannerFormData.ts";
    import {createEventDispatcher} from 'svelte';

    let formData = new QRScannerFormData();
    let input;

    const dispatch = createEventDispatcher();

    function onRegister(event) {
        if (event.key === 'Enter') {
            formData.qr = input;
            dispatch('message', {
                data: formData
            });

            input = "";
        }
    }
</script>

    <div class='container'>
        <div class='columns is-mobile is-centered'>
            <div class='column is-7-desktop column is-10-mobile has-background-info-light'>
                <div class="card mb-6">
                    <div class="card-content">

                        <p class="title has-text-centered is-size-4-mobile">Csippantó</p>
                        <p class="subtitle is-5 has-text-left"></p>

                    </div>
                    <div class="is-divider is-info" data-content="Adatok"></div>
                    <div class="content">
                        <div class="field ml-5 mr-5">
                            <label class="label has-text-left">Állomás<b class="has-text-danger"></b></label>
                            <div class="control">
                                <div class="select is-fullwidth">
                                    <select name="station" class="full-width" bind:value={formData.station}>
                                        <option class="full-width" value="0">Kérem válasszon!</option>
                                        <option class="full-width" value="1">1. szekcióterem</option>
                                        <option class="full-width" value="2">2. szekcióterem</option>
                                        <option class="full-width" value="3">3. szekcióterem</option>
                                        <option class="full-width" value="4">4. szekcióterem</option>
                                        <option class="full-width" value="5">5. szekcióterem</option>
                                        <option class="full-width" value="6">6. szekcióterem</option>
                                        <option class="full-width" value="7">7. szekcióterem</option>
                                        <option class="full-width" value="8">8. szekcióterem</option>
                                        <option class="full-width" value="9">9. szekcióterem</option>
                                        <option class="full-width" value="10">10. szekcióterem</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="content">
                            <div class="field ml-5 mr-5">
                                <label class="label has-text-left">Előadás<b class="has-text-danger"></b></label>
                                <div class="control">
                                    <div class="select is-fullwidth">
                                        <select name="phase" class="full-width" bind:value={formData.phase}>
                                            <option class="full-width" value="0">Kérem válasszon!</option>
                                            <option class="full-width" value="1">1. előadás</option>
                                            <option class="full-width" value="2">2. előadás</option>
                                            <option class="full-width" value="3">3. előadás</option>
                                            <option class="full-width" value="4">4. előadás</option>
                                            <option class="full-width" value="5">5. előadás</option>
                                            <option class="full-width" value="6">6. előadás</option>
                                            <option class="full-width" value="7">7. előadás</option>
                                            <option class="full-width" value="8">8. előadás</option>
                                            <option class="full-width" value="9">9. előadás</option>
                                            <option class="full-width" value="10">10. előadás</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="field ml-5 mr-5">
                                <label class="label has-text-left">QR kód<b class="has-text-danger">*</b></label>
                                <div class="control">
                                    <input class="input" type="text" bind:value={input} on:keydown={onRegister}/>
                                </div>
                            </div>
                            <br><br>
                            <!--                            <div class="buttons ml-5 mt-6">-->
                            <!--                                <Button type="is-info" outlined on:click={onRegister}>Regisztráció</Button>-->
                            <!--                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>