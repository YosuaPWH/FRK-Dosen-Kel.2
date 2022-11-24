<button data-dropdown-toggle="ubah-data" class="p-1 hover:bg-whitety rounded-lg" type="button" data-dropdown-placement="left">
    <svg class="w-4 h-4 hover:fill-slate-900" data-dropdown-toggle="ubah-data" viewBox="0 0 27 29" fill="#FFFFFF" xmlns="http://www.w3.org/2000/svg"><path d="M23.3438 15.81C23.4005 15.36 23.4288 14.895 23.4288 14.4C23.4288 13.92 23.4005 13.44 23.3297 12.99L26.2055 10.62C26.4605 10.41 26.5313 10.005 26.3755 9.705L23.6555 4.725C23.4855 4.395 23.1313 4.29 22.8197 4.395L19.4338 5.835C18.7255 5.265 17.9747 4.785 17.1388 4.425L16.6288 0.615C16.5722 0.255 16.2888 0 15.9488 0H10.5088C10.1688 0 9.89967 0.255 9.843 0.615L9.333 4.425C8.49717 4.785 7.73217 5.28 7.038 5.835L3.65217 4.395C3.3405 4.275 2.98633 4.395 2.81633 4.725L0.1105 9.705C-0.0594995 10.02 -0.002833 10.41 0.2805 10.62L3.15633 12.99C3.0855 13.44 3.02883 13.935 3.02883 14.4C3.02883 14.865 3.05717 15.36 3.128 15.81L0.252167 18.18C-0.00283298 18.39 -0.0736661 18.795 0.0821672 19.095L2.80217 24.075C2.97217 24.405 3.32633 24.51 3.638 24.405L7.02383 22.965C7.73217 23.535 8.483 24.015 9.31883 24.375L9.82883 28.185C9.89967 28.545 10.1688 28.8 10.5088 28.8H15.9488C16.2888 28.8 16.5722 28.545 16.6147 28.185L17.1247 24.375C17.9605 24.015 18.7255 23.535 19.4197 22.965L22.8055 24.405C23.1172 24.525 23.4713 24.405 23.6413 24.075L26.3613 19.095C26.5313 18.765 26.4605 18.39 26.1913 18.18L23.3438 15.81ZM13.2288 19.8C10.4238 19.8 8.12883 17.37 8.12883 14.4C8.12883 11.43 10.4238 9 13.2288 9C16.0338 9 18.3288 11.43 18.3288 14.4C18.3288 17.37 16.0338 19.8 13.2288 19.8Z" /></svg>
</button>

{{-- Dropdown Ubah Data Biodata --}}

<a href="#" data-modal-toggle="updateBiodata" class="text-xs p-2 hover:bg-bluedesign hover:text-whitety bg-whitety text-decoration-none hidden rounded-lg" id="ubah-data">
    Ubah data
</a>

<script>
    document.addEventListener("DOMContentLoaded", function(event) {
    document.getElementById('updateBiodata').click();
});
</script>

<div id="updateBiodata" tabindex="-1" aria-hidden="true" class="p-4 hidden overflow-y-auto overflow-x-hidden top-0 right-0 left-0 z-50 justify-center fixed items-center w-full md:inset-0 md:h-full">
    <div class="relative w-full max-w-2xl rounded-lg h-full md:h-auto bg-white">
        <div class="relative p-4 bg-whitety rounded-lg shadow sm:p-5">
            <div class="header flex justify-between">
                <h3>Ubah Biodata</h3>
                <button type="button" data-modal-toggle="updateBiodata">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </div>
        </div>
    </div>
</div>

{{-- <div id="updateProductModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
            <!-- Modal header -->
            <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                <h3 class="text-lg font-semibold text-black dark:text-white">
                    Update Product
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="updateProductModal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form action="#">
                <div class="grid gap-4 mb-4 sm:grid-cols-2">
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                        <input type="text" name="name" id="name" value="iPad Air Gen 5th Wi-Fi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Ex. Apple iMac 27&ldquo;">
                    </div>
                    <div>
                        <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Brand</label>
                        <input type="text" name="brand" id="brand" value="Google" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Ex. Apple">
                    </div>
                    <div>
                        <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                        <input type="number" value="399" name="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="$299">
                    </div>
                    <div>
                        <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                        <select id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected="">Electronics</option>
                            <option value="TV">TV/Monitors</option>
                            <option value="PC">PC</option>
                            <option value="GA">Gaming/Console</option>
                            <option value="PH">Phones</option>
                        </select>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                        <textarea id="description" rows="5" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Write a description...">Standard glass, 3.8GHz 8-core 10th-generation Intel Core i7 processor, Turbo Boost up to 5.0GHz, 16GB 2666MHz DDR4 memory, Radeon Pro 5500 XT with 8GB of GDDR6 memory, 256GB SSD storage, Gigabit Ethernet, Magic Mouse 2, Magic Keyboard - US</textarea>                    
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    <button type="submit" class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                        Update product
                    </button>
                    <button type="button" class="text-red-600 inline-flex items-center hover:text-white border border-red-600 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">
                        <svg class="mr-1 -ml-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                        Delete
                    </button>
                </div>
            </form>
        </div>
    </div>
</div> --}}