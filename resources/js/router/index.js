import { createApp } from 'vue'
import { createRouter, createWebHashHistory } from 'vue-router';
import Stor from '../pages/Store.vue';
import Pos from '../pages/Pos.vue';
import Report from '../pages/Report.vue';
import Transection from '../pages/Transection.vue';
 export const routers = [
    {
        name : 'store',
        path: '/stroe',
        component: Stor,
    },
    {
        name : 'pos',
        path: '/pos',
        component: Pos,
    },
    {
        name : 'report',
        path: '/report',
        component: Report,
    },
    {
        name : 'transection',
        path: '/transections',
        component: Transection,
    }
 ]


