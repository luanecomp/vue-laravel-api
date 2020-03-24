<template>
    <div>
        <h3 class="text-center">Sacar da conta {{ account.bank }} ({{ account.account }})</h3>
        <div class="row">
            <div class="offset-md-3 col-md-6">
                <form @submit.prevent="sacar">
                    <div class="form-group">
                        <label>Valor a Sacar:</label>
                        <input type="text" class="form-control" v-model="account.value" @keypress="onlyForCurrency" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Sacar</button>
                    <router-link :to="{name: 'home'}" class="btn btn-danger">Voltar</router-link>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                account: {}
            }
        },
        created() {
            this.axios
                .get(`/api/account/edit/${this.$route.params.id}`)
                .then((response) => {
                    this.account = response.data;
                    // console.log(response.data);
                });
        },
        methods: {
            sacar() {
                this.axios
                    .post(`/api/account/sacar/${this.$route.params.id}`, this.account)
                    .then((response) => {
                        alert(response.data);
                        this.$router.push({name: 'home'});
                    })
                    .catch(error => alert(error.response.data.error));
            },
            onlyForCurrency ($event) {
                // console.log($event.keyCode); //keyCodes value
                let keyCode = ($event.keyCode ? $event.keyCode : $event.which);

                // only allow number and one dot
                if ((keyCode < 48 || keyCode > 57) && (keyCode !== 46 || this.account.value.indexOf('.') != -1)) { // 46 is dot
                    $event.preventDefault();
                }

                // restrict to 2 decimal places
                if(this.account.value!=null && this.account.value.indexOf(".")>-1 && (this.account.value.split('.')[1].length > 1)){
                    $event.preventDefault();
                }
            }
        }
    }
</script>
