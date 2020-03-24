<template>
    <div>
        <h3 class="text-center">Todas as Contas</h3><br/>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Titular</th>
                <th>Banco</th>
                <th class="text-center">Conta Corrente</th>
                <th class="text-center">Ações</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="account in accounts" :key="account.id">
                <td>{{ account.titular }}</td>
                <td>{{ account.bank }}</td>
                <td align="center">{{ account.account }}</td>
                <td align="center">
                    <div class="btn-group" role="group">
                        <router-link :to="{name: 'depositar', params: { id: account.id }}" class="btn btn-primary">Depositar
                        </router-link>
                        <router-link :to="{name: 'sacar', params: { id: account.id }}" class="btn btn-success">Sacar
                        </router-link>
                        <button class="btn btn-danger" @click="verSaldo(account.id)">Ver Saldo</button>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                accounts: []
            }
        },
        created() {
            this.axios
                .get('/api/accounts')
                .then(response => {
                    this.accounts = response.data;
                });
        },
        methods: {
            verSaldo(id) {
                this.axios
                    .get(`/api/account/saldo/${id}`)
                    .then(response => {
                        //let i = this.books.map(item => item.id).indexOf(id); // find index of your object
                        //this.books.splice(i, 1)

                        alert('O saldo da conta é R$ ' + response.data[0]);
                    });
            }
        }
    }
</script>
