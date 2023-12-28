<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="font-semibold text-xl">Discipline</h1>
                    <hr><br>

                    <section class="py-0 bg-blueGray-50">
                        <div class="w-full xl:w-8/12 mb-5 xl:mb-0 px-4 mx-auto mt-4">
                          <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded ">
                            <div class="rounded-t mb-0 px-4 py-3 border-0">
                              <div class="flex flex-wrap items-center">
                                <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                                  <h3 class="font-semibold text-base text-blueGray-700">Discipline po godištu</h3>
                                </div>

                                <div class="relative w-full px-4 max-w-full flex-grow flex-1 text-right">
                                    <button class="bg-indigo-500 text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-0 mb-1 ease-linear transition-all duration-150" type="button">Nova disciplina</button>
                                    <button class="bg-indigo-500 text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-0 mb-1 ease-linear transition-all duration-150" type="button">Novo godište</button>
                                  </div>
                              </div>
                            </div>
                        
                            @livewire('discipline-selector')
                          </div>
                        </div>
                        </section>


                        <section class="py-0 bg-blueGray-50">
                            <div class="w-full xl:w-8/12 mb-5 xl:mb-0 px-4 mx-auto mt-4">
                              <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded ">
                                <div class="rounded-t mb-0 px-4 py-3 border-0">
                                  <div class="flex flex-wrap items-center">
                                    <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                                      <h3 class="font-semibold text-base text-blueGray-700">Dostupne kategorije</h3>
                                    </div>
                                  </div>
                                </div>
                            
                                @livewire('type-selector')
                              </div>
                            </div>
                            </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>