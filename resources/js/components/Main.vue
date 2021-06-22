<template>
    <div>
        <Header></Header>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-2"></div>
                <div class="col-10">
                    <div class="row">
                        <div class="col-xl-3 col-md-5 col-xl-1 mt-3 mb-3" v-for="item in [1,2,3,4,5,6,7,8,9,10]">
                            <div class="card">
                                <div>
                                    <img src="https://opt-1088093.ssl.1c-bitrix-cdn.ru/upload/iblock/90a/90ac426482b2c0af95162ebac255fe2a.jpg?153373798664980"
                                         class="card-img-top" alt="Маньчжурский орех">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Маньчжурский орех</h5>
                                    <p class="card-text">Оре́х маньчжу́рский, или Орех думбе́йский, — вид листопадных однодомных
                                        деревьев или кустарников рода Орех семейства Ореховые.
                                    </p>
                                    <div class="input-group">
                                        <button class="btn btn-sm btn-primary input-group-text" id="basic-addon1">
                                            <i class="bi bi-star-fill"></i>
                                        </button>
                                        <input type="text" class="form-control" placeholder="Добавить в избранное"
                                               aria-label="Input group example" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                            </div>
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
