import { Link } from "@inertiajs/react";

export default function Pagination({ links }) {
    return (
        <div className="mt-4 flex justify-center">
            {links.map((link) => (
                <Link
                    key={link.label}
                    href={link.url ?? '#'}
                    dangerouslySetInnerHTML={{ __html: link.label }}
                    className={`px-3 py-1 border border-gray-300 rounded hover:bg-gray-100 
                        ${link.active ? 'bg-gray-300' : 'bg-white'} ${!link.url ? 'pointer-events-none text-gray-400' : 'text-gray-600'}`}
                >
                </Link>
            ))
            }
        </div >
    );
}
