import { usePage } from '@inertiajs/vue3';

export function can(permission: string): boolean {
    const { auth } = usePage().props;
    return auth?.permissions?.includes(permission);
}