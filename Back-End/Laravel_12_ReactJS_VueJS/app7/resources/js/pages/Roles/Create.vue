<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { index } from '@/routes/users';
import { type BreadcrumbItem } from '@/types';
import { Head, Link, useForm } from '@inertiajs/vue3';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Role Create',
        href: 'roles',
    },
];

defineProps({
    permissions: Array
})

const form = useForm({
    name: '',
    permissions: [],
});
</script>

<template>

    <Head title="Role Create" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <Link :href="`/roles`"
                    class="mb-4 inline-block rounded-md bg-gray-800 px-4 py-2 text-sm font-semibold text-white hover:bg-gray-950">
                Back to Roles
                </Link>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <form @submit.prevent="form.post('/roles')"
                            class="max-w-lg mx-auto space-y-6 bg-white p-6 rounded-lg shadow">
                            <div>
                                <label htmlFor="name" class="block text-sm font-medium text-gray-700">
                                    Role Name
                                </label>
                                <input type="text" id="name" name="name"
                                    class="mt-1 px-2 py-2 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                    v-model="form.name" />
                                <p v-if="form.errors.name" class="mt-2 text-sm text-red-600">{{ form.errors.name }}
                                </p>
                            </div>

                            <div class="flex flex-col">
                                <label class='font-bold my-1'>Permissions:</label>

                                <div v-for="permission in permissions" class="flex items-center mb-2">
                                    <input type="checkbox" name="permissions" v-model="form.permissions" :value="permission"
                                        :id="`permission-${permission}`"
                                        class="h-4 w-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500" />
                                    <label :for="`permission-${permission}`"
                                        class="ml-2 block text-sm text-gray-700 capitalize">
                                        {{ permission }}
                                    </label>
                                </div>
                                <p v-if="form.errors.permissions" class="mt-2 text-sm text-red-600">{{
                                    form.errors.permissions }}
                                </p>
                            </div>
                            <hr />
                            <button type="submit" :disabled="form.processing"
                                class="cursor-pointer w-full rounded-md bg-indigo-600 px-4 py-2 text-white font-semibold shadow hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                {{ form.processing ? 'Loading...' : 'Submit' }}
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>