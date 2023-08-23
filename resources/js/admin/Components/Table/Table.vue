<script setup>
import Th from "./Th.vue";
import Tr from "./Tr.vue";
import Td from "./Td.vue";
import { Link } from '@inertiajs/vue3';

defineProps({
    headers: {
        type: Array,
        default: () => []
    },
    items: {
        type: Object,
        default: () => ({})
    },
})
</script>
<template>
    <div>
        <table class="min-w-full my-6">

            <thead>
                <Th v-for="header in headers" :key="header.lable">{{ header.label }}</Th>
            </thead>

            <tbody class="bg-white">
                <Tr v-if="items.data.length === 0">
                    <Td :colspan="headers.length">
                        No Data Available
                    </Td>
                </Tr>
                <Tr v-else v-for="item in items.data" :key="item.id">
                    <slot :item="item" />
                </Tr>
            </tbody>

        </table>
        <div>
            <Link :href="items.links.prev ?? ''" :class="{
                'px-4 py-2 text-sm font-semibold text-gray-800 bg-gray-300 rounded-l hover:bg-gray-400': true,
                'cursor-not-allowed opacity-50': !items.links.prev
            }">
            Prev
            </Link>
            <Link :href="items.links.next ?? ''" :class="{
                'px-4 py-2 text-sm font-semibold text-gray-800 bg-gray-300 rounded-r hover:bg-gray-400': true,
                'cursor-not-allowed opacity-50': !items.links.next
            }">
            Next
            </Link>
        </div>
    </div>
</template>
