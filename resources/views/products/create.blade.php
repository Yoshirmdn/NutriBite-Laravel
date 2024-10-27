<x-layout-administrator>
    <div class="container mx-auto p-4">
        <div class="max-w-3xl mx-auto p-6 bg-white shadow-md rounded-lg mt-16">
            <h1 class="text-2xl font-semibold text-gray-800 mb-6">Add Product</h1>
            <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="product_code" class="block text-sm font-medium text-gray-700">Product Code</label>
                        <input type="text" name="product_code" id="product_code" autocomplete="off"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-amber-500 focus:ring focus:ring-amber-500 focus:ring-opacity-50" />
                    </div>
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Product Name</label>
                        <input type="text" name="name" id="name" autocomplete="off"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-amber-500 focus:ring focus:ring-amber-500 focus:ring-opacity-50" />
                    </div>
                    <div class="md:col-span-2">
                        <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                        <textarea name="description" id="description" rows="3"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-amber-500 focus:ring focus:ring-amber-500 focus:ring-opacity-50"></textarea>
                    </div>
                    <div class="md:col-span-2">
                        <label for="allergies" class="block text-sm font-medium text-gray-700">Allergies</label>
                        <div class="mt-2 grid grid-cols-1 sm:grid-cols-3 gap-4">
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="checkbox" name="allergies[]" value="gluten"
                                        class="form-checkbox h-5 w-5 text-amber-600" />
                                    <span class="ml-2 text-gray-700">Gluten</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="checkbox" name="allergies[]" value="peanut"
                                        class="form-checkbox h-5 w-5 text-amber-600" />
                                    <span class="ml-2 text-gray-700">Peanut</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="checkbox" name="allergies[]" value="lactose"
                                        class="form-checkbox h-5 w-5 text-amber-600" />
                                    <span class="ml-2 text-gray-700">Lactose</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="checkbox" name="allergies[]" value="fish"
                                        class="form-checkbox h-5 w-5 text-amber-600" />
                                    <span class="ml-2 text-gray-700">Fish</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="md:col-span-2">
                        <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                        <input type="file" name="image" id="image"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-amber-500 focus:ring focus:ring-amber-500 focus:ring-opacity-50" />
                    </div>
                </div>
                <div class="mt-6 flex justify-end">
                    <button type="submit"
                        class="px-6 py-2 rounded-md text-white bg-amber-900 hover:bg-opacity-80 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:ring-opacity-50">
                        Save
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-layout-administrator>
