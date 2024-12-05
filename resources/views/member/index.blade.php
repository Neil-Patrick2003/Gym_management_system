<x-member-layout>

    <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
        <div class="col-span-3 gap-y-4">
            <div class="overflow-hidden">
                <div class="h-36 bg-none border bg-center rounded-lg w-full p-4 mb-4"
                    style="background-image: url('{{ asset('images/final.1.png') }}');">
                    <div class="flex flex-row space-between text-neutral-100 h-full">
                        <div class="flex-col">
                            <h1 class="text-xl text-neutral-50 font-bold">Keep on Track on your journey</h1>
                            <p>"SASHSJFBSHFG.."</p>
                        </div>
                        <div>
                            <img src="{{ asset('images/header-bg.png') }}" alt="" class="h-32 w-56 object-cover">
                        </div>

                    </div>
                </div>


            </div>
            <div class="flex flex-row space-between w-full gap-x-4 mb-4">
                <div class="overflow-hidden rounded-lg bg-white w-1/3 shadow">
                    <div class="px-4 py-5 sm:p-6">
                    </div>
                </div>
                <div class="overflow-hidden rounded-lg bg-white w-1/3 shadow">
                    <div class="px-4 py-5 sm:p-6 h-72">

                    </div>
                </div>
                <div class="overflow-hidden rounded-lg bg-white w-1/3 shadow">
                    <div class="px-4 py-5 sm:p-6">

                    </div>
                </div>
            </div>
            <div>
                <div class="overflow-hidden rounded-lg bg-white shadow">
                    <div class="px-4 py-5 sm:p-6">
                        <!-- Content goes here -->
                    </div>
                </div>
            </div>

        </div>
        <div class="overflow-hidden rounded-lg bg-white w-full shadow">
            <div class="px-4 py-5 sm:p-6">
                Today Schedules
            </div>
        </div>

    </div>


    <div class="flex justify-between w-full border mt-6">
        <div>
            <H3 class=" text-lg font-bold text-gray-600">Programs</H3>
        </div>
        <div>
            <a href="/member/programs" class="text-sm text-gray-600">
                See all.
            </a>
        </div>
    </div>
    <div class="snap-x flex overflow-x-auto space-x-4 py-4 scrollbar-none">



        @foreach ($programs as $program)
            <div class="snap-center flex-shrink-0 w-80">
                <img src="{{ asset('storage/' . $program->photo_link) }}" alt="Program Image"
                    class="w-full h-auto rounded-lg" />
            </div>
        @endforeach


    </div>











    {{-- <div class="flex flex-col bg-zinc-800 m-auto p-auto">
        <h1 class="flex py-5 lg:px-20 md:px-10 px-5 lg:mx-40 md:mx-20 mx-5 font-bold text-4xl text-white">
            Programs
        </h1>
        <div class="flex overflow-x-scroll pb-10 hide-scroll-bar">
            <div class="flex flex-nowrap lg:ml-40 md:ml-20 ml-10">
                @foreach ($programs as $program)
                    <div class="inline-block px-3 ">
                        <div class="w-96 h-64 bg-cover bg-center border border-solid max-w-96 overflow-hidden rounded-lg bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out"
                            style="background-image: url('{{ asset('storage/' . $program->photo_link) }}');">>
                        </div>
                    </div>
                @endforeach
            </div>
        </div> --}}


    <!-- Fixed Check-in Button -->
    <div class="fixed bottom-4 right-4 z-50">
        <button id="openModal"
            class="inline-flex items-center justify-center bg-indigo-600 text-white px-6 py-3 rounded-lg shadow-lg hover:bg-indigo-500 transition-all">
            Check in
        </button>
    </div>


    {{-- Modal Select trainers --}}
    <div id="myModal" class="fixed inset-0 z-50 hidden bg-black bg-opacity-50 flex items-center justify-center">
        <div class="bg-white rounded-lg p-6 w-2/3 max-w-lg">
            <!-- Modal Header -->
            <div class="flex justify-between items-center">
                <h2 class="text-xl font-semibold">Choose Trainer</h2>
                <button id="closeModal" class="text-gray-600 text-2xl">&times;</button>
            </div>

            <!-- Horizontal Scrollable Content Area without Scrollbar -->
            <div class="modal-body max-h-96 overflow-y-auto mt-4">
                <div class="flex space-x-4 overflow-x-auto p-4  hide-scroll-bar">
                    <button type="submit"
                        class=" h-40 flex-shrink-0 bg-blue-500 hover:bg-blue-600 text-white rounded-lg p-4 w-40 text-center font-semibold focus:outline-none">
                        None
                    </button>
                    @foreach ($trainers as $trainer)
                        <form action="/home" method="POST">
                            @csrf
                            <input type="hidden" name="trainer_id" value="{{ $trainer->id }}">
                            @csrf
                            <button type="submit"
                                class=" h-40 flex-shrink-0 bg-blue-500 hover:bg-blue-600 text-white rounded-lg p-4 w-40 text-center font-semibold focus:outline-none">
                                {{ $trainer->name }}
                            </button>
                        </form>
                    @endforeach
                </div>
            </div>

        </div>
    </div>





    <script>
        const modal = document.getElementById("myModal");
        const openModalBtn = document.getElementById("openModal");
        const closeModalBtn = document.getElementById("closeModal");

        openModalBtn.onclick = () => {
            modal.classList.remove("hidden");
        };

        closeModalBtn.onclick = () => {
            modal.classList.add("hidden");
        };

        window.onclick = (event) => {
            if (event.target === modal) {
                modal.classList.add("hidden");
            }
        };
    </script>
</x-member-layout>
