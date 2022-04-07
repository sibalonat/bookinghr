<div class="max-w-[50%] p-5 m-6 mx-auto bg-gray-400 rounded-lg">
    <form wire:submit.prevent='submit'>
        <div class="hidden sm:block" aria-hidden="true">
            <div class="py-5">
                <p class="font-bold text-left ">
                    <span class="p-2 text-sm text-white bg-black rounded-t-lg">What services do you offer</span>
                </p>
              <div class="border-t border-gray-200"></div>
            </div>
          </div>
          <div class="mt-10 sm:mt-0">
            <div class="md:grid md:grid-cols-3 md:gap-6">
              <div class="mt-5 md:mt-0 md:col-span-2">
                <form action="#" method="POST">
                  <div class="overflow-hidden shadow sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6">
                      <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-3">
                          <label for="service-name" class="block text-sm font-medium text-gray-700">Service name</label>
                          <input type="text" name="service-name" id="service-name" autocomplete="service-name" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" wire:model="service.name">
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                          <label for="last-name" class="block text-sm font-medium text-gray-700">Duration</label>
                          <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" wire:model="service.duration">
                        </div>
                      </div>
                    </div>
                    <div class="px-4 py-3 text-right bg-gray-50 sm:px-6">
                      <button type="submit" class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Attach Employee</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
    </form>
</div>
