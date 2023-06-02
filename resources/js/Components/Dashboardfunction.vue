<template>
    <div>
      <div class="flex h-screen">
        <div class="w-max bg-gray-100 p-8">
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Box 1 -->
            <div class="relative bg-blue-300 p-6 rounded-lg shadow-md" style="box-shadow: 2px 2px 5px #222222;">
              <span class="absolute top-3 right-3 bg-red-400 text-white rounded-full px-2 py-1 text-xs">{{ carCount }}</span>
              <div class="flex items-center mb-4">
                <i class="fas fa-car text-3xl text-gray-200 mr-2"></i>
                <h2 class="text-xl font-semibold">Cars</h2>
              </div>
              <p class="text-center">Money may not buy happiness, but I'd rather cry in a Jaguar than on a bus.</p>
              <div class="absolute bottom-2 left-0 right-0 flex justify-center">
                <a :href="route('cars.index')" class="text-gray-600 underline flex items-center">
                  See More
                  <i class="fas fa-arrow-right ml-1"></i>
                </a>
              </div>
            </div>
  
            <!-- Box 2 -->
            <div class="relative bg-green-300 p-6 rounded-lg shadow-md" style="box-shadow: 2px 2px 5px #222222;">
              <span class="absolute top-3 right-3 bg-red-400 text-white rounded-full px-2 py-1 text-xs">{{ userCount }}</span>
              <div class="flex items-center mb-4">
                <i class="fas fa-users text-3xl text-gray-200 mr-2"></i>
                <h2 class="text-xl font-semibold">Users</h2>
              </div>
              <p class="text-center">That's one small step for a man, a giant leap for mankind.</p>
              <div class="absolute bottom-2 left-0 right-0 flex justify-center">
                <a :href="route('users')" class="text-gray-600 underline flex items-center">
                  See More
                  <i class="fas fa-arrow-right ml-1"></i>
                </a>
              </div>
            </div>
  
            <!-- Box 3 -->
            <div class="relative bg-yellow-300 p-6 rounded-lg shadow-md" style="box-shadow: 2px 2px 5px #222222;">
              <span class="absolute top-3 right-3 bg-red-400 text-white rounded-full px-2 py-1 text-xs">{{ userCount }}</span>
              <div class="flex items-center mb-4">
                <i class="fas fa-user-friends text-3xl text-gray-200 mr-2"></i>
                <h2 class="text-xl font-semibold">Visitors</h2>
              </div>
              <p class="text-center">Invest in Their Rest. A comfortable bed is arguably the most important thing you can provide for your guest. .</p>
              <div class="absolute bottom-2 left-0 right-0 flex justify-center">
                <a :href="route('users')" class="text-gray-600 underline flex items-center">
                  See More
                  <i class="fas fa-arrow-right ml-1"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </template>
  <script>
  import { usePage } from '@inertiajs/vue3';
//   import { a } from '@inertiajs/vue3'
  
  export default {
    setup() {
      const { props } = usePage();
      const carCount = props.carCount;
      const userCount = props.userCount;
  
      // Other component logic
  
      return {
        carCount,
        userCount,
      };
    },
  };
  </script>
  