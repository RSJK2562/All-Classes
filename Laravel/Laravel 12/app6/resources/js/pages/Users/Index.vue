<script setup lang="ts">
import Pagination from '@/components/Pagination.vue';
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head, Link, router } from '@inertiajs/vue3';
const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Users',
        href: 'users',
    },
];

defineProps({
    users: {
        type: Object,
        required: true
    }
})


</script>

<template>

    <Head title="Users" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <table class="table-auto w-full">
                            <thead>
                                <tr>
                                    <th class="border px-4 py-2">ID</th>
                                    <th class="border px-4 py-2">Name</th>
                                    <th class="border px-4 py-2">Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(user, index) in users.data" :key="user.id">
                                    <td class="border px-4 py-2">{{ index + 1 }}</td>
                                    <td class="border px-4 py-2">{{ user.name }}</td>
                                    <td class="border px-4 py-2">{{ user.email }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <Pagination :links="users.links" />
            </div>
        </div>
    </AppLayout>
</template>
