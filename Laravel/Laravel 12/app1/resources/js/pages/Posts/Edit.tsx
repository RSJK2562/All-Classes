import AppLayout from '@/layouts/app-layout';
import { type BreadcrumbItem } from '@/types';
import { Head, Link, useForm } from '@inertiajs/react';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Edit Post',
        href: '/posts/edit',
    },
];

export default function EditPost({post}) {

    const { data, setData, post:submitForm, reset, processing, errors } = useForm({
        title: post.title,
        contect: post.contect,
        image: null,
        _method: 'PUT'
    });

    const submit = (e: React.FormEvent) => {
        e.preventDefault();
        // submitForm(`/posts/${post.id}`, {
        //     onSuccess: () => {
        //         reset();
        //     },
        // });
        submitForm(route('posts.update', post.id), {
            onSuccess: () => {
                reset();
            },
        });
    };

    return (
        <AppLayout breadcrumbs={breadcrumbs}>
            <Head title="Edit Post" />
            <div className='container mx-auto p-4'>
                <div className='flex justify-between items-center mb-4'>
                    <h1 className='text-2xl font-bold mb-4'>Edit Post</h1>
                    <Link href='/posts' className='mt-8 block rounded-md bg-gray-900 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-xs hover:bg-gray-950 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500 sm:mt-10'>Back to Posts</Link>
                </div>

                <form onSubmit={submit} method="post" encType='multipart/form-data'>
                    <div className='mb-4'>
                        <label htmlFor="title" className='block text-sm font-medium mb-2'>Title</label>
                        <input type="text" id="title" name="title" className='mt-1 block w-full border px-3 py-2 border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500' value={data.title} onChange={e => setData('title', e.currentTarget.value)} />
                        {errors.title && <p className='mt-2 text-sm text-red-600'>{errors.title}</p>}
                    </div>
                    <div className='mb-4'>
                        <label htmlFor="contect" className='block text-sm font-medium mb-2'>Contect</label>
                        <textarea id="contect" name="contect" className='mt-1 block w-full border px-3 py-2 border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500' rows={3} value={data.contect} onChange={e => setData('contect', e.currentTarget.value)}></textarea>
                        {errors.contect && <p className='mt-2 text-sm text-red-600'>{errors.contect}</p>}
                    </div>
                    <div className='mb-4'>
                        <label htmlFor="image" className='block text-sm font-medium mb-2'>Image</label>
                        <input type="file" id="image" name="image" className='mt-1 block w-full border px-3 py-2 border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500' onChange={e => setData('image', e.currentTarget.files[0])} />
                        {errors.image && <p className='mt-2 text-sm text-red-600'>{errors.image}</p>}
                        {post.image && (
                            <img src={`/storage/${post.image}`} alt={post.title} className='mt-2 max-w-xs w-50' />
                        )}
                    </div>
                    <button type="submit" className='mt-8 block rounded-md bg-indigo-500 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-xs hover:bg-indigo-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500 sm:mt-10 cursor-pointer'>
                        {processing ? 'Updating...' : 'Update Post'}
                    </button>
                </form>
            </div>
        </AppLayout>
    );
}
