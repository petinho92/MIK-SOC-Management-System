<script>

    import {writable} from "svelte/store";
    import {participate, szakos_tajekoztatok} from "../web/elements/constants";

    let loading = false
    let done = writable(false);
    let responseData = writable({});
    let code = writable([]);
    let students = [];
    let majors = [];
    let emails = [];
    let events = [];
    //let text = writable("");
    export let params = {};

    fetch('/info/' + params.code)
        .then(res => res.json())
        .then(data => {
            if (data !== false && data !== null) {
                $code = data;
                students = $code.students;
                majors = $code.majors;
                emails = $code.emails;
                // events = $code.events;
                // console.log(events);
                $done = true;
            }
        });

</script>

<div class="container has-background-light">
    <div class="card-header">
        <p class="card-header-title">Statisztika</p>
        <div class="card-content">
            <p>Regisztrált hallgatók száma: <b>{students.length}</b></p>
        </div>
    </div>
</div>

<div>
<!--    <div class="container is-fullwidth">-->
    <div class="b-table">
        <div class="table-wrapper has-mobile-cards">
            <table class="table is-fullwidth is-striped is-hoverable is-fullwidth dataTable">
                <thead>
                <tr role="row">
                    <th>Név</th>
                    <th>Neptun kód</th>
                    <th>Regisztráció ideje</th>
                    <th>Szak</th>
                    <th>Email</th>
                    <th>Szemester</th>
                    <th>Mobil</th>
                    <th>Tanévnyitó</th>
                    <th>Orientációs nap</th>
                    <th>Email elküldve</th>
                    <th>Email küldés időpontja</th>
                    <th>QR kód</th>
<!--                    <th>Progress</th>-->
                </tr>
                </thead>
                <tbody>

                {#each students as user}

                    <tr>
                        <td>{user.name}</td>
                        <td>{user.neptun}</td>
                        <td><small class="has-text-grey is-abbr-like">{user.created}</small></td>
                        <td>
                            {#each majors as major}
                                {#if user.major === major.id}
                                    {major.name_hu}
                                {/if}
                            {/each}
                        </td>
                        <td>{user.email}</td>
                        <td>{user.semester}. szemeszter</td>
                        <td>{user.mobile}</td>
                        <td>
                            {#each participate as parti}
                                {#if parti.id === user.participate}
                                    {parti.name_hu}
                                {/if}
                            {/each}
                        </td>
                        <td>
                            {#each szakos_tajekoztatok as orientation}
                                {#if orientation.id === user.orientation}
                                    {orientation.name_hu}
                                {/if}
                            {/each}
                        </td>
                        <td>
                            {#each emails as info}
                                {#if info.email === user.email}
                                    {info.sendStatus}
                                {/if}
                            {/each}
                        </td>
                        <td>
                            <small class="has-text-grey is-abbr-like">
                                {#each emails as info}
                                    {#if info.email === user.email}
                                        {info.sendTime}
                                    {/if}
                                {/each}
                            </small>
                        </td>
                        <td>
                            {user.qrcode}
                        </td>
                        <td>
                            <!--{#each events as event {key, value}}-->
                            <!--    {#if event.id === user.id}-->
                            <!--        teszt-->
                            <!--    {/if}-->
                            <!--{/each}-->
                        </td>
                    </tr>
                {/each}


                </tbody>
                <tfoot>
                <tr>
                    <th>Név</th>
                    <th>Neptun kód</th>
                    <th>Regisztráció ideje</th>
                    <th>Szak</th>
                    <th>Email</th>
                    <th>Szemester</th>
                    <th>Mobil</th>
                    <th>Tanévnyitó</th>
                    <th>Orientációs nap</th>
                    <th>Email elküldve</th>
                    <th>Email küldés időpontja</th>
                    <th>QR kód</th>
<!--                    <th>Progress</th>-->
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>


<!--<div class="tabs has-background-light">-->
<!--    <ul>-->
<!--        <li class="is-active"><a>Pictures</a></li>-->
<!--        <li><a>Music</a></li>-->
<!--        <li><a>Videos</a></li>-->
<!--        <li><a>Documents</a></li>-->
<!--    </ul>-->
<!--</div>-->
<!--<table class="table is-fullwidth">-->
<!--    <thead>-->
<!--    <tr>-->
<!--        <th>Név</th>-->
<!--        <th>Neptun kód</th>-->
<!--        <th>Regisztráció ideje</th>-->
<!--        <th>Szak</th>-->
<!--        <th>Email</th>-->
<!--        <th>Szemester</th>-->
<!--        <th>Mobil</th>-->
<!--    </tr>-->
<!--    </thead>-->
<!--    <tbody>-->
<!--    {#each student as user}-->

<!--        <tr>-->
<!--            <td>{user.name}</td>-->
<!--            <td>{user.neptun}</td>-->
<!--            <td>{user.created}</td>-->
<!--            <td>{user.major}</td>-->
<!--            <td>{user.email}</td>-->
<!--            <td>{user.semester}. szemeszter</td>-->
<!--            <td>{user.mobile}</td>-->
<!--        </tr>-->
<!--    {/each}-->
<!--    </tbody>-->
<!--</table>-->