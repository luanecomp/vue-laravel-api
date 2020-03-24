import AllAccounts from './components/AllAccounts.vue';
import Depositar from './components/Depositar.vue';
import Sacar from './components/Sacar.vue';

export const routes = [
    {
        name: 'home',
        path: '/',
        component: AllAccounts
    },
    {
        name: 'depositar',
        path: '/depositar/:id',
        component: Depositar
    },
    {
        name: 'sacar',
        path: '/sacar/:id',
        component: Sacar
    }
];
