@if (session()->has('success'))
<div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-200 dark:bg-gray-800 dark:text-green-400" role="alert">
    <span class="font-medium">  {{ session('success') }}</span>
</div>
@endif

@if (session()->has('message'))
<div class="p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-200 dark:bg-gray-800 dark:text-blue-400" role="alert">
    <span class="font-medium">{{ session('message') }}</span> Change a few things up and try submitting again.
  </div>
@endif

@if (session()->has('error'))
<div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-200 dark:bg-gray-800 dark:text-red-400" role="alert">
    <span class="font-medium">  {{ session('error') }}</span>
</div>
@endif
