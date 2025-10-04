import { usePage } from "@inertiajs/react";

export function can(permission: string): boolean {
    const { auth } = usePage().props;
    return auth?.permissions?.includes(permission);
}
