<x-layout-administrator>
    <div class="container mx-auto p-4">
        <div class="flex flex-col md:flex-row justify-between items-center mt-14">
            <h1 class="text-2xl font-semibold text-gray-700 mb-4 md:mb-0">Product List</h1>
            <a href="{{ route('products.create') }}"
                class="btn-custom px-4 py-2 rounded text-white bg-amber-900 hover:bg-opacity-80">Add Product</a>
        </div>
        <div class="mt-4 overflow-x-auto">
            <table class="w-full border-collapse border border-gray-300 min-w-max">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="border border-gray-300 px-4 py-2">No</th>
                        <th class="border border-gray-300 px-4 py-2">Product Code</th>
                        <th class="border border-gray-300 px-4 py-2">Product Name</th>
                        <th class="border border-gray-300 px-4 py-2">Description</th>
                        <th class="border border-gray-300 px-4 py-2">Alergi</th>
                        <th class="border border-gray-300 px-4 py-2">Image</th>
                        <th class="border border-gray-300 px-4 py-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">{{ $loop->iteration }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $product->product_code }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $product->name }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $product->description }}</td>
                            <td class="border border-gray-300 px-4 py-2">
                                @foreach (json_decode($product->allergies) as $allergy)
                                    <span class="">{{ $allergy }}</span>
                                @endforeach
                            </td>
                            <td class="border border-gray-300 px-4 py-2">
                                <img src="{{ $product->image }}" alt="{{ $product->name }}"
                                    class="w-20 h-20 object-cover">
                            </td>
                            <td class="border border-gray-300 px-4 py-2">
                                <a href="{{ route('products.edit', $product->id) }}"
                                    class="btn-custom px-4 py-2 rounded text-white bg-amber-900 hover:bg-opacity-80">Edit</a>
                                <form action="{{ route('products.destroy', $product->id) }}" method="POST"
                                    class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="btn-custom px-4 py-2 rounded text-white bg-red-600 hover:bg-opacity-80">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layout-administrator>
