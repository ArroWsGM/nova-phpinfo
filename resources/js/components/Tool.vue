<template>
    <div>
        <heading class="mb-6">Nova Phpinfo</heading>

        <card class="php-info" v-html="html">
        </card>
    </div>
</template>

<script>
export default {
    data() {
        return {
            html: ''
        }
    },
    mounted() {
        this.html = Nova.config['nova-phpinfo']
    },
}
</script>

<style>
    .php-info {
        padding: .5rem;
    }
    .php-info pre {
        margin: 0;
        font-family: monospace;
    }
    .php-info a:link {
        color: #009;
        text-decoration: none;
        background-color: #ffffff;
    }
    .php-info a:hover {
        text-decoration: underline;
    }
    .php-info table {
        border-collapse: collapse;
        border: 0;
        width: 100%;
        box-shadow: 1px 2px 3px #ccc;
    }
    .php-info .center {
        text-align: center;
    }
    .php-info .center table {
        margin: 1em auto;
        text-align: left;
    }
    .php-info .center table:first-child {
        margin-top: 0;
    }
    .php-info .center table:last-child {
        margin-bottom: 0;
    }
    .php-info .center th {
        text-align: center !important;
    }
    .php-info td {
        border: 1px solid #666;
        font-size: 100%;
        vertical-align: baseline;
        padding: 4px 5px;
    }
    .php-info th {
        border: 1px solid #666;
        font-size: 100%;
        vertical-align: baseline;
        padding: 4px 5px;
    }
    .php-info h1 {
        font-size: 150%;
    }
    .php-info h2 {
        font-size: 125%;
    }
    .php-info .p {
        text-align: left;
    }
    .php-info .e {
        background-color: #ccf;
        width: 50px;
        font-weight: bold;
    }
    .php-info .h {
        background-color: #99c;
        font-weight: bold;
    }
    .php-info .v {
        background-color: #ddd;
        max-width: 50px;
        overflow-x: auto;
        word-wrap: break-word;
    }
    .php-info .v i {
        color: #999;
    }
    .php-info img {
        float: right;
        border: 0;
    }
    .php-info hr {
        width: 100%;
        background-color: #ccc;
        border: 0;
        height: 1px;
    }
</style>
