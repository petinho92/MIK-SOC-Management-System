<script>
    import Router from 'svelte-spa-router';
    import routes from './routes.ts';
    import 'bulma/css/bulma.css';
    import 'bulma-divider/dist/css/bulma-divider.min.css';
    import 'bulma-extensions/bulma-pageloader/dist/css/bulma-pageloader.min.css';
    import '@vizuaalog/bulmajs/src/plugins/navbar.js';
    import '@vizuaalog/bulmajs/src/bulma.js';
    import '@vizuaalog/bulmajs/src/plugin.js';
    import '@fortawesome/fontawesome-free/css/fontawesome.min.css';
    import '@fortawesome/fontawesome-free';
    import 'bulma-responsive-tables/css/main.min.css'
    import 'datatables.net-bm/css/dataTables.bulma.min.css'

</script>
<style lang="css" global>

    html {
        height: 100%;
        /*background-color: #00113f;*/
        /*background-image: url("https://i.ibb.co/gm8PSn4/abstact-hexagon-background-in-memphis-style.jpg");*/
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
    }

    body {
        min-height: 100%;
        /*min-height: 150vh;*/

        background-color: #00113f;
        background-image: url("/~web/image/bgp.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;


    }

    section {
        /*background-color: #eeeeee;*/
        background-color: #00113f;
    }

    #app {
        flex: 1;
        display: flex;
        flex-direction: column;
    }


    footer{
        /*margin-top: auto;*/
        position: fixed;
        /*width: 100vh;*/
        width: 100%;
        bottom: 0%;
    }
    .foot {

    }
    section .title {
        color: white;
    }

    section .subtitle {
        color: #d9d9d9;
    }

    .select .select select {
        width: 100%;
    }

    .box h3 {
        color: #575656;
        font-size: large;
        text-align: center;
        padding-top: 30px;
        font-family: "OCR A Std", monospace;
    }

</style>

<Router {routes}/>