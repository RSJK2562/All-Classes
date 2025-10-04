import { PlaceholderPattern } from '@/components/ui/placeholder-pattern';
import AppLayout from '@/layouts/app-layout';
import { type BreadcrumbItem } from '@/types';
import { Head, Link, useForm } from '@inertiajs/react';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Role Edit',
        href: '/roles',
    },
];

export default function RolesEdit({ permissions, role, rolePermissions }) {
    const { data, setData, post: submitForm, reset, processing, errors } = useForm({
        _method: 'put',
        name: role.name || '',
        permissions: rolePermissions || [],
    });

    const handleCheckboxChange = (permissionName, checked) => {
        if (checked) {
            setData('permissions', [...data.permissions, permissionName]);
        } else {
            setData('permissions', data.permissions.filter((id) => id !== permissionName));
        }
    };

    const submit = (e: React.FormEvent) => {
        e.preventDefault();
        submitForm(route('roles.update', role.id), {
            onSuccess: () => {
                reset();
            },
        });
    };

    return (
        <AppLayout breadcrumbs={breadcrumbs}>
            <Head title="Edit Role" />
            <div className='container mx-auto p-4'>
                <div className='flex justify-between items-center mb-4'>
                    <h1 className='text-2xl font-bold mb-4'>Edit Role</h1>
                    <Link href='/roles' className='mt-8 block rounded-md bg-gray-900 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-xs hover:bg-gray-950 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500 sm:mt-10'>Back to Roles</Link>
                </div>

                <form onSubmit={submit} className="max-w-lg mx-auto space-y-6 bg-white p-6 rounded-lg shadow">
                    <div>
                        <label htmlFor="name" className="block text-sm font-medium text-gray-700">
                            Role Name
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

                    <label htmlFor="" className='font-bold my-1'>Permissions</label>
                    {Object.keys(permissions).length === 0 ? (
                        <div className="text-gray-500">No permissions available</div>
                    ) : (
                        <div className="flex flex-col">
                            {permissions.map((permission) => (
                                <div key={permission} className="flex items-center mb-2">
                                    <input
                                        type="checkbox"
                                        value={permission}
                                        onChange={(e) => handleCheckboxChange(permission, e.target.checked)}
                                        checked={data.permissions.includes(permission)}
                                        id={permission}
                                        className="h-4 w-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500"
                                    />
                                    <label htmlFor={permission} className="ml-2 block text-sm text-gray-700">
                                        {permission}
                                    </label>
                                </div>
                            ))}
                        </div>
                    )}
                    {errors.permissions && <div className="text-red-500 text-sm">{errors.permissions}</div>}
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