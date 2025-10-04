import AppLayout from '@/layouts/app-layout';
import { type BreadcrumbItem } from '@/types';
import { Head, Link } from '@inertiajs/react';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Posts',
        href: '/posts',
    },
];

export default function Posts(posts) {
    return (
        <AppLayout breadcrumbs={breadcrumbs}>
            <Head title="Posts" />
            <div className='container mx-auto p-4'>
                <div className='flex justify-between items-center mb-4'>
                    <h1 className='text-2xl font-bold'>Posts</h1>
                    <Link href='/posts/create' className='mt-8 block rounded-md bg-gray-900 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-xs hover:bg-gray-950 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500 sm:mt-10'>Create Post</Link>
                </div>
                <div className='overflow-x-auto'>
                    <table className='w-full table-auto shadow-lg bg-white dark:bg-neutral-800 rounded-lg'>
                        <thead>
                            <tr className='bg-neutral-50 dark:bg-neutral-700'>
                                <th className='px-4 py-2'>#</th>
                                <th className='px-4 py-2'>Title</th>
                                <th className='px-4 py-2'>Contect</th>
                                <th className='px-4 py-2'>Created At</th>
                                <th className='px-4 py-2'>Image</th>
                                <th className='px-4 py-2'>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {posts.posts.map((post, index) => (
                                <tr key={post.id} className={index % 2 === 0 ? 'bg-white dark:bg-neutral-800' : 'bg-neutral-50 dark:bg-neutral-700'}>
                                    <td className='border px-4 py-2'>{index + 1}</td>
                                    <td className='border px-4 py-2'>{post.title}</td>
                                    <td className='border px-4 py-2'>{post.contect}</td>
                                    <td className='border px-4 py-2'>{post.created_at}</td>
                                    <td className="border px-4 py-2">
                                        {post.image && (
                                            <img
                                                src={`/storage/${post.image}`}
                                                alt={post.title}
                                                className="mt-2 max-w-xs w-24"
                                            />
                                        )}
                                    </td>
                                    <td className='border px-4 py-2'>
                                        <Link href={`/posts/${post.id}/edit`} className='text-indigo-600 hover:text-indigo-900 mr-2'>Edit</Link>

                                        <Link
                                            href={`/posts/${post.id}`}
                                            method="delete"
                                            as="button"
                                            className="text-red-600 hover:text-red-900 cursor-pointer"
                                            onClick={(e) => {
                                                if (!confirm('Are you sure you want to delete this post?')) {
                                                    e.preventDefault(); 
                                                }
                                            }}
                                        >
                                            Delete
                                        </Link>
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
