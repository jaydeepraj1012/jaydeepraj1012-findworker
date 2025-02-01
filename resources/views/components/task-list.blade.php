<div class="bg-white p-6 rounded-lg shadow-lg card">
    <table class="min-w-full table-auto">
        <thead class="bg-gray-200">
            <tr>
                <th class="px-4 py-2">Task</th>
                <th class="px-4 py-2">Status</th>
                <th class="px-4 py-2">Due Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tasks as $task)
                <tr>
                    <td class="border px-4 py-2">{{ $task['name'] }}</td>
                    <td class="border px-4 py-2">{{ $task['status'] }}</td>
                    <td class="border px-4 py-2">{{ $task['due_date'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
