<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head, Link } from '@inertiajs/vue3';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'User Details',
        href: 'users',
    },
];

defineProps({
    user: Object,
    userRole: Array
});
</script>

<template>
    <Head title="User Details" />
    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <Link :href="`/users`"
                    class="mb-4 inline-block rounded-md bg-gray-800 px-4 py-2 text-sm font-semibold text-white hover:bg-gray-950">
                Back to Users
                </Link>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                    <div className="flex items-center space-x-5">
                        <div className="flex-1 mx-3 my-2">
                            <h2 className="text-xl font-bold text-gray-900 mb-1">{{user.name}}</h2>
                            <p className="text-xs text-gray-500 mb-2">Joined: <span className="font-medium">{{user.created_at}}</span></p>
                            <hr className="my-2" />
                            <div className="text-sm text-gray-700">
                                <span className="font-semibold">Email:</span> {{user.email}}
                            </div>
                            
                            <div className="text-sm text-gray-700">
                                <span className="font-semibold">Role:
                                    <samp v-for="role in userRole" key="1"
                                        class="m-1 bg-gray-100 text-gray-800 text-sm font-medium rounded-md px-0.5 py-0.5">
                                        {{ role }}
                                    </samp>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
