import { PlaceholderPattern } from '@/components/ui/placeholder-pattern';
import AppLayout from '@/layouts/app-layout';
import { type BreadcrumbItem } from '@/types';
import { Head, Link, useForm } from '@inertiajs/react';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'User Edit',
        href: '/users',
    },
];

export default function UsersEdit({ user, roles, userRoles }) {
    const { data, setData, post: submitForm, reset, processing, errors } = useForm({
        _method: 'put',
        name: user.name || "",
        email: user.email || "",
        password: '',
        roles: userRoles || [],
    });
    
    const handleCheckboxChange = (roleName, checked) => {
        if (checked) {
            setData('roles', [...data.roles, roleName]);
        } else {
            setData('roles', data.roles.filter((id) => id !== roleName));
        }
    };

    const submit = (e: React.FormEvent) => {
        e.preventDefault();
        submitForm(route('users.update', user.id), {
            onSuccess: () => {
                reset();
            },
        });
    };

    return (
        <AppLayout breadcrumbs={breadcrumbs}>
            <Head title="Edit User" />
            <div className='container mx-auto p-4'>
                <div className='flex justify-between items-center mb-4'>
                    <h1 className='text-2xl font-bold mb-4'>Edit User</h1>
                    <Link href='/users' className='mt-8 block rounded-md bg-gray-900 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-xs hover:bg-gray-950 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500 sm:mt-10'>Back to Users</Link>
                </div>

                <form onSubmit={submit} className="max-w-lg mx-auto space-y-6 bg-white p-6 rounded-lg shadow">
                    <div>
                        <label htmlFor="name" className="block text-sm font-medium text-gray-700">
                            Name
                        </label>
                        <input
                            type="text"
                            id="name"
                            name="name"
                            className="mt-1 px-2 py-2 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                            value={data.name}
                            onChange={(e) => setData('name', e.target.value)}
                        />
                        {errors.name && <div className="text-red-500 text-sm">{errors.name}</div>}
                    </div>

                    <div>
                        <label htmlFor="email" className="block text-sm font-medium text-gray-700">
                            Email
                        </label>
                        <input
                            type="email"
                            id="email"
                            name="email"
                            className="mt-1 px-2 py-2 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                            value={data.email}
                            onChange={(e) => setData('email', e.target.value)}
                        />
                        {errors.email && <div className="text-red-500 text-sm">{errors.email}</div>}
                    </div>

                    <div>
                        <label htmlFor="password" className="block text-sm font-medium text-gray-700">
                            Password
                        </label>
                        <input
                            type="password"
                            id="password"
                            name="password"
                            className="mt-1 px-2 py-2 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                            value={data.password}
                            onChange={(e) => setData('password', e.target.value)}
                        />
                        {errors.password && <div className="text-red-500 text-sm">{errors.password}</div>}
                    </div>

                    <label htmlFor="" className='font-bold my-1'>Roles:</label>
                    {Object.keys(roles).length === 0 ? (
                        <div className="text-gray-500">No roles available</div>
                    ) : (
                        <div className="flex flex-col">
                            {roles.map((roles) => (
                                <div key={roles} className="flex items-center mb-2">
                                    <input
                                        type="checkbox"
                                        value={roles}
                                        onChange={(e) => handleCheckboxChange(roles, e.target.checked)}
                                        checked={data.roles.includes(roles)}
                                        id={roles}
                                        className="h-4 w-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500"
                                    />
                                    <label htmlFor={roles} className="ml-2 block text-sm text-gray-700">
                                        {roles}
                                    </label>
                                </div>
                            ))}
                        </div>
                    )}
                    {errors.roles && <div className="text-red-500 text-sm">{errors.roles}</div>}

                    <hr />
                    <button
                        type="submit"
                        className="cursor-pointer w-full rounded-md bg-indigo-600 px-4 py-2 text-white font-semibold shadow hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    >
                        {processing ? 'Loading...' : 'Submit'}
                    </button>
                </form>
            </div>

        </AppLayout>
    );
}
