<script>
    import {majors, semesters, plen1, plen2} from '../../elements/constants.js';

    export let formData;
</script>

<div class='columns is-mobile is-centered'>
    <div class='column is-7-desktop column is-10-mobile'>
        <div class="card mb-6">
            <div class="card-content">

                <p class="title has-text-centered is-size-4-mobile">Hallgatói regisztráció</p>
                    <p class="subtitle is-5 has-text-left"></p>

            </div>
            <div class="is-divider is-info" data-content="Személyes adatok"></div>
            <div class="box container ml-5 mr-5">
                Név: <strong>{formData.name}</strong>
            </div>
            <div class="box container ml-5 mr-5">
                Neptun: <strong>{formData.neptun}</strong>
            </div>
            <div class="box container ml-5 mr-5">
                Email: <strong>{formData.email}</strong>
            </div>
            <div class="box container ml-5 mr-5">
                Telefon: <strong>{formData.mobile}</strong>
            </div>
            <div class="box container ml-5 mr-5">
                Szak: <strong>
                {#each majors as major}
                    {#if major.id === formData.major}
                        {major.name}<br>
                    {/if}
                {/each}
            </strong>
            </div>
            <div class="box container ml-5 mr-5">
                Szemeszter: <strong>
                {#each semesters as semester}
                    {#if semester.id === formData.semester}
                        {semester.name}<br>
                    {/if}
                {/each}
            </strong>
            </div>
            <div class="is-divider is-info mt-6" data-content="Szekció előadások"></div>
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        Az alábbi szekciók érdekelnek
                    </p>
                </header>
                <div class="card-content">
                    <div class="content">
                        <label>12.30-14.30</label>
                        {#each plen1 as plen}
                            {#each formData.plen1 as fdPlen}
                                {#if plen.id === fdPlen}
                                    <label class="label has-text-left ml-5">{plen.name}</label>
                                {/if}
                            {/each}
                        {/each}
                        <label>15.00-17.00</label>
                        {#each plen2 as plen}
                            {#each formData.plen2 as fdPlen}
                                {#if plen.id === fdPlen}
                                    <label class="label has-text-left ml-5">{plen.name}</label>
                                {/if}
                            {/each}
                        {/each}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!--                <div class="field ml-5 mr-5">-->
<!--                    <label class="label has-text-left">Név: {formData.name}</label>-->
<!--&lt;!&ndash;                    <div class="control">&ndash;&gt;-->
<!--&lt;!&ndash;                    <label class="label has-text-left"></label>&ndash;&gt;-->
<!--&lt;!&ndash;                    </div>&ndash;&gt;-->
<!--                </div>-->
<!--                <div class="field ml-5 mr-5">-->
<!--                    <label class="label has-text-left">Neptun: </label>-->
<!--                    <div class="control">-->
<!--                        <label class="label has-text-left">{formData.neptun}</label>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="field ml-5 mr-5">-->
<!--                    <label class="label has-text-left">Email: </label>-->
<!--                    <div class="control">-->
<!--                        <label class="label has-text-left">{formData.email}</label>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="field ml-5 mr-5">-->
<!--                    <label class="label has-text-left">Telefon: </label>-->
<!--                    <div class="control">-->
<!--                        <label class="label has-text-left">{formData.mobile}</label>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="field ml-5 mr-5">-->
<!--                    <label class="label has-text-left">Szak: </label>-->
<!--                    <div class="control">-->
<!--                        {#each majors as major}-->
<!--                            {#if major.id === formData.major}-->
<!--                                <label class="label has-text-left">{major.name}</label>-->
<!--                            {/if}-->
<!--                        {/each}-->
<!--                        &lt;!&ndash;                        <label class="label has-text-left">{formData.major}</label>&ndash;&gt;-->
<!--                    </div>-->
<!--                </div>-->

<!--                <div class="field ml-5 mr-5">-->
<!--                    <label class="label has-text-left">Szemeszter: </label>-->

<!--                    <div class="control">-->
<!--                        {#each semesters as semester}-->
<!--                            {#if semester.id === formData.semester}-->
<!--                                <label class="label has-text-left">{semester.name}</label>-->
<!--                            {/if}-->
<!--                        {/each}-->
<!--                    </div>-->

<!--                </div>-->
<!--            </div>-->


<!--            <div class="is-divider is-info mt-6" data-content="Szekció előadások"></div>-->
<!--            <div class="media-content">-->
<!--                <p class="title is-4"></p>-->
<!--                <p class="subtitle is-6 ml-5 mt-6">Az alábbi szekciók érdekelnek:</p>-->
<!--            </div>-->
<!--            <label class="label has-text-left ml-5">12.30-14.30</label>-->
<!--            {#each plen1 as plen}-->
<!--                {#each formData.plen1 as fdPlen}-->
<!--                    {#if plen.id === fdPlen}-->
<!--                        <label class="label has-text-left ml-5">{plen.name}</label>-->
<!--                    {/if}-->
<!--                {/each}-->
<!--            {/each}-->
<!--            <div class="media-content mt-6">-->
<!--                <p class="title is-4"></p>-->
<!--                <p class="subtitle is-6 ml-5  mt-6">Az alábbi szekciók érdekelnek</p>-->
<!--            </div>-->
<!--            <label class="label has-text-left ml-5">15.00-17.00</label>-->
<!--            {#each plen2 as plen}-->
<!--                {#each formData.plen2 as fdPlen}-->
<!--                    {#if plen.id === fdPlen}-->
<!--                        <label class="label has-text-left ml-5">{plen.name}</label>-->
<!--                    {/if}-->
<!--                {/each}-->
<!--            {/each}-->
<!--            <br><br>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
