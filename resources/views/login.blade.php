<x-layout>
    <div class="h-screen flex justify-center">
        <div class="sm:basis-1/2 my-auto">
            <form action="/login/auth" method="get" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <img src="{{ asset('logo.png') }}" class="object-contain h-28 mx-auto mb-2"/>
                <h1 class="text-md mb-4">Sign In Dosen/Reviewer</h1>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                        Email
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" name="email" type="text" placeholder="Email">
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                        Password
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" name="password" type="password" placeholder="******************">
                </div>
                <div class="flex items-center justify-between">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                        Sign In
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-layout>