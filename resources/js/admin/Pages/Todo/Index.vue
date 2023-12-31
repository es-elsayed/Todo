<script setup>
import { Head, useForm, router } from '@inertiajs/vue3';
import AuthenticatedLayout from '@/admin/Layouts/AuthenticatedLayout.vue';
import Container from '@/admin/Components/Container.vue';
import Modal from '@/admin/Components/Modal.vue';
import Card from '@/admin/Components/Card/Card.vue';
import Table from '@/admin/Components/Table/Table.vue';
import Actions from '@/admin/Components/Table/Actions.vue';
import Button from '@/admin/Components/Base/Button.vue';
import Td from '@/admin/Components/Table/Td.vue';
import BasicFilter from '@/admin/Components/BasicFilter.vue';
import useDeleteItem from '@/admin/Composable/useDeleteItem.js';
import useFilter from '@/admin/Composable/useFilter.js';
import UrlIcon from '@/admin/Components/Icons/Url.vue';

const props = defineProps({
    title: {
        type: String,
        required: true,
    },
    items: {
        type: Object,
        default: () => ({}),
    },
    headers: {
        type: Array,
        default: () => [],
    },
    filters: {
        type: Object,
        default: () => ({}),
    },
    routeResourceName: {
        type: String,
        required: true,
    },
    can: Object

})

const {
    deleteModal,
    itemToDelete,
    form,
    showDeleteModal,
    closeModal,
    handleDeleteItem,
} = useDeleteItem({ routeResourceName: props.routeResourceName, });

const { filters } = useFilter({
    filters: props.filters,
    routeResourceName: props.routeResourceName,
});


const completeForm = useForm({});


const complete = (item) => {
    console.log(item, item.id);
    completeForm.put(route(`admin.${props.routeResourceName}.complete`, item.id));
};

</script>

<template>
    <Head :title="title" />

    <AuthenticatedLayout :title="title">
        <template #actions>
            <Button v-if="can.create" color="black" :href="route(`admin.${routeResourceName}.create`)">Create</Button>
        </template>

        <Card>
            <BasicFilter v-model="filters" />
            <Table :headers="headers" :items="items" class="max-w-full">
                <template v-slot="{ item }">
                    <Td>
                        <input type="checkbox" name="completed_at" :checked="item.completed_at" @click="complete(item)">
                    </Td>
                    <Td>{{ item.title }}</Td>
                    <Td>
                        <Button v-if="item.tasks_count > 0"
                            :href="route(`admin.tasks.index`, item.id)" small>
                            {{ item.tasks_count }}
                        </Button>
                        <span v-else>{{ "-" }}</span>
                    </Td>
                    <Td :title="item.description">{{ item.description?.slice(0, 75) }}</Td>
                    <Td>{{ item.created_at }}</Td>
                    <Td>
                        <Actions :edit-link="route(`admin.${routeResourceName}.edit`, item.id)" :show-edit="item.can.update"
                            :show-delete="item.can.delete" @deleteClicked="showDeleteModal(item)" />
                    </Td>
                </template>
            </Table>

            <Modal :show="deleteModal" @close="closeModal" :title="`Delete: (${itemToDelete.name})`">

                <template #description>
                    Once you are delete, you un-able to restore it again.
                </template>

                <template #footer>
                    <Button color="white" @click="closeModal"> Cancel </Button>

                    <Button color="red" class="ml-3" :class="{ 'opacity-25': completeForm.processing }"
                        :disabled="completeForm.processing" @click="handleDeleteItem">
                        Delete
                    </Button>
                </template>
            </Modal>
        </Card>

    </AuthenticatedLayout>
</template>
