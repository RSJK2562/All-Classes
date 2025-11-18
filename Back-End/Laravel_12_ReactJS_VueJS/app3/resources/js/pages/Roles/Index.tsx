import { PlaceholderPattern } from '@/components/ui/placeholder-pattern';
import AppLayout from '@/layouts/app-layout';
import { type BreadcrumbItem } from '@/types';
import { Head, Link, router } from '@inertiajs/react';
import { can } from '@/lib/can';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Roles',
        href: '/roles',
    },
];

export default function Roles({ roles }) {
    const handleDelete = (id) => {
        if (confirm('Are you sure you want to delete this role?')) {
            router.delete(route('roles.destroy', id));
        }
    };

    return (
        <AppLayout breadcrumbs={breadcrumbs}>
            <Head title="Roles" />

            <div className='container mx-auto p-4'>
                <div className="flex justify-between items-center mb-6">
                    <h1 className="text-2xl font-bold">All Roles</h1>
                    { can('roles.create') && (
                    <Link
                        href="/roles/create"
                        className="rounded-md bg-gray-900 px-4 py-2 text-sm font-semibold text-white shadow hover:bg-gray-950 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    >
                        Create Role
                    </Link>
                    )}
                </div>

                <div className='overflow-x-auto'>
                    <table className='w-full table-auto shadow-lg bg-white dark:bg-neutral-800 rounded-lg'>
                        <thead>
                            <tr className='bg-neutral-50 dark:bg-neutral-700'>
                                <th className='px-4 py-2'>#</th>
                                <th className='px-4 py-2'>Roles</th>
                                <th className='px-4 py-2'>Permissions</th>
                                <th className='px-4 py-2'>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {roles.map((role, index) => (
                                <tr key={role.id} className={index % 2 === 0 ? 'bg-white dark:bg-neutral-800' : 'bg-neutral-50 dark:bg-neutral-700'}>
                                    <td className='border px-4 py-2'>{index + 1}</td>
                                    <td className='border px-4 py-2'>{role.name}</td>
                                    <td className='border px-4 py-2'>
                                        {role.permissions.map((permission) =>
                                            <span key={permission.id} className="inline-block bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-full mr-1">
                                                {permission.name}
                                            </span>
                                        )}
                                    </td>
                                    <td className='border px-4 py-2 text-center'>
                                        {can('roles.view') && (
                                            <Link href={route('roles.show', role.id)} className='cursor-pointer px-3 py-1 mx-1 text-sm font-xs font-medium rounded-md text-white bg-green-600'>
                                                View
                                            </Link>
                                        )}
                                        {can('roles.edit') && (
                                            <Link href={route('roles.edit', role.id)} className='cursor-pointer px-3 py-1 mx-1 text-sm font-xs font-medium rounded-md text-white bg-blue-600'>
                                                Edit
                                            </Link>
                                        )}
                                        {can('roles.delete') && (
                                            <Link onClick={() => handleDelete(role.id)} className='cursor-pointer px-3 py-1 mx-1 text-sm font-xs font-medium rounded-md text-white bg-red-600'>
                                                Delete
                                            </Link>
                                        )}
                                    </td>
                                </tr>
                            ))}
                        </tbody>
                    </table>
                </div>
            </div>
        </AppLayout>
    );
}
