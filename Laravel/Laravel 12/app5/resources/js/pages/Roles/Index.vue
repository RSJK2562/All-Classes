<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { can } from '@/lib/can';
import { type BreadcrumbItem } from '@/types';
import { Head, Link, router } from '@inertiajs/vue3';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Roles & Permissions',
        href: 'roles',
    },
];
defineProps({
    roles: Array
})

function deleteRole(id) {
    if (confirm("Are you sure you want to delete this role?")) {
        router.delete(`/roles/${id}`);
    }
}

</script>

<template>

    <Head title="Roles & Permissions" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <Link v-if="can('roles.create')" :href="`/roles/create`"
                    class="mb-4 inline-block rounded-md bg-gray-800 px-4 py-2 text-sm font-semibold text-white hover:bg-gray-950">
                Create Role
                </Link>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div className='overflow-x-auto'>
                            <table class="w-full table-auto rounded-lg">
                                <thead>
                                    <tr>
                                        <th class="border px-4 py-2">ID</th>
                                        <th class="border px-4 py-2">Role</th>
                                        <th class="border px-4 py-2">Permissions</th>
                                        <th class="border px-4 py-2">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="(role, index) in roles" :key="role.id">
                                        <td class="border px-4 py-2">{{ index + 1 }}</td>
                                        <td class="border px-4 py-2">{{ role.name }}</td>
                                        <td class="border px-4 py-2">
                                            <samp v-for="permission in role.permissions" key="1"
                                                class="m-1 bg-green-100 text-green-800 text-sm font-medium rounded-md px-0.5 py-0.5">
                                                {{ permission.name }}
                                            </samp>
                                        </td>
                                        <td class="border px-4 py-2">
                                            <Link v-if="can('roles.edit')" :href="`/roles/${role.id}/edit`"
                                                class="cursor-pointer text-white bg-blue-500 rounded-md px-3 py-1 m-0.5">
                                            Edit
                                            </Link>

                                            <Link v-if="can('roles.delete')" @click="deleteRole(role.id)"
                                                class="cursor-pointer text-white bg-red-500 rounded-md px-3 py-1 m-0.5">
                                            Delete
                                            </Link>

                                            <Link v-if="can('roles.view')" :href="`/roles/${role.id}`"
                                                class="cursor-pointer text-white bg-green-500 rounded-md px-3 py-1 m-0.5">
                                            View
                                            </Link>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
