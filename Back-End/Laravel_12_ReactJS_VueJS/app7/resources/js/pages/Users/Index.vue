<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { can } from '@/lib/can';
import { type BreadcrumbItem } from '@/types';
import { Head, Link, router, usePage } from '@inertiajs/vue3';
const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Users',
        href: 'users',
    },
];

// defineProps({
//     users: Array
// })

interface User {
    id: number;
    name: string;
    email: string;
}

const props = defineProps<{
    users: User[]
}>()

const { flash } = usePage().props;
console.log(flash);


function deleteUser(id: number) {
    if (confirm("Are you sure you want to delete this user?")) {
        router.delete(`/users/${id}`);
    }
}

</script>

<template>

    <Head title="Users" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="py-12">

            <div v-if="flash.success" class="max-w-xl mx-auto">
                <div class="flex items-start gap-3 p-4 rounded-lg border bg-green-50 border-green-100">
                    <svg class="w-6 h-6 text-green-600" viewBox="0 0 24 24" fill="none" aria-hidden>
                        <path d="M5 13l4 4L19 7" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    <div class="flex-1 text-sm text-green-800">
                        <strong class="block font-medium">Success</strong>
                        <span>{{ flash.success }}</span>
                    </div>
                </div>
            </div>

            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

                <Link v-if="can('users.create')" :href="`/users/create`"
                    class="mb-4 inline-block rounded-md bg-gray-800 px-4 py-2 text-sm font-semibold text-white hover:bg-gray-950">
                Create User
                </Link>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <table class="table-auto w-full">
                            <thead>
                                <tr>
                                    <th class="border px-4 py-2">ID</th>
                                    <th class="border px-4 py-2">Name</th>
                                    <th class="border px-4 py-2">Email</th>
                                    <th class="border px-4 py-2">Roles</th>
                                    <th class="border px-4 py-2">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(user, index) in users" :key="user.id">
                                    <td class="border px-4 py-2">{{ index + 1 }}</td>
                                    <td class="border px-4 py-2">{{ user.name }}</td>
                                    <td class="border px-4 py-2">{{ user.email }}</td>
                                    <td class="border px-4 py-2">
                                        <samp v-for="role in user.roles" key="1"
                                            class="m-1 bg-green-100 text-green-800 text-sm font-medium rounded-md px-0.5 py-0.5">
                                            {{ role.name }}
                                        </samp>
                                    </td>

                                    <td class="border px-4 py-2">
                                        <Link v-if="can('users.edit')" :href="`/users/${user.id}/edit`"
                                            class="cursor-pointer text-white bg-blue-500 px-3 py-1 m-0.5">Edit</Link>

                                        <Link v-if="can('users.delete')" @click="deleteUser(user.id)"
                                            class="cursor-pointer text-white bg-red-500 px-3 py-1 m-0.5">Delete</Link>

                                        <Link v-if="can('users.view')" :href="`/users/${user.id}`"
                                            class="cursor-pointer text-white bg-green-500 px-3 py-1 m-0.5">
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
    </AppLayout>
</template>
