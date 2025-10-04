import { PlaceholderPattern } from '@/components/ui/placeholder-pattern';
import AppLayout from '@/layouts/app-layout';
import { type BreadcrumbItem } from '@/types';
import { Head, Link, router } from '@inertiajs/react';
import { can } from '@/lib/can';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Users',
        href: '/users',
    },
];

export default function Users({ users }) {
    const handleDelete = (id) => {
        if (confirm('Are you sure you want to delete this user?')) {
            router.delete(route('users.destroy', id));
        }
    };

    return (
        <AppLayout breadcrumbs={breadcrumbs}>
            <Head title="Users" />

            <div className='container mx-auto p-4'>
                <div className="flex justify-between items-center mb-6">
                    <h1 className="text-2xl font-bold">All User</h1>
                    {can('users.create') && (
                        <Link
                            href="/users/create"
                            className="rounded-md bg-gray-900 px-4 py-2 text-sm font-semibold text-white shadow hover:bg-gray-950 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        >
                            Create User
                        </Link>
                    )}
                </div>

                <div className='overflow-x-auto'>
                    <table className='w-full table-auto shadow-lg bg-white dark:bg-neutral-800 rounded-lg'>
                        <thead>
                            <tr className='bg-neutral-50 dark:bg-neutral-700'>
                                <th className='px-4 py-2'>#</th>
                                <th className='px-4 py-2'>Name</th>
                                <th className='px-4 py-2'>Email</th>
                                <th className='px-4 py-2'>Role</th>
                                <th className='px-4 py-2'>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {users.map((user, index) => (
                                <tr key={user.id} className={index % 2 === 0 ? 'bg-white dark:bg-neutral-800' : 'bg-neutral-50 dark:bg-neutral-700'}>
                                    <td className='border px-4 py-2'>{index + 1}</td>
                                    <td className='border px-4 py-2'>{user.name}</td>
                                    <td className='border px-4 py-2'>{user.email}</td>
                                    <td className='border px-4 py-2'>
                                        {user.roles.map((role) => (
                                            <span key={role.id} className='inline-block px-2 mx-0.5 py-1 text-xs font-medium text-white bg-amber-600 rounded-full'>
                                                {role.name}
                                            </span>
                                        ))}
                                    </td>
                                    <td className='border px-4 py-2 text-center'>
                                        {can('users.view') &&
                                            <Link href={route('users.show', user.id)} className='cursor-pointer px-3 py-1 mx-1 text-sm font-xs font-medium rounded-md text-white bg-green-600'>
                                                View
                                            </Link>
                                        }
                                        {can('users.edit') && (
                                            <Link href={route('users.edit', user.id)} className='cursor-pointer px-3 py-1 mx-1 text-sm font-xs font-medium rounded-md text-white bg-blue-600'>
                                                Edit
                                            </Link>
                                        )}
                                        {can('users.delete') && (
                                            <Link onClick={() => handleDelete(user.id)} className='cursor-pointer px-3 py-1 mx-1 text-sm font-xs font-medium rounded-md text-white bg-red-600'>
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
