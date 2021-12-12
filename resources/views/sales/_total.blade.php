<x-card>
    <x-card-heading>
        Sale Total
        <x-slot name="buttons" class="items-baseline">
            <span class="text-xl text-blue-600">23</span>
            <span class="text-gray-500 ml-2">item(s)</span>
        </x-slot>
    </x-card-heading>
    <div class="px-6 py-4 space-y-4">
        <div>
          <label for="total_amount" class="block text-sm font-medium text-gray-700">
            Amount
          </label>
          <div class="mt-1">
            <input id="total_amount" name="total_amount" type="text" autocomplete="total_amount" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
          </div>
        </div>

        <div>
            <label for="discount" class="block text-sm font-medium text-gray-700">
                Discount
            </label>
            <div class="mt-1">
                <input id="discount" name="discount" type="text" autocomplete="discount" required
                    class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
        </div>

        <div>
          <label for="before_tax" class="block text-sm font-medium text-gray-700">
            Amount before tax
          </label>
          <div class="mt-1">
            <input id="before_tax" name="before_tax" type="text" autocomplete="before_tax" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
          </div>
        </div>

        <div>
          <label for="vat" class="block text-sm font-medium text-gray-700">
            VAT
          </label>
          <div class="mt-1">
            <input id="vat" name="vat" type="text" autocomplete="vat" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
          </div>
        </div>

        <div>
            <label for="net_amount" class="block text-sm font-medium text-gray-700">
                Net amount
            </label>
            <div class="mt-1">
                <input id="net_amount" name="net_amount" type="text" autocomplete="net_amount" required
                    class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
        </div>
    </div>
</x-card>
