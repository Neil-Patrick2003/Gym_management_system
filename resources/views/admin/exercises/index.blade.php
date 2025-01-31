<x-app-layout>

    <div class="overflow-hidden bg-white shadow sm:rounded-lg h-40">
        <div class="px-4 py-5 sm:p-6">
            <div class="flex justify-between items-center">
                <h2 class="text-xl font-bold">Exercises</h2>
                {{-- <button id="global-toggle-button" onclick="toggleAllButtons()" class="text-indigo-600">
                    Edit
                </button> --}}
            </div>
        </div>
    </div>

    <div class="flex justify-center pt-2">
        <a href="/admin/exercises/create"
            class=" inline-flex items-center px-6 py-3 bg-red-500 text-white font-semibold rounded-full shadow-lg hover:shadow-xl transform transition-all hover:scale-105 hover:bg-red-600">
            <i class="fas fa-plus me-2"></i> Add Exercise
        </a>
    </div>





    @foreach ($exercises as $exercise)
        <div
            class="exercise-item overflow-hidden bg-white shadow-sm hover:shadow-lg hover:scale-104 transition-transform duration-300 ease-in-out sm:rounded-lg mt-4 p-4">
            <div class="action-buttons mt-2 flex justify-end" style="display: none;">
                <button class="edit-button bg-blue-500 text-white px-3 py-1 rounded mr-2">Edit</button>
                <button class="delete-button bg-red-500 text-white px-3 py-1 rounded">Delete</button>
            </div>
            <div class="flex justify-between items-center">
                <div>
                    <p class="font-bold text-xl">{{ $exercise->name }}</p>
                    {{-- <p class="text-sm mt-3">{{ $exercise->description }}</p> --}}
                </div>
                <img src="{{ asset('storage/' . $exercise->photo_link) }}" alt="{{ $exercise->name }}"
                    class="w-16 h-16 rounded-full object-cover border border-gray-300">
            </div>



        </div>
    @endforeach


    {{ $exercises->links() }}

    {{-- <script>
        function toggleAllButtons() {
            const actionButtons = document.querySelectorAll(".action-buttons");
            const toggleButton = document.getElementById("global-toggle-button");

            const isHidden = actionButtons[0].style.display === "none";

            actionButtons.forEach(buttonGroup => {
                buttonGroup.style.display = isHidden ? "block" : "none";
            });

            toggleButton.textContent = isHidden ? "Hide All Actions" : "Show All Actions";
        }
    </script> --}}

</x-app-layout>
