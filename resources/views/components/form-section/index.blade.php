<div {{ $attributes }}>
    <div>
        <h3 class="text-lg leading-6 font-medium text-gray-900">
            {{ $title }}
        </h3>
        <p class="mt-1 max-w-2xl text-sm text-gray-500">
            {{ $description }}
        </p>
    </div>
    {{ $slot }}
</div>
