<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head, Link, useForm } from '@inertiajs/vue3';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'User Update',
        href: 'users',
    },
];

const props = defineProps({
    user: Object,
    role: Array,
    userRole: Array
});

const form = useForm({
    name: props.user?.name || '',
    email: props.user?.email || '',
    password: '',
    roles: props.userRole || [],
});
</script>

<template>

    <Head title="User Update" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <Link :href="`/users`"
                    class="mb-4 inline-block rounded-md bg-gray-800 px-4 py-2 text-sm font-semibold text-white hover:bg-gray-950">
                Back to Users
                </Link>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <form @submit.prevent="form.put(`/users/${user.id}`)"
                            class="max-w-lg mx-auto space-y-6 bg-white p-6 rounded-lg shadow">
                            <div>
                                <label htmlFor="name" class="block text-sm font-medium text-gray-700">
                                    Name
                                </label>
                                <input type="text" id="name" name="name"
                                    class="mt-1 px-2 py-2 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                    v-model="form.name" />
                                <p v-if="form.errors.name" class="mt-2 text-sm text-red-600">{{ form.errors.name }}</p>
                            </div>

                            <div>
                                <label htmlFor="email" class="block text-sm font-medium text-gray-700">
                                    Email
                                </label>
                                <input type="email" id="email" name="email"
                                    class="mt-1 px-2 py-2 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                    v-model="form.email" />
                                <p v-if="form.errors.email" class="mt-2 text-sm text-red-600">{{ form.errors.email }}
                                </p>
                            </div>

                            <div>
                                <label htmlFor="password" class="block text-sm font-medium text-gray-700">
                                    Password
                                </label>
                                <input type="password" id="password" name="password"
                                    class="mt-1 px-2 py-2 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                    v-model="form.password" />
                                <p v-if="form.errors.password" class="mt-2 text-sm text-red-600">{{ form.errors.password
                                    }}</p>
                            </div>

                            <div class="flex flex-col">
                                <label class='font-bold my-1'>Roles:</label>

                                <div v-for="role in role" class="flex items-center mb-2">
                                    <input type="checkbox" name="role" v-model="form.roles" :value="role"
                                        :id="`role-${role}`"
                                        class="h-4 w-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500" />
                                    <label :for="`role-${role}`" class="ml-2 block text-sm text-gray-700 capitalize">
                                        {{ role }}
                                    </label>
                                </div>
                                <p v-if="form.errors.roles" class="mt-2 text-sm text-red-600">{{
                                    form.errors.roles }}
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