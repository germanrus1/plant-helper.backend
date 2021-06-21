<template>
    <div>
        <Header></Header>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-2"></div>
                <div class="col-10">
                    <div class="card">
                        <div class="card-header">Test Component</div>

                        <div class="card-body">
                            I'm an example component.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-footer"></div>
    </div>
</template>

<script>
    import Header from "./Header";

    export default {
        components: {
            Header,
        },
        mounted() {
            console.log('Main mounted.')
        }
    }
</script>
<style>
    #app {
        font-family: Roboto, Helvetica, Arial, sans-serif;
    }
</style>
