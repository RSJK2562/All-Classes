import { PlaceholderPattern } from '@/components/ui/placeholder-pattern';
import AppLayout from '@/layouts/app-layout';
import { type BreadcrumbItem } from '@/types';
import { Head, Link } from '@inertiajs/react';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'User Details',
        href: '/users',
    },
];

export default function UserDetails({ user, userRoles }) {
    return (
        <AppLayout breadcrumbs={breadcrumbs}>
            <Head title="User Details" />
            <div className='container mx-auto p-4'>
                <div className='flex justify-between items-center mb-4'>
                    <h1 className='text-2xl font-bold mb-4'>Edit User</h1>
                    <Link href='/users' className='mt-8 block rounded-md bg-gray-900 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-xs hover:bg-gray-950 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500 sm:mt-10'>Back to Users</Link>
                </div>

                <div className="max-w-lg mx-auto bg-white rounded-xl shadow-md overflow-hidden p-6">
                    <div className="flex items-center space-x-5">
                        <div className="flex-1">
                            <h2 className="text-xl font-bold text-gray-900 mb-1">{user.name}</h2>
                            <p className="text-xs text-gray-500 mb-2">Joined: <span className="font-medium">{user.created_at}</span></p>
                            <hr className="my-2" />
                            <div className="text-sm text-gray-700">
                                <span className="font-semibold">Email:</span> {user.email}
                            </div>
                            <div className="text-sm text-gray-700 mt-1">
                                <span className="font-semibold">Roles:</span>
                                {userRoles.map((role) => (
                                    <span key={role} className="inline-block px-2 mx-0.5 py-1 my-0.5 mx-0.5 text-xs font-medium text-white bg-amber-600 rounded-full">
                                        {role}
                                    </span>
                                ))}
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </AppLayout>
    );
}