import { PlaceholderPattern } from '@/components/ui/placeholder-pattern';
import AppLayout from '@/layouts/app-layout';
import { users } from '@/routes';
import { type BreadcrumbItem } from '@/types';
import { Head, Link } from '@inertiajs/react';
import Pagination from '@/components/Pagination';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Users',
        href: users().url,
    },
];

export default function Index({ users }) {
    return (
        <AppLayout breadcrumbs={breadcrumbs}>
            <Head title="Users" />
            <div className='container mx-auto p-4'>
                <div className="flex justify-between items-center mb-6">
                    <h1 className="text-2xl font-bold">All User</h1>
                </div>

                <div className='overflow-x-auto'>
                    <table className='w-full table-auto shadow-lg bg-white dark:bg-neutral-800 rounded-lg'>
                        <thead>
                            <tr className='bg-neutral-50 dark:bg-neutral-700'>
                                <th className='px-4 py-2'>#</th>
                                <th className='px-4 py-2'>Name</th>
                                <th className='px-4 py-2'>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            {users.data.map((user, index) => (
                                <tr key={user.id} className={index % 2 === 0 ? 'bg-white dark:bg-neutral-800' : 'bg-neutral-50 dark:bg-neutral-700'}>
                                    <td className='border px-4 py-2'>{index + 1}</td>
                                    <td className='border px-4 py-2'>{user.name}</td>
                                    <td className='border px-4 py-2'>{user.email}</td>
                                </tr>
                            ))}
                        </tbody>
                    </table>
                </div>
                <Pagination links={users.links} />
            </div>
        </AppLayout>
    );
}
