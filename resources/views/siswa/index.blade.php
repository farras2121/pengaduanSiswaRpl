<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('siswa') }}</h2></x-slot>
      

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5">
                    <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
                        <!-- Start coding here -->
                        <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                            <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                                <div class="w-full md:w-1/2">
                                    <form class="flex items-center">
                                        <label for="simple-search" class="sr-only">Search</label>
                                        <div class="relative w-full">
                                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                            <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Search" required="">
                                        </div>
                                    </form>
                                </div>
                                <div class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                                   
                                    <a href="{{ route('siswa.create') }}">
                                        <button type="button" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                        LAPOR!</button>
                                    <div class="flex items-center space-x-3 w-full md:w-auto">
                                        </a> 
                                      
                                    </div>
                                </div>
                            </div>
                            <div class="overflow-x-auto">
                                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                        <tr>
                                            <th scope="col" class="px-4 py-3">Nomor</th>
                                            <th scope="col" class="px-4 py-3">Nama Pelapor</th>
                                            <th scope="col" class="px-4 py-3">Nama Terlapor</th>
                                            <th scope="col" class="px-4 py-3">Kelas</th>
                                            <th scope="col" class="px-4 py-3">Laporan</th>
                                            <th scope="col" class="px-4 py-3">Bukti</th>
                                            <th scope="col" class="px-4 py-3">Status</th>
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($siswas as $siswa)
                                            <tr class="border-b dark:border-gray-700">
                                                <th scope="row"
                                                    class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    {{ $loop->iteration }}</th>
                                                <td class="px-4 py-3">{{ $siswa->pelapor }}</td>
                                                <td class="px-4 py-3">{{ $siswa->terlapor }}</td>
                                                <td class="px-4 py-3">{{ $siswa->kelas }}</td>
                                                <td class="px-4 py-3">{{ $siswa->laporan }}</td>

                                                <td class="px-4 py-3">
                                                    @if ($siswa->bukti)
                                                        <img src="{{ asset($siswa->bukti) }}" alt=""
                                                            class="w-16 h-16 object-cover">
                                                    @else
                                                        No image
                                                    @endif
                                                </td>
                                                
                                                <td class="px-4 py-3">{{ $siswa->status }}</td>
            
            
            
            
                                            </tr>
                                        @empty
                                        @endforelse
                                    </tbody>
                               </section> 
    </div>
</x-app-layout>

