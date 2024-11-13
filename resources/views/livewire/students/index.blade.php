<div>



    <div class="py-4">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <!-- Updated Add Student Link (with wire:navigate) -->

            <div class="flex justify-between p-4 item-center">
                <div>
                    <h1 class="text-2xl font-bold text-gray-800 dark:text-neutral-200">Students</h1>
                    <p class="text-sm text-gray-500 dark:text-neutral-400">List of all students</p>
                </div>
               <div>
                <a href="{{ route('students.create') }}" wire:navigate class="inline-flex items-center px-4 py-3 mb-4 text-sm font-medium text-white bg-indigo-500 border border-transparent rounded-lg shadow-md gap-x-2 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-600 disabled:opacity-50 disabled:pointer-events-none">
                    Add Student
                </a>
               </div>
            </div>
            
            <div class="overflow-hidden bg-gray-800 shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-100">
                    <div class="flex flex-col">
                        <div class="-m-1.5 overflow-x-auto">
                            <div class="p-1.5 min-w-full inline-block align-middle">
                                <div class="overflow-hidden">
                                    <table class="min-w-full divide-y divide-gray-600 dark:divide-neutral-700" id="paginated-students">
                                        <thead class="bg-gray-700">
                                            <tr>
                                                <th class="px-6 py-3 text-xs font-medium text-gray-300 uppercase text-start dark:text-neutral-500">ID</th>
                                                <th class="px-6 py-3 text-xs font-medium text-gray-300 uppercase text-start dark:text-neutral-500">Name</th>
                                                <th class="px-6 py-3 text-xs font-medium text-gray-300 uppercase text-start dark:text-neutral-500">Email</th>
                                                <th class="px-6 py-3 text-xs font-medium text-gray-300 uppercase text-start dark:text-neutral-500">Class</th>
                                                <th class="px-6 py-3 text-xs font-medium text-gray-300 uppercase text-start dark:text-neutral-500">Section</th>
                                                <th class="px-6 py-3 text-xs font-medium text-gray-300 uppercase text-end dark:text-neutral-500">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($students as $student)
                                                <tr class="odd:bg-gray-800 even:bg-gray-700 hover:bg-gray-700 dark:odd:bg-neutral-800 dark:even:bg-neutral-700 dark:hover:bg-neutral-600">
                                                    <td class="px-6 py-4 text-sm font-medium text-gray-200">{{ $student->id }}</td>
                                                    <td class="px-6 py-4 text-sm text-gray-200">{{ $student->name }}</td>
                                                    <td class="px-6 py-4 text-sm text-gray-200">{{ $student->email }}</td>
                                                    <td class="px-6 py-4 text-sm text-gray-200">{{ $student->class->name }}</td>
                                                    <td class="px-6 py-4 text-sm text-gray-200">{{ $student->section->name }}</td>
                                                    <td class="px-6 py-4 text-sm font-medium text-end">
                                                        <button type="button" class="inline-flex items-center text-sm font-semibold text-blue-400 hover:text-blue-600 focus:outline-none">Delete</button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="my-4">
                        {{ $students->links(data: ['scrollTo' => false]) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>